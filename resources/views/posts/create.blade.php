@extends('layouts.app')

@section('content')
    <h1>Create posts</h1>
    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title"/>
            </div>
            <div class="form-group">
                <label for="quantity">Body:</label>
                <textarea name="body" id="article-ckeditor" class="form-control" cols="20" rows="7"></textarea>
            </div>
            <div class="form-group">
                    <label for="quantity">Image:</label>
                    <input type="file" name="cover_image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create post</button>
    </form>
@endsection
