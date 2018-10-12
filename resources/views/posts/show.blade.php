@extends('main')

@section('title', '| View Post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>

            <div class='lead'>{!! $post->body !!}</div>
        </div>
        
        <div class="col-md-4">
            <div class="card card-body bg-light">
                <dl class="row">
                    <dt class="col-sm-6">
                        Created At:
                    </dt>
                    <dd class="col-sm-6">
                        {{ date('M j, Y h:ia', strtotime($post->created_at)) }}
                    </dd>
            
                    <dt class="col-sm-6">
                        Last Updated:
                    </dt>
                    <dd class="col-sm-6">
                        {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}
                    </dd>    
                </dl>
        
                <hr>
                
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
                        
                        {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection