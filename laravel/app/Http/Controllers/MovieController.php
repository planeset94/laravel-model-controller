<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieModel;

class MovieController extends Controller
{


    public function index(){
        //variabile con inizio min.
        $movies =  MovieModel::all();
        return view('movies.index' , compact('movies'));
    }



}