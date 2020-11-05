 <div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: #c7b198;">
        <div class="container"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1" style="font-family: Lato, sans-serif;">
                <p class="navbar-text" style="margin: auto 0;color: #ffffff;"><img src="{{ asset('/img/mapicon.png') }}" style="width: 20px;height: auto;margin: auto 8px auto 0;">1037, Moscow, st. Louie, building 59/1, building 1</p>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: #ffffff;"><img src="{{ asset('/img/callicon.png') }}" style="width: 20px;height: auto;margin: auto 8px auto 0;">(+62) 817 29172</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: rgb(255,255,255);"><img src="{{ asset('/img/mailicon.png') }}" style="width: 20px;height: auto;margin: auto 8px auto 0;">info@lmdsilence.ru</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding: 8px;">
        <div class="container"><a class="navbar-brand" href="#"><img src="{{ asset('/img/museumlogo.png') }}" style="height: 100px;width: 100px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="font-family: Lato, sans-serif;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item {{ (request()->is('/homepage')) ? 'active' : '' }}" role="presentation"><a class="nav-link" href="/homepage">Home</a></li>
                    
                    <li class="nav-item {{ (request()->is('/artwork')) ? 'active' : '' }}" role="presentation"><a class="nav-link" href="/artwork">Artworks</a></li>
                    <li class="nav-item {{ (request()->is('/artist')) ? 'active' : '' }}" role="presentation"><a class="nav-link" href="/artist">Artists</a></li>
                    <li class="nav-item {{ (request()->is('/list')) ? 'active' : '' }}" role="presentation"><a class="nav-link" href="/list">List</a></li>
                    
                    <li class="nav-item {{ (request()->is('/contact')) ? 'active' : '' }}" role="presentation"><a class="nav-link" href="/contact">Contact</a></li>
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
                
        </div>
</div>
</nav>
</div>