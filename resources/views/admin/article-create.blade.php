@extends('adminlte::page')

@section('title', 'Tambah Artikel Baru')

@section('content_header')

@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Artikel Baru</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.error-form')
          		<form action="{{ route('admin.article.store') }}" method="post">
          			@csrf
          			<div class="form-group">
          				<label for="judul">Judul</label>
          				<input type="text" name="judul" id="judul" class="form-control" required="" value="{{ old('judul') }}">
          			</div>

          			<div class="form-group">
          				<label for="konten">Konten</label>
          				<input type="text" name="konten" id="konten" class="form-control" required="" value="{{ old('konten')}}">
          			</div>

                <div class="form-group">
          				<label for="foto">Gambar</label>
          				<input type="file" name="foto" id="foto" class="form-control" value="{{ old('foto')}}">
          			</div>

          			<div class="form-group text-right">
          				<button class="btn btn-primary" type="submit">Simpan</button>
          			</div>
          		</form>
          	</div>
          </div>
      </div>
    </div>

@endsection
