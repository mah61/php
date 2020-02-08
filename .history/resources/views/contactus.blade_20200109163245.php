@extends('layouts.app')

@section('content')
<html>
    <head>
        <img src="{{asset('image/about.jpg')}}">

    </head>
    <body>
    <div class="row ml-1 mr-1 p-2" id=contact>
		<div class="col-sm-12 col-md-6 mt-4">
	
		<h3 id="contact">Contact Us</h3>

		<form action="http://jac.stephmoreau.ca/submitForm/" method="post" autocomplete="off">
			<fieldset>
				
				<label for="text"><strong>First Name</strong></label>
				<input type="text" maxlength="20" name="first-name" id="text" width="100">
                <br>
                
                <label for="text"><strong>Last Name</strong></label>
				<input type="text" maxlength="20" name="last-name" id="text" width="100">
				<br>

                <label for="text"><strong>Email</strong></label>
				<input type="text" maxlength="20" name="email" id="text" width="100">
				<br>
		  
				<label for="textbox"><strong>Comments</strong></label><br>
				<textarea name="message" rows="12" cols="40" id="textbox"></textarea><br><br>
		   
				<input type="submit" name="submit_btn" value="Submit">
				<input type="reset" name="reset_btn" value="Reset">
			</fieldset>
		</form>

		</div>
		
	</div>	
      

    </body>
</html>
@endsection