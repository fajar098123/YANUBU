@extends('layouts.layout')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Admin</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/downloadadmin">Artikel</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/adddownload">Tambah Artikel</a>
            </li>
        </ol>
    </nav>
    <div class="container">
        <form>
            <div class="form-group col-lg my-4">
                <label for="text">Masukkan Judul</label>
                <span class="required_notification text-danger">*</span>
                <input type="text" class="form-control" id="text" placeholder="masukan judul konten">
            </div>

              <div class="input-group col-lg my-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Masukkan Thumbnail<span class="text-danger">*</span></span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01"
                    aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>

            <div class="form-group col-lg my-4">
                <label for="file">Masukkan Konten</label>
                <span class="required_notification text-danger">*</span>
                <div id="summernote"><p>isi konten</p></div>
            </div>
            <div class="form-group col-lg-6 my-4">
                <label for="text">Author</label>
                <input type="text" class="form-control" id="text" placeholder="nama author" disabled>
            </div>
            <div class="row">
                <div class="col text-right">
                    <button type="submit" class="btn btn-primary ml-2">Tambah</button>
                    <button type="button" class="btn btn-danger" href>Batal</button>
                </div>

        </form>

    </div>


@endsection
