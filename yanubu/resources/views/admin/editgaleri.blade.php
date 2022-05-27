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
    <div class="container">
        <form>
            <div class="form-group col-lg-6 my-4">
                <label for="file">Masukkan Gambar</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group col-lg-6 my-4">
                <label for="text">Caption</label>
                <input type="text" class="form-control" id="text" placeholder="Nama File">
            </div>
            <button type="submit" class="btn btn-success ml-2">Simpan</button>
            <button type="button" class="btn btn-danger" href>Batal</button>
        </form>
    </div>
@endsection
