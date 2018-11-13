@extends('adminlte::page')

@section('title', 'Catatan Keuangan')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Catatan Keuangan</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		@include('admin.error-form')
          		<form action="{{ route('admin.akuntansi.catatan-keuangan.store') }}" method="post">
          			@csrf
          			<div class="form-group">
          				<label for="date">Tanggal</label>
          				<input type="date" name="date" id="date" class="form-control" required="" value="{{ old('date')}}">
          			</div>
                <div class="form-group">
                  <label for="id_finance_type">Tipe Catatan</label>
                  <select name="id_finance_type" id="idjs" class="form-control">
                   @foreach(App\FinanceType::all() as $item) 
                      <option value="{{$item->id}}">{{$item->name}}</option>
                   @endforeach  
                  </select>
                </div>
                <div class="form-group">
                  <label for="amount">Nominal</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <input type="text" name="amount" id="amount" class="form-control" required="" value="{{ old('amount')}}">
                </div>
                <div class="form-group">
                  <label for="description">Keterangan</label>
                  <input type="text" name="description" id="description" class="form-control" required="" value="{{ old('description')}}">
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
<<<<<<< HEAD

@section('js')
  <script>
    $(document).ready(function(){
      $("#id_finance_type").select2();
    });
  </script>
@endsection
=======
@section('js')
    <script>
        $(document).ready(function() {
        $('#idjs').select2();
        } );
    </script>
@stop
>>>>>>> fa654cc1fae4efd9a075861492efff3c88185d8e
