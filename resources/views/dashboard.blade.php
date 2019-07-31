@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary mb-5">Create New Post</a>
                    <h4>Your Blog Posts</h4>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>
                                    <a href="/posts/{{$post->id}}/edit/" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                        @else
                        <h5 class="text-danger">You have not posted any post, create new post</h5>
                        @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
