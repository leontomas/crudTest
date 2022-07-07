@extends('movies.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('movies.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('movies.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Movie Url:</strong>
                <input type="text" name="movie_url" class="form-control" placeholder="Movie-Url">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Cast:</strong>
                <input type="text" name="cast" class="form-control" placeholder="Cast">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Language:</strong>
                <input type="text" name="language" class="form-control" placeholder="Language">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Quality:</strong>
                <input type="text" name="quality" class="form-control" placeholder="Quality">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Tags:</strong>
                <input type="text" name="tag" class="form-control" placeholder="Tag">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Duration:</strong>
                <input type="text" name="duration" class="form-control" placeholder="Duration">
            </div>

        </div><div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Duration:</strong>
                <input type="text" name="duration" class="form-control" placeholder="Duration">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Year:</strong>
                <input type="text" name="year" class="form-control" placeholder="Year">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Upload DAte:</strong>
                <input type="text" name="upload_date" class="form-control" placeholder="Upload Date">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection