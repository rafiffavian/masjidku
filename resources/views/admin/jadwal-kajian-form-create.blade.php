@extends('adminlte::page')

@section('title', 'Jadwal Shalat Jumat')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Jadwal Kajian</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.error-form')
          		<form action="{{ route('admin.jadwal.kajian.store') }}" method="post">
          			@csrf
          			<div class="form-group">
          				<label for="pengisi_acara">Pengisi Acara</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<input type="text" name="pengisi_acara" id="pengisi_acara" class="form-control" required="" value="{{ old('pengisi_acara')}}">
          			</div>
          			<div class="form-group">
          				<label for="tema">Tema</label>
          				<input type="text" name="tema" id="tema" class="form-control" required="" value="{{ old('tema')}}">
          			</div>
          			<div class="form-group">
          				<label for="kategori">Kategori</label><br><br>
          					<div>
          						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="kategori" id="kategori" value="Laki-Laki"@if(old('kategori')) checked @endif>Laki-Laki </div><br>
	          				<div>
	          				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="kategori" id="kategori" value="Perempuan"@if(old('kategori')) checked @endif>Perempuan 
	          				</div><br>
	          				<div>
	          					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="kategori" id="kategori" value="Laki-Laki&Perempuan"@if(old('kategori')) checked @endif>
	    						Laki-Laki & Perempuan
	          				</div><br>
          			</div>
          			<div class="form-group">
          				<label for="date">Tanggal</label>
          				<input type="date" name="date" id="date" class="form-control" required="" value="{{ old('date')}}">
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