<?php

use app/MovieModel;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{


    public function index(){
        ddd($MovieModel::all());
        return view ('movies.index');
    }



}