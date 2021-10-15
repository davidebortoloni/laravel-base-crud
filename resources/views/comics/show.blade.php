@extends('layouts.main')

@section('title', ' | ' . $comic->title)

@section('content')
    <div class="card p-3">
        <h2 class="card-header">{{ $comic->title }} ({{ $comic->type }})</h2>
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