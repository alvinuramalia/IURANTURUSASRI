@extends('layouts.main')
@section('container')
    <h1>HALAMAN ABOUT</h1>
    <h3>namaku {{ $nama }}</h3>
    <h3>kelas {{ $kelas }} </h3>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200">
@endsection

