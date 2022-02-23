@extends('movies.layout')

@section('content')

<h1>Show movie</h1>

<a class="btn btn-primary float-right" href="{{ route('movies.index') }}">back</a>

<div class="row">

  <div class="col">

    <div class="form-group">
      <strong>Title: </strong>
      {{ $movie->title }}
    </div>

    <div class="form-group">
      <strong>Release date: </strong>
      {{ $movie->releaseDate }}
    </div>

    <div class="form-group">
      <strong>Story: </strong>
      {{ $movie->story }}
    </div>

    <div class="form-group">
      <strong>director: </strong>
      {{ $movie->director }}
    </div>

    <div class="form-group">
      <strong>writer: </strong>
      {{ $movie->writer }}
    </div>

    <div class="form-group">
      <strong>length: </strong>
      {{ $movie->length }}
    </div>

    <div class="form-group">
      <strong>language: </strong>
      {{ $movie->language }}
    </div>

    <div class="form-group">
      <strong>country: </strong>
      {{ $movie->country }}
    </div>

    <div class="form-group">
      <strong>budget: </strong>
      {{ $movie->budget }}
    </div>
  </div>

</div>


@endsection
