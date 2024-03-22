@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nama Barang</th>
          <th>Tipe Barang</th>
          <th>Suplier</th>
          <th>Harga</th>
          <th>Stok</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($stocks as $stock)
            <tr>
            <td>{{ $stock->name }}</td>
            <td>{{ $stock->type }}</td>
            <td>{{ $stock->suplier['nama'] }}</td>
            <td>{{ $stock->price }}</td>
            <td>{{ $stock->qty }}</td>
            <td class="d-flex justify-content-center">
                <a href="" class="btn btn-outline-primary btn-sm"><i class="fas fa-pen"></i> Edit</a>
                <a href="" class="btn btn-outline-danger ml-2 btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
            </td>
        </tr>
        @endforeach

        </tbody>
        <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
