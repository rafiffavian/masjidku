{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Data Artikel')

@section('content_header')
    <h1>Data Artikel</h1>
@stop

@section('content')
  <div class="box box-primary">
  			<div class="box-header with-border">
  				<h3 class="box-title">Data Artikel

            <a href="{{ route('admin.article.create') }}">
              <button class="btn btn-primary btn-xs">
                <i class="fa fa-plus"></i> Tambah
              </button>
            </a>

          </h3>
  			</div>
  		<div class="box-body">
  				<div class="row">
  					<div class="col-md-12">


  						<table class="table table-striped table-bordered" id="datatable">
  							<thead>
  								<tr>
  									<th>Tanggal</th>
  									<th>Judul</th>
  									<th>Konten</th>
  									<th>Gambar</th>
  									<th>Status</th>
  									<th>Aksi</th>
  								</tr>
  							</thead>
  							<tbody>

  							</tbody>
  						</table>
  					</div>
  				</div>
  			</div>
  	</div>
@stop
