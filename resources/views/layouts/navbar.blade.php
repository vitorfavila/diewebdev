<div class="ui secondary pointing menu">
    <div class="item">
        <a href="{{ url('/') }}"><img class="ui image" src="/img/dwd_logo.png"></a>
    </div>
    <a class="item active menu-home" href="{{ url('/') }}">
        Home
    </a>

    @if (Auth::guest())
        <a class="item menu-about" href="/about">Sobre</a>
    @else
        <a class="item menu-new-post" href="{{route('post.create')}}">
            +Post
        </a>
    @endif
    <div class="right menu">
        @if (Auth::guest())
            <a class="item menu-login" href="{{url('/login')}}">Login</a>
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
