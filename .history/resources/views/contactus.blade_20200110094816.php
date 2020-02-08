@extends('layouts.app')

@section('content')
<html>
    <head>
        <img src="{{asset('image/about.jpg')}}">

    </head>
    <body>
    
	<div class="row ml-1 mr-1 p-2" >
		<div class="col-sm-12 col-md-6 mt-4 ">
            <h3 id="contact">Contact Us</h3>
            <hr>
            <div id="contactus">
           
                <form  method="post" autocomplete="off">
                    <fieldset>        
                        
                        <label for="text"><strong>First Name</strong></label><br>
                        <input type="text" maxlength="20" name="first-name" id="text"  class="txtbox">
                        <br>
                        
                        <label for="text"><strong>Last Name</strong></label><br>
                        <input type="text" maxlength="20" name="last-name" id="text"  class="txtbox">
                        <br>

                        <label for="text"><strong>Email   </strong></label><br>
                        <input type="text" maxlength="20" name="email" id="text"  class="txtbox">
                        <br>
                
                        <label for="textbox"><strong>Comments</strong></label><br>
                        <textarea name="message" rows="8" cols="30" id="textbox"></textarea><br>
                
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
                    <h3>Toll-Free</h3>
                    <p>+1.514.111.1212</p>
                    <h3>Email</h3>
                    <p>CVENT@yahoo.com<p>
                </div>
            </div>

         </div>
       
     </div>
		
	
      

    </body>
</html>
@endsection