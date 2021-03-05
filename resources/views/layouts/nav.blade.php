<nav class="p-6 bg-indigo-600 flex justify-between mb-6 text-white">
    <ul class="flex items-center">
        <li class="p-3">
            <a href="/">Main</a>
        </li>
        <li class="p-3">
            <a href="/home">Dashboard</a>
        </li>
        <li class="p-3">
            <a href="/offers">Offers</a>
        </li>
    </ul>
    <!-- Right Side Of Navbar -->
    <ul class="flex items-center">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="p-3">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            
            @if (Route::has('register'))
                <li class="p-3">
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
</nav>