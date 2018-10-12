@extends('main') 

@section('title', '| Homepage')

@section('content')
<!-- Welcome Jumbotron -->
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to My Blog!</h1>
            <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
            <hr class="my-4">
            <p>Below are some of my popular posts!</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
        </div>
    </div>
</div>
<!-- end row 1 -->

<!-- Posts & Side bar -->
<div class="row">
    <!-- Posts -->
    <div class="col-md-8">
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente soluta doloribus ea corporis, officiis aliquam ipsum et fuga consectetur laudantium, ad expedita praesentium adipisci earum delectus eligendi quas! Cum, excepturi.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente soluta doloribus ea corporis, officiis aliquam ipsum et fuga consectetur laudantium, ad expedita praesentium adipisci earum delectus eligendi quas! Cum, excepturi.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente soluta doloribus ea corporis, officiis aliquam ipsum et fuga consectetur laudantium, ad expedita praesentium adipisci earum delectus eligendi quas! Cum, excepturi.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente soluta doloribus ea corporis, officiis aliquam ipsum et fuga consectetur laudantium, ad expedita praesentium adipisci earum delectus eligendi quas! Cum, excepturi.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="col-md-3 offset-md-1">
        <h2>Sidebar</h2>
    </div>

</div>
<!-- end row 2 -->
@endsection