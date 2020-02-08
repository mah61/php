@extends('layouts.app')

@section('content')
<html>
    <head>
        <img src="{{asset('image/about.jpg')}}">

    </head>
    <body>
    
	<div class="row ml-1 mr-1 p-2" >
		<div class="col-sm-12 col-md-6 mt-4 float-left">
            <h3 id="contact">Contact Us</h3>
            
           
            <form class="form-inline">
  <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</form>
        </div>
        <div class="col-sm-12 col-md-6  mt-4 grow pic float-right">
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