<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index(){
        $movies = Movie::all();
        // dump($movies);
        // $movies = 'ciao';
        return view('movie', compact('movies'));
    }
}
