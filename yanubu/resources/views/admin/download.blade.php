@extends('layouts.layout')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Admin</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/downloadadmin">Download</a>
            </li>
        </ol>
    </nav>

    <h1>Halaman Download</h1>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <a href="/addDownload" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>Tambah data</a>
        <thead>
            <tr>
                <th>File</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dtDownload as $download)
            <tr>
                <td>{{ $download->file }}</td>
                <td>{{ $download->nama }}</td>
                <td>{{ $download->kategori }}</td>
                <td>
                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
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
