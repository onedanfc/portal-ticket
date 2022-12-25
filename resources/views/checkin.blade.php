@extends('dashboard')

@section('isi')
@if(session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <center>{{ session('berhasil') }}</center>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form class="row g-3 mx-auto" method="POST" action="/dashboard/checkin/cek">
      @csrf
      <div class="col-auto">
        <label for="staticEmail2" class="visually-hidden">Nomor ID</label>
        <input type="text" class="form-control-plaintext" id="staticEmail2" name="nomor_id" placeholder="Masukkan Nomor ID">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn-warning btn">Check Ticket</button>
      </div>
    </form>

@endsection