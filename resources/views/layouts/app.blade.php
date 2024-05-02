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


</head>

<body>


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="app">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="row p-2">
            <div class="col-3 py-4 px-3">
                <div class="d-flex justify-content-between ">
                    <a href="{{ url('/') }}" class="brand-logo">
                        <img class="img-fluid" src="./images/logo-text.png" alt="logo">
                    </a>

                    <div class="hamburger">
                        <i class="fa-solid fa-bars"></i>
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
                                        <li class="nav-item dropdown header-profile">
                                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                                <i class="fa-solid fa-user"></i>
                                                {{ Auth::user()->name }}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right gap-2">
                                                <a href="{{ route('user.profile') }}" class="dropdown-item">
                                                    <i class="fa-solid fa-user"></i>
                                                    <span class="ml-2">Profile </span>
                                                </a>

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
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </nav>
            </div>

        </div>

        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-12">
                <x-side-bar />
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12">
                <!--**********************************
            Content body start
        ***********************************-->
                <div class="content-body">
                    <!-- row -->
                    <div class="container-fluid">

                        <div class="card p-3">
                            @yield('content')
                        </div>

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
    <script src="{{ asset('back-end/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('back-end/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('back-end/assets/plugins/quixnav/quixnav.min.js') }}"></script>
    <script src="{{ asset('back-end/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('back-end/assets/js/custom.min.js') }}"></script>

</body>

</html>
