@extends('layouts.app')

@section('content')
<br />
    <a href="/posts" class="btn btn-success btn-small">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}">
    <br />
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on: {{$post->created_at}}, by: {{$post->user->name}}</small>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <hr />
    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    @endif
    @endif
@endsection
