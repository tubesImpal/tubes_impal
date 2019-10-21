<!DOCTYPE html>
<html>
<head>
	<title>OHR</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style>
  		body{
   			background-color: #53c9b2;
 		}
  		#kotak{
  			background : rgba(0,0,0,0.2);
   			position: relative;
   			margin-top: 130px;
  		}
  		.border-box{
   			box-shadow: 0 1px 1px rgba(0,0,0,0.2);
   			border : 1px solid;
   			padding-bottom: 5%;
  		}
 	</style>
</head>
<body> 
	<div class="container">
  
    <div class="row">
     
    	<div class="col-lg-3"></div>
      	<div class="col-lg-6 border-box" id="kotak">
       	<div id="ui">

           @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif

        <form method="POST" action="{{ url('/login') }}">
        <h3 class="text-center tittle-login">Login</h3>
        <h3 class="text-center tittle-login"> Silakan masuk ke dalam akun kamu </h3>
        {{csrf_field()}}      

        	<!-- //Email -->
        	<div class="form-group" style="margin-top: 20px">
           		<input type="email" name="email" class="form-control" placeholder="Email">
        	<!--  //Email -->
         

         	<!-- // Password -->
        	<div class="form-group">           
        		<input type="password" name="password" class="form-control" placeholder="Password"> 
         	<!-- //Password -->

         	<!-- // Submit Button -->
          	<button type="submit" class="btn btn-primary btn lg">Submit</button>
         	<!-- // Submit -->
        </form>
       	</div>
      	</div>

    </div>
  	</div>
</body>
</html>