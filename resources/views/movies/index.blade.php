@extends('movies.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 crudTest Application Example</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('movies.create') }}"> Create New Movie</a>
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
            <th>No</th>
            <th>Title</th>
            <th>Movie url</th>
            <th>Description</th>
            <th>Cast</th>
            <th>Language</th>
            <th>Quality</th>
            <th>Tags</th>
            <th>Duration</th>
            <th>Year</th>
            <th>Upload Date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($movies as $movies)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->movie_url }}</td>
            <td>{{ $movie->description }}</td>
            <td>{{ $movie->cast }}</td>
            <td>{{ $movie->language }}</td>
            <td>{{ $movie->quality }}</td>
            <td>{{ $movie->tags }}</td>
            <td>{{ $movie->duration }}</td>
            <td>{{ $movie->year }}</td>
            <td>{{ $movie->upload_date }}</td>
            <td>
                <form action="{{ route('movies.destroy',$movie->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('movies.show',$movie->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('movies.edit',$movie->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $movies->links() !!}
      
@endsection