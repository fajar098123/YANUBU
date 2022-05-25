@extends('layouts.layout')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin">Admin</a>
      </li>
      <li class="breadcrumb-item">
        <a href="/galeriadmin">Galeri</a>
      </li>
    </ol>
  </nav>
<h1>Halaman Galeri</h1>

<table id="example" class="table table-striped table-bordered" style="width:100%">
<a href="/tambahproduk" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>Tambah data</a>
  <thead>
      <tr>
          <th>Foto</th>
          <th>Caption</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td>Img</td>
          <td>Kegiatan Santri</td>
          <td>
            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
          <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </td>
      </tr>
  </tbody>
  {{-- <tfoot>
      <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start date</th>
          <th>Salary</th>
      </tr>
  </tfoot> --}}
</table>

@endsection
