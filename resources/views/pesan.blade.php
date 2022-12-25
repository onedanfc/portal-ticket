<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>{{ $title }} | Portal Ticket</title>

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
            <div class="container col-xl-10 col-xxl-8 px-4 py-5">
                <div class="row align-items-center g-lg-5 py-5">
                    <div class="col-lg-7 text-center text-lg-start">
                        <h1 class="display-8 fw-bold lh-1 mb-3">Pesan Ticket {{ $band }}</h1>
                        <p class="col-lg-10 fs-4">Silahkan masukkan identitas yang diperlukan untuk mencetak ticket konser.</p>
                    </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="/pesan/konfirmasi">
                        @csrf
                        <input type="hidden" value="{{ $band }}" name="band">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" required value="{{ old('nama') }}">
                            <label for="nama">Nama</label>
                            @error('nama')
                                <div class="text-danger" role="alert">
                                   {{ $message }}
                                    </div>    
                            @enderror
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <div class="text-danger" role="alert">
                                   {{ $message }}
                                    </div>    
                            @enderror
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="phone" placeholder="phone" name="phone" required value="{{ old('phone') }}">
                            <label for="phone">Nomor Handphone</label>
                            @error('phone')
                                <div class="text-danger" role="alert">
                                   {{ $message }}
                                    </div>    
                            @enderror
                        </div>
                        
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Pesan</button>
                        <!-- <hr class="my-4">
                        <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small> -->
                    </form>
                </div>
            </div>
        <!-- </div> -->
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>