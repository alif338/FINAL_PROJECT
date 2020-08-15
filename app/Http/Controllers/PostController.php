<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function __invoke($value = '')
    {

        return view('adminlte.table.table');
    }

    public function upvote_pro(Request $request)
    {
        // $data = $request->all();

        if (Auth::id() != $request->idu) {


            $up = \App\Upvote::create([
                'user_id' => $request->idu,
                'pertanyaan_id' => $request->idp,
            ]);

            $getUpV = \App\Point_v::find($request->idp);
            // // $getUpV->timestamps = false;
            $getUpV->jumlah_upvote += 1;
            $getUpV->point +=  10;
            $jumlah = $getUpV->jumlah_upvote - $getUpV->jumlah_downvote;
            $getUpV->save();

            $data = [
                'result' => '1',
                'upvote' => ($jumlah > 0) ? $jumlah : '0',
            ];
        } else {
            $data = [
                'result' => '0',
            ];
        }

        return response()->json($data);
    }
    public function downvote_pro(Request $request)
    {
        // $data = $request->all();

        if (Auth::id() != $request->idu) {


            $up = \App\Downvote::create([
                'user_id' => $request->idu,
                'pertanyaan_id' => $request->idp,
            ]);

            $getUpV = \App\Point_v::find($request->idp);
            // // $getUpV->timestamps = false;
            $getUpV->jumlah_downvote += 1;
            $getUpV->point =  ($getUpV->point > 0) ? $getUpV->point - 1 : 0;
            $jumlah = $getUpV->jumlah_upvote - $getUpV->jumlah_downvote;
            $getUpV->save();

            $data = [
                'result' => '1',
                'downvote' => ($jumlah > 0) ? $jumlah : '0',
            ];
        } else {
            $data = [
                'result' => '0',
            ];
        }

        return response()->json($data);
    }
}
