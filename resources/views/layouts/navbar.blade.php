<div class="ui secondary pointing menu">
    <div class="item">
        <a href="{{ url('/') }}"><img class="ui image" src="/img/dwd_logo.png"></a>
    </div>
    <a class="item active" href="{{ url('/') }}">
        Home
    </a>

    @if (Auth::guest())
        <a class="item" href="/about">Sobre</a>
    @else
        <a class="item" href="{{route('post.create')}}">
            +Post
        </a>
        <a class="item">
            Posts
        </a>
    @endif
    <div class="right menu">
        @if (Auth::guest())
            <a class="item" href="{{url('/login')}}">Login</a>
            <a class="item" href="{{url('/register')}}">Registrar</a>
        @else
            <div class="ui right dropdown item">
                {{ Auth::user()->name }}
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </div>
                    <div class="item">International Students</div>
                    <div class="item">Scholarships</div>
                </div>
            </div>
            <div class="item">
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </div>

        @endif
    </div>
</div>
