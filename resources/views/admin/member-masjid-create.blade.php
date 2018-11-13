@extends('adminlte::page')

@section('title', 'Member Masjid')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Member Masjid</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.error-form')
          		<form action="{{ route('admin.member.store') }}" method="post">
          			@csrf
          			<div class="form-group">
          				<label for="name">Nama</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<input type="text" name="name" id="name" class="form-control" required="" value="{{ old('name')}}">
          			</div>
          			<div class="form-group">
          				<label for="position">Posisi</label>
          				<input type="text" name="position" id="position" class="form-control" required="" value="{{ old('position')}}">
          			</div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone" id="phone" class="form-control" required="" value="{{ old('phone')}}">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="form-control" required="" value="{{ old('email')}}">
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