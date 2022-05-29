@extends('layouts.layout')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href={{ url('admin')}}>Admin</a>
      </li>
      <li class="breadcrumb-item">
        <a href={{ url('galeriadmin')}}>Galeri</a>
      </li>
    </ol>
  </nav>
<h1>Halaman Galeri</h1>

<table id="example" class="table table-striped table-bordered" style="width:100%">
<a href="/addGaleri" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>Tambah data</a>
  <thead>
      <tr>
          <th>Foto</th>
          <th>Caption</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
      @foreach($dtGaleri as $galeri)
      <tr>
          <td><a href="{{ asset($galeri->foto)}}" target="blank" rel="noopener noreferrer">Lihat Gambar</a></td>
          <td>{{ $galeri->caption }}</td>
          <td>
            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
            <a href="{{ url('deletegaleri', $galeri->id) }}" class="btn btn-danger">Hapus</a>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection
