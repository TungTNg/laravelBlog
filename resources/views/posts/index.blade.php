@extends('main')

@section('title', '| All Posts')

@section('content')

    <div class="row">
        <div class="col-md-9">
            <h1>All Posts</h1>
        </div>
        
        <div class="col-md-3">
            <a href="{{ route ('posts.create') }}" class="btn btn-primary btn-block my-2 btn-h1-spacing">Create New Post</a>
        </div>
        
        <div class="col-md-12"><hr></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                
                <tbody>
                    @foreach ($posts as $post)
                    
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{!! substr($post->body, 0, 50) !!}{{ strlen($post->body) > 50 ? "..." : ""}}</td>
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-outline-secondary">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-danger">Edit</a></td>
                        </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
