@extends('layouts.layout')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Admin</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/dataadmin">Data Admin</a>
            </li>
        </ol>
    </nav>
    <h1>Halaman Data Admin</h1>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <a href="/tambahproduk" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>Tambah data</a>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Foto Profile</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
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
