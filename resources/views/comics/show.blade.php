@extends('layouts.main')

@section('title', ' | ' . $comic->title)

@section('content')
    <div class="card p-3">
        <div class="card-header d-flex justify-content-between">
            <h2>{{ $comic->title }} ({{ $comic->type }})</h2>
            <a class="btn btn-outline-secondary" href="{{ route('comics.index') }}">Come back</a>
        </div>
        <div class="card-body row">
            <div class="col-2">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="w-100">
            </div>
            <div class="col-10">
                <h3 class="text-muted">{{ $comic->series }}</h3>
                <p>
                    {{ $comic->description }}
                </p>
                <strong>Price: </strong>{{ $comic->price }}€
            </div>
        </div>
    </div>
@endsection