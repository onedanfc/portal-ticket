@extends('dashboard')
@section('isi')
<div class="container-fluid text-center" style="width: 25rem;">
<!-- {{dump($ticket)}} -->
                <span class="text-primary fw-bold lh-1">Konfirmasi Ticket</span>
                <span class="badge bg-primary rounded-pill">{{ $ticket->band }}</span>
                <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                    <h6 class="my-0">Nama</h6>
                    </div>
                    <span class="text-muted">{{ $ticket->nama }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                    <h6 class="my-0">Email</h6>
                    </div>
                    <span class="text-muted">{{ $ticket->email }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                    <h6 class="my-0">Nomor Handphone</h6>
                    </div>
                    <span class="text-muted">{{ $ticket->phone }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                    <h6 class="my-0">Nomor Ticket</h6>
                    </div>
                    <span class="text-success">{{ $ticket->nomor_id }}</span>
                </li>
                </ul>
                <form action="/dashboard/checkin/confirm" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $ticket->nomor_id }}" name="nomor">
                <div class="row">
                                <div class="col">
                                    <a href="/dashboard/checkin"><button type="button" class="btn btn-danger">Batalkan</button></a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-success">Checkin</button>
                                </div>
                            </div>
                </form>
            </div>
@endsection