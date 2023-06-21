@extends('dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-2">
        <label for="" class="form-label">Gambar</label>
        <input type="File" name="gambar" id="gambar" class="form-control">
    </div> 
    <div class="mb-2">
        <label for="" class="form-label">Nama</label>
        <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $product->nama_barang }}" placeholder="Masukan nama barang">
    </div> 
    <div class="mb-2">
        <label for="" class="form-label">Harga</label>
        <input type="text" name="harga" id="harga" class="form-control" value="{{ $product->harga }}" placeholder="Masukan harga">
    </div>
    <div class="mb-2">
        <label for="" class="form-label">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $product->deskripsi }}" placeholder="Masukan deskripsi">
    </div>
    <div class="mb-2">
        <td colspan="2" align="center">
            <input type="submit" value="{{ $tombol }}">
        </td>
    </div>
</form>
</body>
</html>
@endsection