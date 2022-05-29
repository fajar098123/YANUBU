@extends('layouts.layout')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href={{ url('admin')}}>Admin</a>
      </li>
      <li class="breadcrumb-item">
        <a href={{ url('registrasiadmin')}}>Registrasi</a>
      </li>
    </ol>
  </nav>
<h1>Halaman Registrasi</h1>

@endsection
