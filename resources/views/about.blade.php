@extends('layouts.base')
      @section('title', 'About')

      <!-- Navbar -->
      @section('navbar')
      <div class="navigation container-fluid">
         <div class="row justify-content-md-center ">
            <div class="col-md-10 col-sm-12">
               <nav class="navbar navbar-default">
                  <a class="navbar-brand" href="/">
                  <img src="img/logo-black.png" height="22" alt="Logo">
                  </a>
                  <div class="button_container" id="toggle">
                     <span class="black top"></span>
                     <span class="black middle"></span>
                     <span class="black bottom"></span>
                  </div>
                  <div class="overlay" id="overlay">
                     <nav class="overlay-menu">
                        <ul>
                           <li> <a href="about">About</a></li>
                           <li> <a href="story">Story</a></li>
                           <li> <a href="services">Services</a></li>
                           <li> <a href="contacts">Contacts</a></li>
                        </ul>
                     </nav>
                  </div>
               </nav>
            </div>
         </div>
      </div>
      @endsection
      <!-- End Navbar -->
      <!-- Products -->
      @section('content')
      <div class="container-fluid products-2">
         <div class="row justify-content-md-center ">
            <div class="col-md-10 col-sm-12">
               <div class="row">
                  <div class="col-xl-8 col-md-10 col-sm-12">
                     <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                        <br><br>
                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Products -->
      <!-- Additional -->
      <div class="container additional">
         <div class="row">
            <div class="col-xl-4">
               <img src="img/photo-12.jpg" class="img-fluid" alt="Image">
            </div>
            <div class="col-xl-4">
               <img src="img/photo-13.jpg" class="img-fluid" alt="Image">
            </div>
            <div class="col-xl-4">
               <img src="img/photo-14.jpg" class="img-fluid" alt="Image">
            </div>
         </div>
      </div>
      @endsection
      <!-- End Additional -->
