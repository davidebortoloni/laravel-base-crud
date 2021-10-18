@extends('layouts.main')

@section('title', ' | Edit ' . $comic->title)

@section('content')
    <div class="card p-3">
        <div class="card-header d-flex justify-content-between">
            <h2>Edit comic</h2>
            <a class="btn btn-outline-secondary" href="{{ url()->previous() }}">Come back</a>
        </div>
        <div class="card-body">
            @include('includes.comics.form')
        </div>
    </div>
@endsection