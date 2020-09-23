<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark justify-content-between">
            <h3 style="color:white;">Library</h3>
            <ul class="nav nav-pills flex-column flex-sm-row">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Account</a>
                </li>
              </ul>
        </nav>
    </header>


    <main>
      @yield('contents')

    </main>


    <footer  class="p-3 bg-dark text-white fixed-bottom">
        <div class="container-fluid text-center text-md-left">
          <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
              <h5 class="text-uppercase">Library Service</h5>
              <p>Some random description</p>
            </div>

            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
              <h5 class="text-uppercase">Contacts</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Facebook: samplefacebok</a>
                </li>
                <li>
                  <a href="#!">Email: sampleemail</a>
                </li>
                <li>
                  <a href="#!">Instagram: sampleinstagram</a>
                </li>
              </ul>
      
            </div>
            <div class="col-md-3 mb-md-0 mb-3">
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
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="">Library.com</a>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>