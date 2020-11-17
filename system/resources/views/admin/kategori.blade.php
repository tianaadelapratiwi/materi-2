@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Kategori</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row">

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Smartphone Realme</h5>
			        <p class="card-text text-muted"> Handphone Realme murah untuk anak muda. apa itu HP realme ? realme adalah merek HP/smartphone asal cina yang berdiri sejak tahun 2018.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Laptop </h5>
			        <p class="card-text text-muted">Dapatkan berbagai macam jenis leptop di indonesia. cek penawaran laptop dan ulasan komputer & aksesoris</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Televisi</h5>
			        <p class="card-text text-muted">Dapatkan televisi dengan tipe berbagai macam jenis dengan kualitas yang bagus.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Printer</h5>
			        <p class="card-text text-muted">Dapatkan printer dengan merek yang bagus dan berkualitas</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

			</div>
    	</div>
    </div>
  </div>
</div>

@endsection