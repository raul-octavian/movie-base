@extends('movies.layout')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h2>Movie list</h2>
    <div class="float-right">
        <a class="btn btn-success" href="{{ route('movies.create') }}">Create new movie</a>
    </div>
  </div>
</div>
@if ($message = Session::get('success'))

    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  
@endif

<table class="table table-bordered">

  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Release date</th>
    <th>Director</th>
    <th>story</th>
    <th>Actions</th>
  </tr>
  @foreach ($movies as $movie)
  <tr>
    <td>{{ $movie->id }}</td>
    <td>{{ $movie->title }}</td>
    <td>{{ $movie->releaseDate }}</td>
    <td>{{ $movie->director }}</td>
    <td>{{ $movie->story }}</td>
    <td>
      <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
        <a class="btn btn-info" href="{{ route('movies.show', $movie->id) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('movies.edit', $movie->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </td>
  </tr>
    
  @endforeach
</table>

{{ $movies->links() }}


@endsection