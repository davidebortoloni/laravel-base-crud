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
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $comic->title) }}">
              @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
              @else
                <div id="title-help" class="form-text">Enter the title of the comic</div>
              @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
              <label for="series" class="form-label">Series</label>
              <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series', $comic->series) }}">
              @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
              @else
                <div id="series-help" class="form-text">Enter the series of the comic</div>
              @enderror
            </div>
        </div>                  
        <div class="col-6">
            <div class="mb-3">
              <label for="thumb" class="form-label">Cover URL</label>
              <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
              @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
              @else
                <div id="thumb-help" class="form-text">Enter the absolute URL to the comic cover</div>
              @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type', $comic->type) }}">
              @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
              @else
                <div id="type-help" class="form-text">Enter the type of the comic</div>
              @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div id="price-help" class="form-text">Enter the price of the comic</div>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="sale-date" class="form-label">Sale Date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale-date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div id="sale-date-help" class="form-text">Enter the sale date of the comic</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="8">{{ old('description', $comic->description) }}</textarea>
              @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
              @else
                <div id="description-help" class="form-text">Enter the description of the comic</div>
              @enderror
            </div>
        </div>
        <div class="col 12 mt-2">
            <input class="btn btn-outline-secondary" type="reset" value="Reset">
            <input class="btn btn-success" type="submit" value="Confirm">
        </div>
    </div>
</form>