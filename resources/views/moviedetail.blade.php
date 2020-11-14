@extends('layout.header')

@section('title', ''.$movies->Title)

@section('content')

<div class="container mt-5 py-3" style="background-color: #F7F7F7;">
    <div class="row justify-content-center">
        <img class="col-3" src="/Images/{{ $movies->Photo }}" alt="" width="100%">
        <div class="col-5">
            <h3>{{ $movies->Title }}</h3>
            <div style="margin-bottom: 8px">
                @for ($i = $movies->Rating; $i > 0; $i--)
                    <i class="fas fa-star" style="color: gold"></i>
                @endfor
            </div>
            <p>{{ $movies->Description }}</p>
            <br>
            <span>Category: <a href="/movies/genre/{{ $movies->GenreID }}">{{ $genres->Name }}</a></span>
        </div>
        <div class="col-3">
            <h4 style="text-align: center">Episodes</h4>
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Episode</th>
                        <th scope="col">Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($episodes as $episode)
                    <tr>
                        <th scope="row">{{ $episode->Episode }}</th>
                        <td>{{ $episode->Title }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $episodes->links() }}
        </div>
    </div>
</div>
@endsection