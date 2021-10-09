<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function index(){
        return view('team.index');
    }
    //
    public function martinmueller(){
        return view('team.martinmueller.index');
    }
    //
    public function timtomczak(){
        return view('team.timtomczak.index');
    }
    //
    public function svenwalbroel(){
        return view('team.svenwalbroel.index');
    }
}
