@extends('layouts.base')
      @section('title', 'Contacts')

      <!-- Navbar -->
      @section('navbar')
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

      <!-- Contact -->
      @section('content')
      <div class="container-fluid contact">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="row">
                  <div class="col-xl-6 col-md-11 col-sm-12 pb-5">
                     <p>Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras ultricies ligula sed magna dictum porta.
                     </p>
                  </div>
                  <div class="col-xl-5 offset-xl-1 col-md-12 col-sm-12">
                     <p>
                        FONDAZIONE SENECA<br>
                        Via Longhena 116<br>
                        00060 - Nazzano (ROMA)<br>
                        TEL. +39 0327 8523827
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Contact -->
      <!-- Contact Form -->
      <div class="container-fluid contact-form">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="row">
                  <div class="col-xl-6 col-md-11 col-sm-12 pb-5">
                     <p class="pb-5">
                        Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                        <br>
                        <br> Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus.
                     </p>
                  </div>
                  <div class="col-xl-5 offset-xl-1 col-md-12 col-sm-12">
                     <form>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="md-form form-group">
                                 <input type="text" class="form-control" placeholder="Name*">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="md-form form-group">
                                 <input type="text" class="form-control" placeholder="Address*">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="md-form form-group">
                                 <textarea rows="10" cols="50" class="form-control" placeholder="Your Message*"></textarea>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Send</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endsection
      <!-- End Contact Form -->
  