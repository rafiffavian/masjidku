@extends('adminlte::page')

@section('title', 'Gambar Masjid')

@section('content_header')
    
@stop

@section('content')

<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Gambar Masjid</h3>
			</div>
		<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<a href="{{ route('admin.image.create') }}">
							<button class="btn btn-primary btn-xs">
								<i class="fa fa-plus"></i> Tambah
							</button>
						</a>
						<table class="table table-striped table-bordered" id="datatable">
	    				<thead>
	    					<tr>
	    						<th>Gambar</th>
	    						<th>Created_At</th>
	    						<th>Updated_At</th>
	    						<th>Action</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    				{{-- @foreach($image as $v)
	    					<tr>
	    						<td><img width="50" src="{{url(Storage::url($v->file))}}" alt=""></td>
	    						<td>{{$v->created_at}}</td>
	    						<td>{{$v->updated_at}}</td>
	    						<td>
	    							<div class="btn btn-group">
	    								<a href="" class="btn btn-danger btn-xs">
	    									<i class="fa fa-pencil"> Hapus</i>
	    								</a>
	    							</div>
	    						</td>
	    					</tr>
	    				@endforeach --}}
	    				</tbody>
	    			</table>
					</div>
				</div>
			</div>	
	</div>		
@endsection
@section('js')
    <script>
    	
    	$(document).ready(function() {
	    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.image.getJsonData') !!}',
        method: "GET",
        columns: [
            { data: 'file', name: 'file' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'id', name: 'id' },
        ]
    });
		} );
    </script>
@stop
