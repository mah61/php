<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstarp -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Load icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        

        <!-- Styles -->
        <link rel="stylesheet" href="css/welcome.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Russo+One|Rubik&display=swap" rel="stylesheet">

        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/7d003c661e.js"></script>
        
    </head>
    <body>
           

    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links p-2 pr-2">
                    @auth
                        <a class="hlink p-1" href="{{ url('/home') }}">Events</a>
                    @else
                        <a class="hlink p-1" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="hlink p-1" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
         
        <div class="top-left links p-1 pl-2 col-md-6">
            <img  class="logo" src="image/logof.png" alt="logo" >
            <span class="cname pl-1 pt-4 ">CVENT</span>
        </div>
   
            
        <div class="container-fluid ">              
            <div class="row content">
                  <div class="col-12">                               
                     <div class="title  text-center" class="header-text">
                         Canadian Events with Us 
                    </div>                  
                </div>
            </div>
                <!--Search textbox & button-->
            <div class="row align-items-center justify-content-center">
               <div class="col-12 col-md-6 text-center"> 
                   <form action="{{URL::to('/search')}}" method="POST" role="search" >                   
                         {{csrf_field() }}
                        <div class="input-group center-block ">                             
                                <input type="text"  name="q" class="form-control" placeholder="Search event ...">                               
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button>                            </div>                          
                            </div>
                             <span class="info">ex: event name, date, venue, city or province </span>
                        </div>                       
                            
                     </form>                 
                </div>
            </div>       
        <footer>
        <div class="row footer content py-2">
            <div class="offset-lg-1 col-lg-6 pt-4 pl-3 col-sm-12 text-sm-center text-lg-left">
        <div>    
        <a class="d-none d-lg-block" class="footerlink" href="about">About Us</a>
        <br>
        <a class="d-none d-lg-block" class="footerlink" href="contactus">Contact Us</a>
        
        </div><br>
        <p class="CopyR">Shahram, Mahnaz, Somayah&copy; 2020</p>
    
            </div>
            <div class="col-lg-5 pt-1 footer-icons col-sm-12 text-center "> 
                <a href="https://m.facebook.com/" target="_blank" class="face"><i class="fab fa-facebook-square "></i></a>
                <a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>                
                <a href="https://twitter.com/" target="_blank" class="twitter"><i class="fab fa-twitter-square"></i></a>
                <a href="https://www.whatsapp.com/" target="_blank" class="whatsapp"><i class="fab fa-whatsapp-square"></i></a>        
             </div>
          </footer>
         </div>
         </div>                  
    </body>
</html>


