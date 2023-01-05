<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">Simple Blog</a>
        <ul class="navbar-nav">
            @if(auth()->check())
                <li><a href="" class="nav-link">Logout</a></li>
            @else
            <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
            <li><a href="{{route('register')}}" class="nav-link">Register</a></li>
            @endif

        </ul>
    </div>
</nav>
