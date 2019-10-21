@extends('master')
@section('judul_halaman', 'Halaman Home')

@section('konten')
    <div class="row">
        <div class="col-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{ url('assets/img/1.jpg') }}"  alt="First Slide" />
                        <div class="carousel-caption text-dark">
                            <h2>OHR</h2>
                            <p>Online Health Reservation</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ url('assets/img/2.jpg') }}" />

                        <div class="carousel-caption">
                            <h2>OHR</h2>
                            <p>Online Health Reservation</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ url('assets/img/3.jpg') }}" />
                        <div class="carousel-caption text-dark">
                            <h2>OHR</h2>
                            <p>Online Health Reservation</p>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-4">
            <form method="POST" action="{{ url('/login') }}">
                <h3 class="text-center tittle-login">Login</h3>
                <h3 class="text-center tittle-login"> Silakan masuk ke dalam akun kamu </h3>
                {{csrf_field()}}      
        
                    <!-- //Email -->
                    <div class="form-group" style="margin-top: 20px">
                           <input type="email" name="email" class="form-control" placeholder="Email">
                    <!--  //Email -->
                    <br>
        
                     <!-- // Password -->
                    <div class="form-group">           
                        <input type="password" name="password" class="form-control" placeholder="Password"> 
                     <!-- //Password -->
                    <br>
                     <!-- // Submit Button -->
                      <button type="submit" class="btn btn-primary btn lg">Submit</button>
                     <!-- // Submit -->
                    <br>
                    <br>
                     <a href="{{ url('regist') }}" class="text-secondary">Belum punya akun ? Daftar Sekarang</a>
            </form>
        </div>
    </div>
@endsection