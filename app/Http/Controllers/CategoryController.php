<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieModel;
use App\Models\GenreModel;

class CategoryController extends Controller
{
    public function index(int $id)
    {
        $movies = MovieModel::where('GenreID', $id)->get();
        $genres = GenreModel::find($id);
       
        return view('category',compact('movies', 'genres'));
    }
}
