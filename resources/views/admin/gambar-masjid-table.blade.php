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

	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.min.css">

	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

	<script>

		$(document).ready(function() {
			$('#datatable').DataTable({
				processing: true,
				serverSide: true,
				ajax: '{!! route('admin.image.getJsonData') !!}',
				method: "GET",
				dom: 'Bfrtip',
		        buttons: [
		            'copy', 'csv', 'excel', 'pdf', 'print'
		        ],
				columns: [
				{ data: 'file', name: 'file' },
				{ data: 'created_format', name: 'created_at' },
				{ data: 'updated_format', name: 'updated_at' },
				{ 

					data:'action',
					searchable: false,
					orderable: false,
					className: 'text-center',
					width:90,

					render:function (data, type, row, meta){

						let links = '<div class="">';

						if(data.detail){
							links += '<a href="'+data.detail+'" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>&nbsp;';
						}
						if(data.delete){
							links += '<a href="'+data.delete+'" class="btn btn-xs btn-danger btn-hapus"><i class="fa fa-trash"></i></a>&nbsp;';	
						}


						links += '</div>';
						return links;
					} 
				},
					]
				});
		} );
	</script>
	@stop
	