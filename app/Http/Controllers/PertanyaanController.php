<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pertanyaan;
use App\Tag;
use App\User;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Profile;


class PertanyaanController extends Controller
{
    //public
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('auth')->only(['index']);
    }

    function index($value = '')
    {
         //$list = DB::table('pertanyaan')->get();
        //$user = DB;
         $list = Pertanyaan::all();
         $profil = Profile::all();

         //$profil = DB::select('select nama_lengkap from profiles where user_id = ?', [$id]);
        //$list = $user->pertanyaans;
        //dd($list);
        return view('example.view_guest', ['list' => $list, 'profil' => $profil]);
    }

    function show($id = 0)
    {
        // $list = DB::table('pertanyaan')->where('id',$id)
        // ->get();
        $list = Pertanyaan::where('id', $id)
            // ->orderBy('name', 'desc')
            // ->take(10)
            ->get();
        //$user = Auth::user();
        // $flight = Flight::firstWhere('active', 1);
        return view('example.view_guest', ['list' => $list]);
    }

    function edit($id = 0)
    {
        // $post = DB::table('pertanyaan')->where('id',$id)
        // ->first();
        $post = Pertanyaan::find($id);
        $tags = "";
        foreach ($post->tags as $tag) {
            $tags .= $tag->tag_name . ',';
        }
        return view('pertanyaan.pertanyaanEdit', compact('post', 'tags'));
    }

    function create()
    {
        return view('pertanyaan.form_pertanyaan');
    }

    function answer(Request $request)
    {
        $validatedData = $request->validate([
            'isi' => 'required',
        ]);

        $user = Auth::user();
        $proses = \App\Jawaban::create([
            'judul' => isset($request->judul) ? $request->judul : NULL,
            'isi' => $request->isi,
            'user_id' => $user->id,
            'pertanyaan_id' => $request->id,
        ]);

        $alert = Alert::success('Berhasil', 'Jawaban berhasil disimpan');
        return redirect("pertanyaan/detail/" . $request->id);
    }

    function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required',
        ]);

        // DB::table('pertanyaan')->insert(
        //     [
        //     	'judul' => $request->judul,
        //     	'isi' => $request->isi,
        //     	'profil_id' => 1,
        //     	'jawaban_tepat_id' => 1,
        //     ]
        // );

        // $pertanyaan = new pertanyaan;
        // $pertanyaan->judul = $request->judul;
        // $pertanyaan->isi = $request->isi;
        // $pertanyaan->profil_id = 1;

        // $pertanyaan->save();

        //*/

        $tags = explode(',', $request->tags);

        $tag_ids = [];
        foreach ($tags as $key) {
            if ($key == null) {
                continue;
            }

            $tag = Tag::where('tag_name', $key)->first();
            if ($tag) {
                $tag_ids[] = $tag->id;
            } else {
                $new_tag = Tag::create(['tag_name' => $key]);
                $tag_ids[] = $new_tag->id;
            }
        }
        // dd($tag_ids);
        $user = Auth::user();

        $pertanyaan = Pertanyaan::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'user_id' => $user->id,
        ]);

<<<<<<< HEAD
        $profil = DB::table('users')
                ->where('id', $pertanyaan->user_id)
                ->value('name');

=======
        $point_v = \App\Point_v::create([
            'pertanyaan_id' => $pertanyaan->id,
            'jumlah_upvote' => '0',
            'jumlah_downvote' => '0',
            'jumlah_jawaban_relevan' => '0',
            'point' => '0',
        ]);
>>>>>>> acf2f05d88c1120803b671d209217a8e3fdb0501

        $pertanyaan->tags()->sync($tag_ids);


        // $user->pertanyaans()->save($pertanyaan);
        // $user->pertanyaans()->associate($pertanyaan);
        $alert = Alert::success('Berhasil', 'Pertanyaan berhasil disimpan');
<<<<<<< HEAD
    	return redirect('/view_guest');//->with("success",'data berhasil disimpan');
=======
        return redirect('pertanyaan'); //->with("success",'data berhasil disimpan');
>>>>>>> acf2f05d88c1120803b671d209217a8e3fdb0501

    }

    function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        // DB::table('pertanyaan')
        // ->where('id', $id)
        // ->update(
        //     [
        //         'judul' => $request->judul,
        //         'isi' => $request->isi,
        //     ]
        // );

        /*Pertanyaan::where('id', $id)
        ->update(
            [
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]
        );

        //*/

        $tags = explode(',', $request->tags);

        $tag_ids = [];
        foreach ($tags as $key) {
            if ($key == null) {
                continue;
            }
            $tag = Tag::firstOrCreate(['tag_name' => trim($key)]);
            $tag_ids[] = $tag->id;
        }

        $user = Auth::user();

<<<<<<< HEAD
        $pertanyaan = Pertanyaan::where(['id'=> $id])
        ->update(
            [
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]
        );
=======
        $pertanyaan = Pertanyaan::where(['id' => $id])
            ->update(
                [
                    'judul' => $request->judul,
                    'isi' => $request->isi,
                ]
            );
>>>>>>> acf2f05d88c1120803b671d209217a8e3fdb0501
        $pertanyaan = Pertanyaan::find($id);
        // dd($user);
        $pertanyaan->tags()->sync($tag_ids, false);


        $alert = Alert::success('Berhasil', 'Pertanyaan berhasil diperbaharui');
        return redirect('pertanyaan'); //->with("success",'data berhasil disimpan');

    }

    function destroy($id)
    {
        // DB::table('pertanyaan')
        // ->where('id', $id)
        // ->delete();

        Pertanyaan::destroy($id);
        $alert = Alert::success('Berhasil', 'Pertanyaan berhasil dihapus');
<<<<<<< HEAD
        return redirect('pertanyaan');//->with("success",'data berhasil dihapus');
=======
        return redirect('pertanyaan'); //->with("success",'data berhasil dihapus');

    }

    function detail($id)
    {

        // echo $id;
        // $head = \App\Jawaban::find($id)->pertanyaan;
        $get = Pertanyaan::find($id);
        // $detail = $get->jawaban;
        // $get = \App\Jawaban::find($id);
        // $get = \App\Jawaban::find($id)->pertanyaan->isi;
        // dd($get);
>>>>>>> acf2f05d88c1120803b671d209217a8e3fdb0501

        return view('pertanyaan.detail', compact('get'));
    }
}
