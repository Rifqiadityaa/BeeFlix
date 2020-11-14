<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieModel;
use App\Models\GenreModel;

class MainMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = MovieModel::all();
        $genres = GenreModel::all();

        return view('mainmenu',compact('movies', 'genres'));
    }
}
