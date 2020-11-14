@extends('layout.header')

@section('title', 'Home')

@section('content')
@foreach ($genres as $genre)
<div id="cards_landscape_wrap-2">
    <div class="container">
        <h3 style="margin-top: 50px; text-transform: uppercase">{{ $genre->Name }}</h3>
        <div class="row">
            @foreach ($movies->where('GenreID', $genre->id) as $movie)
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="/movie/{{ $movie->id }}/{{ $movie->Title }}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/Images/{{ $movie->Photo }}" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>{{ $movie->Title }}</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endforeach
@endsection