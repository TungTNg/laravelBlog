@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
    <link rel="stylesheet" href="/laravelBlog/css/parsley.css" type="text/css" />
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 offset-2">
            <h1>Create New Post</h1>
            <hr>
            
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
                
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                
                {{ Form::label('body', 'Post Body') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'placeholder' => 'Enter the blog post here...', 'required' => '')) }}
                
                {{ form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block mt-3')) }}
            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="/laravelBlog/js/parsley.min.js"></script>
@endsection 