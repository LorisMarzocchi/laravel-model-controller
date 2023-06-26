@extends('layouts.app');
@section('content')
<h2 class="text-center">Movie</h2>

<div class="d-flex containerCard flex-wrap">

    @foreach ($movies as $movie)
            <div class="card">
                {{-- <img src="{{ Vite::asset('resources/img/' . $book->img) }}" class="card-img-top" alt=""> --}}
                <div class="card-body">
                    <h3>{{ $movie->title }}</h3>
                <h5 class="card-title">{{ $movie->original_title }} </h5>
                <h5 class="card-title">{{ $movie->nationality }} </h5>
                <h5 class="card-title">{{ $movie->date }} </h5>
                <h5 class="card-title">{{ $movie->vote }} </h5>
                </div>
            </div>
    @endforeach
</div>

@endsection
