@extends('adminlte::page')

@section('title', 'Jadwal Kajian')

@section('content_header')
    
@stop

@section('content')

    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Jadwal Kajian</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.error-form')
          		<form action="{{ route('admin.jadwal.kajian.update', $jadwalsaya->id) }}" {{-- itu $jadwal->id ,id nya itu namanya harus sama kyk database, si $jadwal kita dapet dari controllernya --}} method="post">
          			@csrf
                <input type="hidden" name="_method" value="put">
          			<div class="form-group">
          				<label for="pengisi_acara">Pengisi acara</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<input type="text" name="pengisi_acara" id="pengisi_acara" class="form-control" required="" value="{{($jadwalsaya->pengisi_acara)}}">
          			</div>
          			<div class="form-group">
          				<label for="tema">Tema</label>
          				<input type="text" name="tema" id="tema" class="form-control" required="" value="{{($jadwalsaya->tema)}}">
          			</div>
          			<div class="form-group">
          				<label for="kategori">Kategori</label><br><br>
                    <div>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="kategori" id="kategori" value="Laki-Laki"{{ $jadwalsaya->kategori == 'Laki-Laki' ? 'checked' : ''}}>Laki-Laki </div><br>
                    <div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="kategori" id="kategori" value="Perempuan"{{ $jadwalsaya->kategori == 'Perempuan' ? 'checked' : ''}}>Perempuan 
                    </div><br>
                    <div>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="kategori" id="kategori" value="Laki-Laki&Perempuan"{{ $jadwalsaya->kategori == 'Laki-Laki&Perempuan' ? 'checked' : ''}}>
                  Laki-Laki & Perempuan
                    </div><br>
          			</div>
          			<div class="form-group">
          				<label for="khatib">Tanggal</label>
          				<input type="date" name="date" id="date" class="form-control" required="" value="{{($jadwalsaya->date)}}">
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