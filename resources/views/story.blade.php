@extends('layouts.base')
      @section('title', 'Story')

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

      <!-- Masthead -->
      @section('content')
      <div class="masthead-4">
         <div class="container-fluid h-100">
            <div class="row justify-content-center">
               <div class="col-md-6 col-sm-12  split-image-left"></div>
               <div class="col-md-6 col-sm-12  split-image-right"></div>
            </div>
         </div>
      </div>
      <!-- End Masthead -->
      <!-- Stories -->
      <div class="container-fluid stories">
         <div class="row justify-content-center">
            <div class="col-md-8  col-sm-12 wow fadeInDown">
               <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <br><br>
                  <a href="story.html"><span class="bold">MAURIS BLANDIT ALIQUET ELIT</span></a>
               </p>
            </div>
         </div>
      </div>
      <!-- End Stories -->
      <!-- Spot -->
      <div class="spot-2">
         <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
            </div>
         </div>
      </div>
      <!-- End Spot -->
      <!-- Stories-2 -->
      <div class="container-fluid stories-2">
         <div class="row">
            <div class="col-xl-6 offset-xl-1 col-md-9 offset-md-1 col-sm-12">
               <p class="pb-5 wow fadeInLeft">
                  Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus.
                  <br><br>
                  Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                  <br><br>
                  FONDAZIONE SENECA<br>
                  Via Longhena 116<br>
                  00060 - Nazzano (ROMA)<br>
                  TEL. +39 0327 8523827
               </p>
            </div>
         </div>
      </div>
      @endsection
      <!-- End Stories-2 -->
  