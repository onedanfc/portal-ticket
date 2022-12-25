<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Beranda | Portal Ticket</title>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
          
        </style>
    </head>
    <body class="antialiased">
            <nav class="navbar navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Portal Ticket</a>
                    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light">Log in</a>
                        @if (Route::has('register'))
                            <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> -->
                        @endif
                    @endauth
                    @endif
                </div>
            </nav>
            <div class="container text-center"> 
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <center>{{ session('success') }}</center>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif         
                <p class="fs-1 fw-bolder">PILIH KONSER</p>
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ ('so7.jpg')  }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Sheila on 7</h5>
                            <p class="card-text">Sheila on 7 adalah grup musik pop rock Indonesia asal Yogyakarta. Didirikan oleh sekelompok pelajar SMA pada tahun 1996.</p>
                            <a href="/pesan/so7" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                    <img src="{{ ('st12.jpg')  }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ST 12</h5>
                            <p class="card-text">ST12 adalah grup musik pop rock dan pop melayu Indonesia yang didirikan di Bandung, Jawa Barat pada tahun 2004.</p>
                            <a href="/pesan/st12" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ ('judmary.jpg')  }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Judy and Mary</h5>
                            <p class="card-text">adalah band rock asal Jepang yang dibentuk pada tahun 1991.</p>
                            <a href="/pesan/jnm" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
