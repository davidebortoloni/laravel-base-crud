@extends('layouts.main')

@section('title', ' | Trash')

@section('content')
    <div class="card p-3">
        @if(session('alert'))
            <div class="alert alert-{{ session('alert_type') }}" role="alert">
                {{ session('alert') }}
            </div>
        @endif
        <div class="card-header d-flex justify-content-between">
            <h2>Trash</h2>
            <a class="btn btn-success" href="{{ route('comics.create') }}">New Comic</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Series</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">Details</a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                            <form class="d-inline restore-form" method="POST" action="{{ route('comics.restore', $comic->id) }}" data-title="{{ $comic->title }}">
                                @method('PATCH')
                                @csrf
                                <button type="submit" class="btn btn-secondary">Restore</button>
                            </form>
                            <form class="d-inline delete-form" method="POST" action="{{ route('comics.destroy', $comic->id) }}" data-title="{{ $comic->title }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Permanently delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="text-center">No comics were found</td></tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/delete_confirmation.js') }}"></script>
    <script src="{{ asset('js/restore_confirmation.js') }}"></script>
@endsection