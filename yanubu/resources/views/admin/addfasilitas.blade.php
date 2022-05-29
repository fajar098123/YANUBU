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
    <div class="container">
        <form>
            <div class="form-group col-lg-6 my-4">
                <label for="file">Foto Fasilitas</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file">
                    <label class="custom-file-label" for="file">Choose file</label>
                </div>
            </div>
            <div class="form-group col-lg-6 my-4">
                <label for="text">Nama Fasilitas</label>
                <input type="text" class="form-control" id="text" placeholder="Keterangan">
            </div>
            <div class="form-group col-lg-6 my-4">
                <label for="text">Kategori</label>
                <input type="text" class="form-control" id="text" placeholder="Kategori">
            </div>
            <button type="submit" class="btn btn-success ml-2">Tambah</button>
            <button type="button" class="btn btn-danger" href>Batal</button>
        </form>
    </div>
@endsection
