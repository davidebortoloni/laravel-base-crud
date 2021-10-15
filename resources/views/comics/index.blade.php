@extends('layouts.main')

@section('title', ' | List')

@section('content')
    <div class="card p-3">
        <h2 class="card-header">Comics List</h2>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Series</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sale Date</th>
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
                        <td>{{ $comic->sale_date }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('comics.show', $comic->id) }}">Details</a>
                            <a class="btn btn-success" href="#">Edit</a>
                            <a class="btn btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                        
                    
                    @empty
                    <tr><td colspan="4" class="text-center">No comics were found</td></tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection