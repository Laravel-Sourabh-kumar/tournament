<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tournament;

class TournamentController extends Controller
{
    public function index(){
        Tournament::orderby('id','desc')->delete();

        return view('tournament.index');
    }
    public function submit(Request $req){

        foreach($req->name as $key=>$r)
        {
           $reg= new Tournament;
           $reg->name=$r;
           $reg->email=$req->email[$key];
           $reg->save();
        }
        return redirect('tournamenet-start');
    }
    public function start(Request $req){

        
        
        $group= Tournament::whereRaw('MOD(id, 2) = 0')->orderby('id','desc')->select('*')->get();
        $user= Tournament::whereRaw('MOD(id, 2) != 0')->orderby('id','desc')->pluck('name');
      
       // dd($user);
        return view('tournament.detail',compact('user','group'));

    }
}
