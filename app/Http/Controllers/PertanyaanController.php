<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pertanyaan;
use App\Tag;
use Auth;

class PertanyaanController extends Controller
{
    //public 
    public function __construct()
    {
        // $this->middleware('auth')->only(['index']);
    }

    function index($value='')
    {
    	// $list = DB::table('pertanyaan')->get();
        $user = Auth::user();
        // $list = Pertanyaan::all();
        $list = $user->pertanyaans;
        return view('pertanyaan.pertanyaan', ['list' => $list]);
    }

    function show($id=0)
    {
        // $list = DB::table('pertanyaan')->where('id',$id)
        // ->get();
        $list = Pertanyaan::where('id', $id)
               // ->orderBy('name', 'desc')
               // ->take(10)
               ->get();
        // $flight = Flight::firstWhere('active', 1);
        return view('pertanyaan.pertanyaanId', ['list' => $list]);
    }

    function edit($id=0)
    {
        // $post = DB::table('pertanyaan')->where('id',$id)
        // ->first();
        $post = Pertanyaan::find($id);
        return view('pertanyaan.pertanyaanEdit', compact('post'));
    }

    function create()
    {
        return view('pertanyaan.form_pertanyaan');
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
        
        $tag_ids=[];
        foreach ($tags as $key) {
             $tag = Tag::where('tag_name', $key)->first();
             if ($tag) {
                 $tag_ids[]=$tag->id;
             }else{
                $new_tag = Tag::create(['tag_name'=> $key]);
                $tag_ids[]=$new_tag->id;
             }
        }
        $user = Auth::user();       
        // dd($user);

        $pertanyaan = Pertanyaan::create([
             'judul' => $request->judul, 
             'isi' => $request->isi,
             'user_id' => $user->id,
            ]);

        $pertanyaan->tags()->sync($tag_ids);

        
        // $user->pertanyaans()->save($pertanyaan);
        // $user->pertanyaans()->associate($pertanyaan);
        
        

    	return redirect('pertanyaan')->with("success",'data berhasil disimpan');
    }

    function update($id,Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|unique:pertanyaan',
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

        Pertanyaan::where('id', $id)
        ->update(
            [
                'judul' => $request->judul, 
                'isi' => $request->isi,
            ]
        );
        
        return redirect('pertanyaan')->with("success",'data berhasil disimpan');
    }

    function destroy($id)
    {
        // DB::table('pertanyaan')
        // ->where('id', $id)
        // ->delete();

        Pertanyaan::destroy($id);        
        return redirect('pertanyaan')->with("success",'data berhasil dihapus');
    }




}
