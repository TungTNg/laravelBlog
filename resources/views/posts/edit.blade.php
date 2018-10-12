@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
            
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ["class" => "form-control form-control-lg"]) }}

            {{ Form::label('body', 'Body:', ["class" => "mt-4"]) }}
            {{ Form::textarea('body', null, ["class" => "form-control"]) }}
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
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save', ['class'=>'btn btn-success btn-block']) }}
                    </div>
                </div>
                
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection