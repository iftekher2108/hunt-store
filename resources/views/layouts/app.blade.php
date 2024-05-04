<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ config('app.name', 'iftekher') }} </title>
    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png"> --}}

    {{-- <link href="{{  }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('back-end/assets/css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('back-end/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/assets/css/main.min.css') }}">


</head>

<body>


    <div id="loader" class="fixed-top bg-white w-100 h-100">
        <div class=" d-flex align-items-center justify-content-center w-100 h-100">
            <div class="d-flex gap-3 text-primary">
                <i class="fa-solid fa-circle fs-4 fa-beat-fade"></i>
                <i class="fa-solid fa-circle fs-4 fa-beat-fade" style='animation-delay: 0.1s;'></i>
                <i class="fa-solid fa-circle fs-4 fa-beat-fade" style='animation-delay: 0.2s;'></i>
                <i class="fa-solid fa-circle fs-4 fa-beat-fade" style='animation-delay: 0.3s;'></i>
            </div>
        </div>

    </div>


    <div id="app">
        {{-- =================================== header start ======================================== --}}
        <div class="bg-primary row p-2 px-4 align-items-center text-white">
            <div class="col-3">
                <div class="d-flex justify-content-between">
                    <a href="{{ url('/') }}" class="brand-logo">
                        <img class="img-fluid" src="./images/logo-text.png" alt="logo">
                    </a>

                    <div class="menu-btn ">
                        <i class="fa-solid fs-4 border-end border-start btn rounded py-2 px-3 fa-bars"></i>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-end">


                        <ul class="navbar-nav">

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

                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i>
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu">
                                  <li>
                                    <a href="{{ route('user.profile') }}" class="dropdown-item">
                                        <i class="fa-solid fa-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                            <span class="ml-2">Logout </span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                  </li>
                                </ul>
                              </div>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    {{-- ================================== header end --}}



        <div class="row">

            <div class="side-menu col-lg-2 col-md-4 col-sm-12">
                <x-side-bar />
            </div>

            <div class="col">
                <!--**********************************
            Content body start
        ***********************************-->

                    <!-- row -->
                    <div class="container-fluid p-3">

                        <div class="card p-3">
                            @yield('content')
                        </div>

                    </div>

                <!--**********************************
            Content body end
        ***********************************-->

            </div>

        </div>





        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">iftekher</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('back-end/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('back-end/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('back-end/assets/js/custom.min.js') }}"></script>

</body>

</html>
