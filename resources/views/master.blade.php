<!DOCTYPE html>
<html>
<head>
    <title>OHR : @yield('judul_halaman')</title>
    @include('style')
</head>
<body>
	<header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #53c9b2;">
            <div class="collapse navbar-collapse" id="navbarNav ">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/dash">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dash/tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dash/faq">FAQ</a>
                    </li>
                </ul>
            </div>
        </nav>
	</header>
	<hr/>

    <div class="container-fluid">
    
        @yield('konten')

    </div>

    <hr/>
</body>
</html>