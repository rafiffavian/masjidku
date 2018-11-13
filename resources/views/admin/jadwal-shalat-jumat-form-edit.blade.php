@extends('adminlte::page')

@section('title', 'Jadwal Shalat Jumat')

@section('content_header')
    
@stop

@section('content')

    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Jadwal Shalat Jumat</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.error-form')
          		<form action="{{ route('admin.jadwal.shalat-jumat.update', $jadwalkajian->id) }}" {{-- itu $jadwal->id ,id nya itu namanya harus sama kyk database, si $jadwal kita dapet dari controllernya --}} method="post">
          			@csrf
                <input type="hidden" name="_method" value="put">
          			<div class="form-group">
          				<label for="khatib">Nama Khatib</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<input type="text" name="khatib" id="khatib" class="form-control" required="" value="{{($jadwalkajian->khatib)}}">
          			</div>
          			<div class="form-group">
          				<label for="khatib">Nama Imam</label>
          				<input type="text" name="imam" id="imam" class="form-control" required="" value="{{($jadwalkajian->imam)}}">
          			</div>
          			<div class="form-group">
          				<label for="khatib">Nama Muadzin</label>
          				<input type="text" name="muadzin" id="muadzin" class="form-control" required="" value="{{($jadwalkajian->muadzin)}}">
          			</div>
          			<div class="form-group">
          				<label for="khatib">Tanggal</label>
          				<input type="date" name="date" id="date" class="form-control" required="" value="{{($jadwalkajian->date)}}">
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