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
                <h1>The City</h1>
                <p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
                <p>You will learn more about web layout and responsive web pages in a later chapter.</p>
            </div>

         </div>
       
     </div>
		
	
      

    </body>
</html>
@endsection