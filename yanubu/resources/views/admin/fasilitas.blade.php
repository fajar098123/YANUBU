@extends('layouts.layout')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{ url('admin')}}>Admin</a>
            </li>
            <li class="breadcrumb-item">
                <a href={{ url('fasilitasadmin')}}>Fasilitas</a>
            </li>
        </ol>
    </nav>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <a href={{ url('addFasilitas')}} class="btn btn-primary mb-2"><i class="fas fa-plus"></i>Tambah data</a>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama Fasilitas</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>img</td>
                <td>Asrama Putri</td>
                <td>Asrama</td>
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
