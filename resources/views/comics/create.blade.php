@extends('layouts.main')

@section('title', ' | New Comic')

@section('content')
    <div class="card p-3">
        <div class="card-header d-flex justify-content-between">
            <h2>New Comic</h2>
            <a class="btn btn-outline-secondary" href="{{ route('comics.index') }}">Come back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('comics.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title" name="title">
                          <div id="title-help" class="form-text">Enter the title of the comic</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                          <label for="series" class="form-label">Series</label>
                          <input type="text" class="form-control" id="series" name="series">
                          <div id="series-help" class="form-text">Enter the series of the comic</div>
                        </div>
                    </div>                  
                    <div class="col-6">
                        <div class="mb-3">
                          <label for="thumb" class="form-label">Cover URL</label>
                          <input type="text" class="form-control" id="thumb" name="thumb">
                          <div id="thumb-help" class="form-text">Enter the absolute URL to the comic cover</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                          <label for="type" class="form-label">Type</label>
                          <input type="text" class="form-control" id="type" name="type">
                          <div id="type-help" class="form-text">Enter the type of the comic</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price">
                            <div id="price-help" class="form-text">Enter the price of the comic</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sale-date" class="form-label">Sale Date</label>
                            <input type="text" class="form-control" id="sale-date" name="sale_date">
                            <div id="sale-date-help" class="form-text">Enter the sale-date of the comic</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                          <label for="description" class="form-label">Description</label>
                          <textarea class="form-control" id="description" name="description" rows="8"></textarea>
                          <div id="description-help" class="form-text">Enter the description of the comic</div>
                        </div>
                    </div>
                    <div class="col 12">
                        <input class="btn btn-success w-100 mt-2" type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection