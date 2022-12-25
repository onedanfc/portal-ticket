@extends('dashboard')

@section('isi')
<table class="table">
  <thead class="table-info">
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">ID</th>
      <th scope="col">Band</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
    @foreach($daftar as $d)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $d->nama }}</td>
      <td>{{ $d->nomor_id }}</td>
      <td>{{ $d->band }}</td>
      <td><form action="/dashboard/daftar/hapus" method="post">@csrf <input type="hidden" value="{{ $d->id }}" name="id"><button class="btn btn-danger btn-sm">hapus</button></form></td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection