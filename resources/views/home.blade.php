<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
		body{
			background-color: #53c9b2;
		}
		#kotak{
			background : rgba(0,0,0,0.2);
			position: relative;
			margin-top: 50px;
		}
		.border-box{
			box-shadow: 0 1px 1px rgba(0,0,0,0.2);
			border : 1px solid;
			padding-bottom: 5%
		}

	</style>
</head>
<body>
<div class="container">
 		
 			<div class="row">
 				
 					<div class="col-lg-3 "></div>
 					<div class="col-lg-6 border-box" id="kotak">
 						<div id="ui">
 							<form method="POST" action="{{ url('/register') }}">
 							<h3 class="text-center tittle-login"> SIGN UP </h3>
 							{{csrf_field()}}

 							@if(count($errors)>0 )
 								@foreach($errors->all() as $error)
 									<div class="col-md-8 alert alert-danger">{{$error}}</div>
 								@endforeach
 							@endif

 							@if(session('response'))
 								<div class="col-md8 alert alert-success">
 									{{session('response')}}
 								</div>
 							@endif

 							<!--	//Email -->
 								<div class="form-group" style="margin-top: 100px">
 	
 										<label>Your Email</label>
 										<input type="email" name="mail" class="form-control" placeholder="Masukkan Email Anda">
 									
 								</div>
 							<!-- 	//Email -->
 								

 								<!-- // Password -->
 								<div class="form-group">

 										<label>Your Password</label>
 										<input type="password" name="pass" class="form-control" placeholder="Masukkan Password Anda">

 								</div>
 								<!-- //Password -->


 								<!-- // Full Name -->

 								<div class="form-group">
 										
 										<label>Your Full Name</label>
 										<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda">

 								</div>

 								<!-- // Full Name -->


 								<!-- // Tanggal Lahir --> 

 								<div class="form-group">

 										<label>Tanggal Lahir</label>
 										<input type="date" name="tgl" class="form-control">
 									
 								</div>

 								<!-- // Tanggal Lahir -->


 								<!-- // Submit Button -->

 									<button type="submit" class="btn btn-primary btn lg float-right">Submit</button>

 								<!-- // Submit -->
 							</form>
 						</div>
 					</div>

 			</div>
 	</div>
</body>
</html>