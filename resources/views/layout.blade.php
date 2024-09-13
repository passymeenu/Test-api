<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    @include('header')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                

                @if ($message = Session::get('user'))
                <li class="nav-item">

                    <a class="nav-link" href="#">Welcome, {{Session::get('user')}}</a>
                </li>
                @else
                <li class="nav-item">
                    <a class=" nav-link" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="register">Register</a>
                </li>
                @endif
                <!-- <div class="" style=" display:flex; ">
                <button class="btn btn-basic"><a href="register">Logout</a></button>
            </div> -->
            </ul>
        </div>
    </nav>
    <div class="container"> @yield('content')
        @include('footer')
    </div>
</body>

</html>