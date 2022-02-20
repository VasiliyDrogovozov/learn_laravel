<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      
      <title>@yield('title')</title>
      @section('metaAndLink')
      <!-- Meta -->
      <meta charset="UTF-8">
      <meta name="description" content="Free HTML template">
      <meta name="keywords" content="HTML, template, free">
      <meta name="author" content="Nicola Tolin">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Styles -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link href="vendor/animate/animate.css" rel="stylesheet" type="text/css"/>
      <link href="css/style.css" rel="stylesheet" type="text/css"/>
      @show
   </head>
   <body>
    @yield('navbar')

    @yield('content')
      <!-- Footer -->
      @section('footer')
      <div class="container-fluid footer ">
         <div class="row">
            <div class="col-xl-2 col-md-8 offset-md-1 col-sm-12 ">
               <p>
                  <a href="/about">About</a><br>
                  <a href="/story">Story</a><br>
                  <a href="/services">Services</a><br>
                  <a href="/contacts">Contacts</a><br>
               </p>
            </div>
            <div class="col-xl-2 col-md-8 offset-md-1 col-sm-12 ">
               <p>
                  <a href="index.html">Privacy</a><br>
                  <a href="index.html">Termini di utilizzo </a><br>
                  <a href="index.html">Note legali </a><br>
                  <a href="index.html">Credits</a><br>
               </p>
            </div>
            <div class="col-xl-2 col-md-8 offset-md-1 col-sm-12">
               <p>
                  FONDAZIONE SENECA<br>
                  Via Longhena 116<br>
                  00060 - Nazzano (ROMA)<br>
                  TEL. +39 0327 8523827
               </p>
            </div>
         </div>
      </div>
      @show
      <!-- End Footer -->
      <!-- Javascript -->
      @section('js')
      <script src="vendor/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="vendor/wow/wow.js"></script>
      <script src="js/script.js"></script>
      <script>
         new WOW().init();
      </script>
      @show
      <!-- End Javascript -->
   </body>
</html>