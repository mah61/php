@extends('layouts.app')

@section('content')
<html>
    <head>
   
        <!-- <img src="{{asset('image/curling.jpg')}}"> -->

    </head>
    <body>
    <div class="flex-center position-ref full-height">


    <!--slider-->
    <div class="container-fluid p-0">
        <div class="row">
			<div class="col-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
							<img class="d-block w-100" src="image/tulip1.jpg" alt="First slide" >
						
						<div class="carousel-caption d-none d-md-block">
							<h3 class="header-text">Canadian Tulip Festival</h3>
							<h5 class="header-text2">Ottawa- May 8-18,2020</h5>
					    </div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/firework.jpg" alt="Second slide" >
					
					<div class="carousel-caption d-none d-md-block">
					    <h3 class="header-text">MUTEK</h3>
					    <h5 class="header-text2">Motreal- Auguest 25-30,2020</h5>
						
					  </div>
					</div>
					<div class="carousel-item">
						   <img class="d-block w-100" src="image/curling.jpg" alt="Third slide" >
					
					<div class="carousel-caption d-none d-md-block">
					    <h3 class="header-text">The World Women’s Curling Championship</h3>
                        <h5 class="header-text2">Prince George- March 14-22,2020</h5>
                    						
					</div>
                    </div>
                					
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>	
	    </div>
	</div>
       


    <!--contactus-->
    
	<div class="row ml-1 mr-1 p-2" >
		<div class="col-sm-12 col-md-6 mt-4 ">
            
            <h1 id="contact">Contact Us</h1>
            <hr>
            <div id="contactus">
           
                <form  method="post" autocomplete="off">
                    <fieldset>        
                        
                        <label for="text"><strong>First Name</strong></label><br>
                        <input type="text" maxlength="20" name="first-name" id="text"  class="form-control">
                        <br>
                        
                        <label for="text"><strong>Last Name</strong></label><br>
                        <input type="text" maxlength="20" name="last-name" id="text"  class="form-control">
                        <br>

                        <label for="text"><strong>Email   </strong></label><br>
                        <input type="text" maxlength="20" name="email" id="text"  class="form-control">
                        <br>
                
                        <label for="textbox"><strong>Comments</strong></label><br>
                        <textarea name="message" rows="8" cols="30" class="form-control" id=comment></textarea><br>
                
                        <input type="submit" name="submit_btn" value="Submit">
                        <input type="reset" name="reset_btn" value="Reset">
                    </fieldset>    
                    
                </form>

            </div>
        </div>
        <div class="col-sm-12 col-md-6  mt-4 ">
            <div class="column content">
                <div class="contactuscvent">
                    <h1>CVENT</h1>
                    <hr>
                    <h3>Toll-Free</h3>
                    <p>+1.514.111.1212</p>
                    <h3>Email</h3>
                    <p>CVENT@yahoo.com<p>
                    <h3>LinkIn</h3>
                    <p>linkedin.com/in/cvent<p>
                    <h3>FaceBook</h3>
                    <p>facebook.com/cvent<p>
                </div>
                
            </div>

         </div>
       
     </div>

    

		
	
      

    </body>
</html>
@endsection