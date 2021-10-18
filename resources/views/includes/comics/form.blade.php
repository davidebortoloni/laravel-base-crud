@if ($comic->exists)
    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
        @method('PATCH')
@else        
    <form method="POST" action="{{ route('comics.store', $comic->id) }}">
@endif
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
              <div id="title-help" class="form-text">Enter the title of the comic</div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
              <label for="series" class="form-label">Series</label>
              <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
              <div id="series-help" class="form-text">Enter the series of the comic</div>
            </div>
        </div>                  
        <div class="col-6">
            <div class="mb-3">
              <label for="thumb" class="form-label">Cover URL</label>
              <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
              <div id="thumb-help" class="form-text">Enter the absolute URL to the comic cover</div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
              <div id="type-help" class="form-text">Enter the type of the comic</div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                <div id="price-help" class="form-text">Enter the price of the comic</div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="sale-date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale-date" name="sale_date" value="{{ $comic->sale_date }}">
                <div id="sale-date-help" class="form-text">Enter the sale-date of the comic</div>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" rows="8">{{ $comic->description }}</textarea>
              <div id="description-help" class="form-text">Enter the description of the comic</div>
            </div>
        </div>
        <div class="col 12 mt-2">
            <input class="btn btn-outline-secondary" type="reset" value="Reset">
            <input class="btn btn-success" type="submit" value="Confirm">
        </div>
    </div>
</form>