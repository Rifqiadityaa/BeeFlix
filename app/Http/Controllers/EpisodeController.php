<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EpisodeModel;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episodes = EpisodeModel::paginate(3);

        return view('moviedetail',compact('episodes'));
    }
}
