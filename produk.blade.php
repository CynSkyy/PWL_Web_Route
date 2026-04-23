@extends('layouts.template')
@section('content')
    <div class="container mt-2">
         <h1>Daftar Produk</h1>
         <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">harga</th>
      <th scope="col">stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laptop Lenovo </td>
      <td>5.000.000</td>
      <td>10</td>
      <td>
        <button type="button" class="btn btn-danger btn-sm">hapus</button>
        <button type="button" class="btn btn-warning btn-sm">edit</button>
      </td>
    </tr>
  </tbody>
</table>
    </div>
    
@endsection