<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tamkeen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href=#><img src="{{ asset('/assets/img/tamkeen.jpg') }}" width="40" height="40" alt=""></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Task 1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Task 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Task 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Task 4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Task 5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Task 6</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Task 7</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Task 8</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Task 9</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset("employes")}}">Task 10</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Welcome {{auth()->user()->name??''}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href='#' class="dropdown-item" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </form>
                            </div>
                        </li>
                    </ul>

          </form>
        </div>
      </nav>
      <div class="container" style="margin-top: 50px">
        @include("_msg")
      @yield("content")
    </div>
    <footer class="footer navbar-fixed-bottom">

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2020 Copyright:Tamkeen Project
        </div>
        <!-- Copyright -->
      </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
