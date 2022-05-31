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
    <div class="container">
        <form action="{{ route('simpandownload')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group col-lg-6 my-4">
                <label for="file">Masukkan File</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file" id="file">
                    <label class="custom-file-label" for="file">Choose file</label>
                </div>
            </div>
            <div class="form-group col-lg-6 my-4">
                <label for="text">Nama File</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama File">
            </div>
            <div class="form-group col-lg-6 my-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="kategori"
                        value="1">
                    <label class="form-check-label" for="inlineRadio1">Brosur</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kategori" id="kategori"
                        value="2">
                    <label class="form-check-label" for="inlineRadio2">Formulir</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success ml-2">Tambah</button>
            <button type="button" class="btn btn-danger" href>Batal</button>
        </form>
    </div>
@endsection
