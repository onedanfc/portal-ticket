@extends('dashboard')

@section('isi')
<table class="table">
  <thead class="table-info">
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Band</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($daftar as $d)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $d->nama }}</td>
      <td>{{ $d->band }}</td>
      <td><button class="btn {{ ($d->status==="0") ? 'btn-danger': 'btn-success' }} btn-sm">||||</button></td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection