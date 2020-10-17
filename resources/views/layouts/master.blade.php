<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{secure_asset('css/main.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Library</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-dark bg-dark justify-content-between">
            <a class="nav-link" href="/">Library</a>
            <ul class="nav nav-pills flex-column flex-sm-row">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">{{auth()->user()->username}}</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="borrowers/create">Register</a>
                    </li>
                @endguest
              </ul>
        </nav>
    </header>


    <main>
      @yield('contents')
    </main>


    <footer  class="p-3 bg-dark text-white">
        <div class="container text-center text-md-left">
          <div class="row">
            <div class="col-md-6 mb-md-0 mb-3">
              <h5 class="text-uppercase">Contacts</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="https://www.facebook.com/baguiocitypubliclibrary/">Facebook: Baguio City Public Library</a>
                </li>
                <li>
                  <a href="publiclibrarybaguio@gmail.com">Email: publiclibrarybaguio@gmail.com</a>
                </li>
              </ul>
            </div>

            <div class="col-md-6 mb-md-0 mb-3">
              <h5 class="text-uppercase">CHECKOUT</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Home</a>
                </li>
                <li>
                  <a href="#!">About</a>
                </li>
                <li>
                  <a href="#!">Contact</a>
                </li>
                <li>
                  <a href="#!">Account</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="footer-copyright text-center py-3">Copyright ©  2020 Library</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
