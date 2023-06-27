@extends('layouts.app');
@section('content')


@php
    $orgDate = 'movie->date';
    $newDate = date("d-m-Y", strtotime($orgDate));
@endphp


<h2 class="text-center text-danger">Movie</h2>
<a href="/">Home</a>

<div class="containerCard">

    @foreach ($movies as $movie)
    <div class="col m-2">
        <div class="card">
            <img src="{{ Vite::asset('resources/img/' . $movie->img) }}" class="card-img-top" alt="">
            <div class="card-body">
                <h3>{{ $movie->title }}</h3>
                <h5 class="card-title">{{ $movie->original_title }} </h5>
                <h5 class="card-title">{{ $movie->nationality }} </h5>
                <h5 class="card-title">{{ $newDate }} </h5>
                <h5 class="card-title">{{ $movie->vote }} </h5>

             </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
