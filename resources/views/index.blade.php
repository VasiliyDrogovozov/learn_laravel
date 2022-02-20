@extends('layouts.base')


@section('title', 'Home')

      <!-- Navbar -->
      @section('navbar')
      <div class="navigation container-fluid">
         <div class="row justify-content-md-center ">
            <div class="col-md-10 col-sm-12">
               <nav class="navbar navbar-default">
                  <img src="img/logo-black.png" height="22" alt="Logo">
                  <div class="button_container" id="toggle">
                     <span class="black top"></span>
                     <span class="black middle"></span>
                     <span class="black bottom"></span>
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

      <!-- Portfolio-Text -->
      @section('content')
      <div class="container-fluid pb-5 portfolio-text">
         <div class="row">
            <div class="col-md-7 offset-md-1 col-sm-12">
               <h2>Donec rutrum congue leo eget malesuada lacinia eget consectetur.
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-7 offset-md-1 col-sm-12">
               <p class="pb-5 pt-5">
                  Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
               </p>
            </div>
         </div>
      </div>
      <!-- End Portfolio-Text -->
      <!-- Gallery -->
      <div class="scrollblock">
         <div class="container-fluid pt-10">
            <div class="row justify-content-md-center ">
               <div class="col-md-10 col-sm-12">
                  <div class="card-columns">
                     <div class="card card-hover h-100" >
                        <div class="card-body">
                           <a href="index.html">
                              <img class="card-img-top" src="img/photo-1.jpg" alt="Card image cap">
                              <div class="reveal h-100 p-2 d-flex ">
                                 <div class="w-100 align-self-center">
                                    <p> Curabitur non nulla</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="card card-hover h-100" >
                        <div class="card-body">
                           <a href="index.html">
                              <img class="card-img-top" src="img/photo-2.jpg" alt="Card image cap">
                              <div class="reveal h-100 p-2 d-flex ">
                                 <div class="w-100 align-self-center">
                                    <p>Vivamus magna convallis</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="card card-hover h-100">
                        <div class="card-body">
                           <a href="index.html">
                              <img class="card-img-top" src="img/photo-3.jpg" alt="Card image cap">
                              <div class="reveal h-100 p-2 d-flex ">
                                 <div class="w-100 align-self-center">
                                    <p>Lacinia eget consectetur</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="card card-hover h-100">
                        <div class="card-body">
                           <a href="index.html">
                              <img class="card-img-top" src="img/photo-4.jpg" alt="Card image cap">
                              <div class="reveal h-100 p-2 d-flex ">
                                 <div class="w-100 align-self-center">
                                    <p>Convallis a pellentesque</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="card card-hover h-100">
                        <div class="card-body">
                           <a href="index.html">
                              <img class="card-img-top" src="img/photo-5.jpg" alt="Card image cap">
                              <div class="reveal h-100 p-2 d-flex ">
                                 <div class="w-100 align-self-center">
                                    <p>Egestas non nisi</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="card card-hover h-100">
                        <div class="card-body">
                           <a href="index.html">
                              <img class="card-img-top" src="img/photo-6.jpg" alt="Card image cap">
                              <div class="reveal h-100 p-2 d-flex ">
                                 <div class="w-100 align-self-center">
                                    <p>Vivamus magna convallis</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="card card-hover h-100">
                        <div class="card-body">
                           <a href="index.html">
                              <img class="card-img-top" src="img/photo-7.jpg" alt="Card image cap">
                              <div class="reveal h-100 p-2 d-flex ">
                                 <div class="w-100 align-self-center">
                                    <p>Eget malesuada lacinia</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="card card-hover h-100">
                        <div class="card-body">
                           <a href="index.html">
                              <img class="card-img-top" src="img/photo-8.jpg" alt="Card image cap">
                              <div class="reveal h-100 p-2 d-flex ">
                                 <div class="w-100 align-self-center">
                                    <p>Donec rutrum congue</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="card card-hover h-100">
                        <div class="card-body">
                           <a href="index.html">
                              <img class="card-img-top" src="img/photo-9.jpg" alt="Card image cap">
                              <div class="reveal h-100 p-2 d-flex ">
                                 <div class="w-100 align-self-center">
                                    <p>Magna eget rutrum</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endsection
      <!-- End Gallery -->
