@extends('layouts.base')
      @section('title', 'Services')


      @section('navbar')
      <!-- Navbar -->
      <div class="navigation container-fluid">
         <div class="row justify-content-md-center ">
            <div class="col-md-10 col-sm-12">
               <nav class="navbar navbar-default">
                  <a class="navbar-brand" href="/">
                  <img src="img/logo.png" height="22" alt="Logo">
                  </a>
                  <div class="button_container" id="toggle">
                     <span class="top"></span>
                     <span class="middle"></span>
                     <span class="bottom"></span>
                  </div>
                  <div class="overlay" id="overlay">
                     <nav class="overlay-menu">
                        <ul>
                           <li> <a href="/about">About</a></li>
                           <li> <a href="/story">Story</a></li>
                           <li> <a href="/services">Services</a></li>
                           <li> <a href="/contacts">Contacts</a></li>
                        </ul>
                     </nav>
                  </div>
               </nav>
            </div>
         </div>
      </div>
      @endsection
      <!-- End Navbar -->

      <!-- Stories -->
      @section('content')
      <div class="container-fluid stories-2">
         <div class="row">
            <div class="col-md-8 offset-md-1 col-sm-12">
               <p>Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras ultricies ligula sed magna dictum porta.
                  <br><br>
                  <a href="services.html"><span class="white">Curabitur non nulla sit amet nisl tempus  →</span></a>
               </p>
            </div>
         </div>
      </div>
      <!-- End Stories -->
      <!-- Events -->
      <div class="container-fluid events">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="row">
                  <div class="col-xl-4 col-md-8 col-sm-12 wow fadeInLeft">
                     <h2>Sed porttitor</h2>
                     <p class="pb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus.
                        <br><br>
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus.            
                     </p>
                  </div>
                  <div class="col-xl-4 col-md-8 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
                     <h2>Tempus convallis</h2>
                     <p class="pb-5">
                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                     </p>
                  </div>
                  <div class="col-xl-4 col-md-8 col-sm-12 wow fadeInLeft" data-wow-delay="0.4s">
                     <h2>Praesent sapien</h2>
                     <p class="pb-5">
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                        <br><br>
                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Donec sollicitudin molestie malesuada.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Events -->
      <!-- Spot -->
      <div class="spot-4">
         <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
            </div>
         </div>
      </div>
      @endsection
      <!-- End Spot -->
