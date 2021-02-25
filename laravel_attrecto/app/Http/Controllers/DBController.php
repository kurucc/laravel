<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Beers;

class DBController extends Controller
{
    function addData(Request $req)
    {
        if(Auth::check())
        {
        $data = new Beers;
        $user = Auth::user()->email;

        $data->user = $user;
        $data->tipusok = $req->tipusok;
        $data->malatak = $req->malatak;
        $data->komlok = $req->komlok;
        $data->elesztok = $req->elesztok;
        $data->cukor = $req->cukor;
        $data->moszat = $req->moszat;
        $data->laktoz = $req->laktoz;
        $data->megcsinalt = $req->megcsinalt;
        $data->mikor = $req->mikor;
        $data->save();
        return redirect('/');
        }
        
    }

    function getDatas()
    {
        $user = Auth::user()->email;
        $notdone = Beers::where('user', $user)->where('megcsinalt','nem')->get();
        $done = Beers::where('user', $user)->where('megcsinalt','igen')->get();

        return view('eddigi-sorok', ['beersyes'=>$done, 'beersno'=>$notdone]);
    }

    function updateData(Request $req)
    {
        foreach($req->id as $key=>$value)
        {
            if(!is_null($req->mikor[$key]))
            {

             Beers::where('id', $value)->update(array('megcsinalt' => 'Igen', 'mikor' => $req->mikor[$key]));

            }
            
        }
        return redirect('/eddigi-sorok');
    }
}