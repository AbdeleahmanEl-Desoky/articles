<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
@yield('title')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha384-LC5KX6bLq7r0MPQ6rC90qF0aPGo/jA9a27d1v4vpl3z6lFkvww5Y2K6RuzQa6aV" crossorigin="anonymous">

@include('website.layout.head')

</head>

<body>

    <div id="wrapper">

        {{-- * --------------------------------------------------------------------------------  --}}
        {{-- *                                   start navbar                                    --}}
        {{-- * --------------------------------------------------------------------------------  --}}

        <header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <div class="W-100 pg-light position-fixed top_head p-1">
                        <p class="d-inline">MINA@GMAIL.COM</p>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="fas fa-bars text-white"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse mt-2" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Contact me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">About me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Privacy</a>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="How may I help?">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </header>

        {{-- * --------------------------------------------------------------------------------  --}}
        {{-- *                                   end navbar                                      --}}
        {{-- * --------------------------------------------------------------------------------  --}}

        @yield('header')

        @yield('content')

        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                   start footer                                   --}}
        {{-- * -------------------------------------------------------------------------------- --}}

        <footer class="footer position-relative">
            <div class="container">
                <div class="row ">

                    <div class="col-lg-4 col-6  d-none d-lg-block "></div>
                    <div class="col-lg-1 col-6 text-center">
                        <a class="h5" href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a class="h5" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <p> +0 (122) 123 456 </p>
                    </div>
                    <div class="col-lg-2 col-12 text-center">
                        <p>mina@gmail.com</p>
                    </div>
                    <div class="col-lg-3 col-6  d-none d-lg-block "></div>
                    <div class="col-md-12 text-center">
                        <div class="copyright">
                            <p>&copy; Markedia. Design: HTML Design
                            <p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                    end footer                                    --}}
        {{-- * -------------------------------------------------------------------------------- --}}

    </div>

    @include('website.layout.script')

</body>

</html>
