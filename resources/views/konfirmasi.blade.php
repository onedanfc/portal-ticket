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
            <div class="container-fluid text-center" style="width: 25rem;">
                <span class="text-primary fw-bold lh-1">Konfirmasi Ticket</span>
                <span class="badge bg-primary rounded-pill">{{ $data['band'] }}</span>
                <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                    <h6 class="my-0">Nama</h6>
                    </div>
                    <span class="text-muted">{{ $data['nama'] }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                    <h6 class="my-0">Email</h6>
                    </div>
                    <span class="text-muted">{{ $data['email'] }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                    <h6 class="my-0">Nomor Handphone</h6>
                    </div>
                    <span class="text-muted">{{ $data['phone'] }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                    <h6 class="my-0">Nomor Ticket</h6>
                    </div>
                    <span class="text-success">{{ $data['nomor_id'] }}</span>
                </li>
                </ul>
                <form action="/pesan/konfirmasi/cetak" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $data['band'] }}" name="band">
                    <input type="hidden" value="{{ $data['nama'] }}" name="nama">
                    <input type="hidden" value="{{ $data['email'] }}" name="email">
                    <input type="hidden" value="{{ $data['phone'] }}" name="phone">
                    <input type="hidden" value="{{ $data['nomor_id'] }}" name="nomor">
                <div class="row">
                                <div class="col">
                                    <a href="/"><button type="button" class="btn btn-danger">Batalkan</button></a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-success" onclick="cetak()">Cetak</button>
                                </div>
                            </div>
                </form>
            </div>
    <script>
		function cetak(){
            window.print();
        }
	</script>
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

