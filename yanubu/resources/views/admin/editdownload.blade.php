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
                <label for="file">Masukkan File</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group col-lg-6 my-4">
                <label for="text">Nama File</label>
                <input type="text" class="form-control" id="text" placeholder="Nama File">
            </div>
            <div class="form-group col-lg-6 my-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Brosur</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Formulir</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success ml-2">Simpan</button>
            <button type="button" class="btn btn-danger" href>Batal</button>
        </form>
    </div>
@endsection
