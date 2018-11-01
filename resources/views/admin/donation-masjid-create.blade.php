@extends('adminlte::page')

@section('title', 'Catatan Keuangan')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Donasi Masjid</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.error-form')
          		<form action="{{ route('admin.donation.store') }}" method="post">
          			@csrf
          			<div class="form-group">
          				<label for="minimal">Minimal</label>
          				<input type="number" name="minimal" id="minimal" class="form-control" required="" value="{{ old('minimal')}}">
          			</div>
                <div class="form-group">
                  <label for="id_master_donations">Tipe Donasi</label>
                  <select name="id_master_donations" id="id_master_donations" style="margin-left: 10px">
                   @foreach(App\Master_Donation::all() as $item) 
                      <option value="{{$item->id}}" style="margin-left: 10px">{{$item->nama}}</option>
                   @endforeach  
                  </select>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" id="id_finance_type" style="margin-left: 10px">
                   
                      <option value="aktif" style="margin-left: 10px">Aktif</option>
                      <option value="tidak aktif" style="margin-left: 10px">Tidak Aktif</option>
                   
                  </select>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label> 
                    <textarea class="form-control" id="keterangan" name="keterangan">{{old('keterangan')}}</textarea>
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