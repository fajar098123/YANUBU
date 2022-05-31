@extends('layouts.layout')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{ url('admin') }}>Admin</a>
            </li>
            <li class="breadcrumb-item">
                <a href={{ url('profileadmin') }}>Profile</a>
            </li>
        </ol>
    </nav>
    <div class="container">
        <form>
            <div class="form-group col-lg-6 my-4">
                <label for="text">Nama</label>
                <input type="text" class="form-control" id="text" placeholder="Nama">
            </div>
            <div class="form-group col-lg-6 my-4">
                <label for="text">Jabatan</label>
                <input type="text" class="form-control" id="text" placeholder="Jabatan">
            </div>
            <div class="form-group col-lg-6 my-4">
                <label for="file">Foto Profile</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file">
                    <label class="custom-file-label" for="file">Choose file</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success ml-2">Simpan</button>
            <button type="button" class="btn btn-danger" href>Batal</button>
        </form>
    </div>
@endsection
