@extends('adminlte::page')

@section('title', 'Jadwal Shalat Jumat')

@section('content_header')
    
@stop

@section('content')

    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Jadwal Shalat Jumat</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.error-form')
          		<form action="{{ route('admin.jadwal.shalat-jumat.store') }}" method="post">
          			@csrf
          			<div class="form-group">
          				<label for="khatib">Nama Khatib</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<input type="text" name="khatib" id="khatib" class="form-control" required="" value="{{ old('khatib')}}">
          			</div>
          			<div class="form-group">
          				<label for="khatib">Nama Imam</label>
          				<input type="text" name="imam" id="imam" class="form-control" required="" value="{{ old('imam')}}">
          			</div>
          			<div class="form-group">
          				<label for="khatib">Nama Muadzin</label>
          				<input type="text" name="muadzin" id="muadzin" class="form-control" required="" value="{{ old('muadzin')}}">
          			</div>
          			<div class="form-group">
          				<label for="khatib">Tanggal</label>
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