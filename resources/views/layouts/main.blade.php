<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div class="container">
      <div class="row mt-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a class="nav-link" href="#">Posts</a>
                  <a class="nav-link" href="#">About</a>
                  <a class="nav-link" href="#">Main</a>
                  <a class="nav-link" href="#">Contacts</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    @yield('content')
  </div>
  </body>
</html>
