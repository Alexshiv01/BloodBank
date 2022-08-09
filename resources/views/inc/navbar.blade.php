{{-- <nav id="mainNav" class="navbar fixed-top navbar-default navbar-expand-lg navbar-light bg-light"> --}}
<nav class="navbar fixed-top navbar-default navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href=" {{ url('/') }}">
            {{ config('app.name', 'Blood Bank') }}
        </a>

      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                   <!-- Left Side Of Navbar -->
                   
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            </ul>

            <ul class="navbar-nav form-inline my-2 my-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('donors.create') }}">Donate</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('donors.index') }}">Donors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/bloodrequest') }}">Blood Request</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('search') }}">Search</a>
                </li>

                {{-- <li class="nav-item">
                <a class="nav-link" href="/signin">Signin</a>
                 </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>


            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <a class="dropdown-item" href="/users.index"><i class="fa fa-user"
                                    aria-hidden="true"></i>Profile</a>

                            <a class="dropdown-item" href="/users.update"><i class="fa fa-edit" aria-hidden="true"></i>
                                Update Profile</a>



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



