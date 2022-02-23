@extends('movies.layout')

@section('content')

<h1>Create movie...</h1>

<a class="btn btn-primary" href="{{ route('movies.index') }}">back</a>

@if ($errors->any())
    <div class="alert alert-danger">
        <p>There was a problem with your input</p>
        <ul>
          @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>
  
@endif

<div>
  <form action="{{ route('movies.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="title">
    </div>

    <div class="mb-3">
      <label for="length" class="form-label">length in min</label>
      <input type="text" class="form-control" id="length" name="length" placeholder="length">
    </div>

    <div class="mb-3">
      <label for="releaseDate" class="form-label">release Date</label>
      <input type="date" class="form-control" id="releaseDate" name="releaseDate" placeholder="releaseDate">
    </div>
  
    <div class="mb-3">
      <label for="country" class="form-label">country</label>
      <input type="text" class="form-control" id="country" name="country" placeholder="country">
    </div>

    <div class="mb-3">
      <label for="language" class="form-label">language</label>
      <input type="text" class="form-control" id="language" name="language" placeholder="language">
    </div>

    <div class="mb-3">
      <label for="production_studio" class="form-label">production studio</label>
      <input type="text" class="form-control" id="production_studio" name="production_studio" placeholder="production_studio">
    </div>

    <div class="mb-3">
      <label for="budget" class="form-label">budget</label>
      <input type="text" class="form-control" id="budget" name="budget" placeholder="budget">
    </div>

    <div class="mb-3">
      <label for="director" class="form-label">director</label>
      <input type="text" class="form-control" id="director" name="director" placeholder="director">
    </div>

    <div class="mb-3">
      <label for="writer" class="form-label">writer</label>
      <input type="text" class="form-control" id="writer" name="writer" placeholder="writer">
    </div>

    <div class="mb-3">
      <label for="story" class="form-label">Story</label>
      <textarea class="form-control" id="story" name="story" rows="3"></textarea>
    </div>

    <div class="">
      <button type="submit" class="btn btn-primary mb-3">
        create movie entry
      </button>
    </div>
  </form>
</div>

@endsection