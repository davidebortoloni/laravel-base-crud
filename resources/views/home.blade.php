@extends('layouts.main')

@section('title', ' | Home')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card text-center mb-5 w-50 p-3">
            <h1>Welcome to Comics</h1>
            <h3>the nerd house</h3>
        </div>
    </div>
    <div class="row g-4 justify-content-center mb-5">
        @foreach ($comics as $comic)
            <div class="col-4">
                <a class="d-block text-black" href="{{ route('comics.show', $comic->id) }}">
                    <div class="card text-center">
                        <h5 class="card-header">{{ $comic->title }}</h5>
                        <div class="card-body">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} Cover" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection