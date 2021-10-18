@extends('layouts.main')

@section('title', ' | ' . $comic->title)

@section('content')
    <div class="card p-3">
        <div class="card-header d-flex justify-content-between">
            <h2>{{ $comic->title }} ({{ $comic->type }})</h2>
            <div>
                <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                <form class="d-inline delete-form" method="POST" action="{{ route('comics.destroy', $comic->id) }}" data-title="{{ $comic->title }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a class="btn btn-outline-secondary" href="{{ url()->previous() }}">Come back</a>
            </div>
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

@section('scripts')
    <script src="{{ asset('js/delete_confirmation.js') }}"></script>
@endsection