<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieModel;
use App\Models\GenreModel;
use App\Models\EpisodeModel;

class MovieDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $id)
    {
        $movies = MovieModel::find($id);
        $genres = GenreModel::find($movies->GenreID);
        $episodes = EpisodeModel::where('MovieID', $id)->paginate(3);

        return view('moviedetail',compact('movies', 'genres', 'episodes'));
    }
}
