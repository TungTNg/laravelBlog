    <!-- Default Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <a class="navbar-brand" href="/laravelBlog/">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('/') ? "active" : "" }}">
                    <a class="nav-link" href="/laravelBlog/">Home</a>
                </li>
                <li class="nav-item {{ Request::is('posts') ? "active" : "" }}">
                    <a class="nav-link" href="/laravelBlog/posts">Posts</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? "active" : "" }}">
                    <a class="nav-link" href="/laravelBlog/about">About</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? "active" : "" }}">
                    <a class="nav-link" href="/laravelBlog/contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     My Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>