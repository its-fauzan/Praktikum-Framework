@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<h1>Detail Produk</h1>
<p>Menampilkan produk dengan ID: {{ $id }}</p>
<br>
<a href="{{ route('produk.index') }}">← Kembali ke Daftar Produk</a>
@endsection