@extends('layouts.layout')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{ url('admin')}}>Admin</a>
            </li>
            <li class="breadcrumb-item">
                <a href={{ url('downloadadmin')}}>Download</a>
            </li>
        </ol>
    </nav>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <a href={{ url('addDownload')}} class="btn btn-primary mb-2"><i class="fas fa-plus"></i>Tambah data</a>
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
                    <a href="/editDownload" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <a href="{{ url('deletedownload', $download->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
