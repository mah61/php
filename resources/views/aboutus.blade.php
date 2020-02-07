@extends('layouts.app')

@section('content')
<html>
    <head>
        <img src="{{asset('image/about.jpeg')}}">

    </head>
    <body>
    <div class="ct-pageWrapper" id="ct-js-wrapper">
  
  <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
    <div class="container text-center">
      <h2>WHAT DRIVES US</h2>
      <h3>Lorem ipsum - dolor</h3>
      <!-- <div class="col-md-8 col-md-offset-2 " > -->
        <div class="red-border"></div>
        <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed libero vel ex maximus vulputate nec eu ligula. Vestibulum elementum nisi ut fermentum lobortis. Sed quis iaculis felis.</p>
        <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
      <!-- </div> -->
    </div>
  </section>
  <section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
    <div class="container text-center">
      <!-- <div class="row"> -->
        <!-- <div class="col-md-8 col-md-offset-2"> -->
          <h2>Etiam varius porttitor</h2>
          <h3>Vestibulum elementum nisi ut</h3>
          <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
          Praesent sed libero vel ex maximus vulputate nec eu ligula. Vestibulum elementum nisi ut fermentum lobortis.</p>
        <!-- </div> -->
      <!-- </div> -->
      <div class="row ct-u-paddingBoth20">
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-medkit" aria-hidden="true"></i>
            <p>LOREM IPSUM</p>
            <p class="company-icons-subtext hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-money" aria-hidden="true"></i>
            <p>DOLOR SIT AMET</p>
            <p class="company-icons-subtext hidden-xs">Praesent sed libero vel ex maximus vulputate nec eu ligula.</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <p>SED TRISTIQUE</p>
            <p class="company-icons-subtext hidden-xs">Vestibulum elementum nisi ut fermentum lobortis.</p>
          </div>
        </div>
      </div>
      <div class="row ct-u-paddingBoth20">
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-coffee" aria-hidden="true"></i>
            <p>SEMPER IPSUM</p>
            <p class="company-icons-subtext hidden-xs">Nullam bibendum felis non laoreet rutrum.</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-gamepad" aria-hidden="true"></i>
            <p>NEC MATTIS</p>
            <p class="company-icons-subtext hidden-xs">Etiam diam mi, lacinia eu sapien in, dapibus sodales erat.</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-cutlery" aria-hidden="true"></i>
            <p>CRAS MOLLIS</p>
            <p class="company-icons-subtext hidden-xs">Etiam varius porttitor tellus et aliquet.</p>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  
</div>


    </body>
</html>
@endsection