@extends('adminlte::page')

@section('title', 'Tipe Donasi')

@section('content_header')
    
@stop

@section('content')
	
	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Catatan Keuangan</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.error-form')
          		<form action="{{ route('admin.donation.update', $tipe->id) }}" {{-- itu $jadwal->id ,id nya itu namanya harus sama kyk database, si $jadwal kita dapet dari controllernya --}} method="post">
          			@csrf
                <input type="hidden" name="_method" value="put">
          			<div class="form-group">
          				<label for="minimal">Minimal</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<input type="text" name="minimal" id="date" class="form-control" required="" value="{{$tipe->minimal}}">
          			</div>
          			<div class="form-group">
          				<label for="amount">Keterangan</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<textarea class="form-control" id="keterangan" name="keterangan">{{$tipe->keterangan}}</textarea>
          			</div>
          			<div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" id="id_finance_type" style="margin-left: 10px" class="form-control">
                   
                      <option value="aktif"{{$tipe->status == "aktif"?"selected" : " "}} style="margin-left: 10px">Aktif</option>
                      <option value="tidak aktif"{{$tipe->status == "tidak aktif"?"selected" : " "}} style="margin-left: 10px">Tidak Aktif</option>
                   
                  </select>
                </div>
          			<div class="form-group">
          				<label for="finance_type">Tipe Donasi</label>
	          				
	          					<select name="id_master_donations" id="id_finance_type" class="form-control">
									   		@foreach(App\Master_Donation::all() as $item)
									   			<option value="{{$item->id}}"@if($tipe->id_master_donations == $item->id) selected='selected' @endif>{{$item->nama}}</option>
									   		@endforeach
								 			</select>
	          				
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