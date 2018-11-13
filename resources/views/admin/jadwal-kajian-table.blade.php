@extends('adminlte::page')

@section('title', 'Jadwal Kajian')

@section('content_header')

@stop

@section('content')
	<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Jadwal Kajian
          <a href="{{ route('admin.jadwal.kajian.create') }}">
            <button class="btn btn-primary btn-xs">
              <i class="fa fa-plus"></i> Tambah
            </button>
          </a>
        </h3>
			</div>
		<div class="box-body">
				<div class="row">
					<div class="col-md-12">

						<table class="table table-striped table-bordered" id="datatable">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>Tema</th>
									<th>Pengisi Acara</th>
									<th>Kategori</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								{{-- @foreach(Auth::user()->masjid->jadwalKajianKu()->orderBy('date')->get() as $jadwal)
									<tr>
										<td>{{$jadwal->date}}</td>
										<td>{{$jadwal->tema}}</td>
										<td>{{$jadwal->pengisi_acara}}</td>
										<td>{{$jadwal->kategori}}</td>
										<td>{{$jadwal->created_at}}</td>
										<td>{{$jadwal->updated_at}}</td>
										<td>
											<div class="btn btn-group">
												<a href="{{ route('admin.jadwal.kajian.edit', $jadwal->id) }}" class="btn btn-warning btn-xs">
													<i class="fa fa-pencil"> Edit</i>
												</a>
												<a href="" class="btn btn-danger btn-xs">
				                                	<i class="fa fa-trash"> Hapus</i>
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
	<script src="{{ url('js/sweetalert.min.js') }}"></script>
    <script>
				//ketika sudah halaman sudah ready, bru ditampilkan
				$(document).ready(function(){
 				let dataTable =	$('#datatable').DataTable({
				        processing: true,
				        serverSide: true,
				        ajax: '{!! route('admin.jadwal.kajian.getJsonData') !!}',
				        method: "GET",
				        dom: 'Bfrtip',
						        buttons: [
						            'copy', 'csv', 'excel', 'pdf', 'print'
						        ],
				        columns: [
				            { data: 'tanggal_format', name: 'date' },
				            { data: 'tema', name: 'tema' },
				            { data: 'pengisi_acara', name: 'pengisi_acara' },
				            { data: 'kategori', name: 'kategori' },
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
				            		if(data.edit){
				            			links += '<a href="'+data.edit+'" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>&nbsp;';
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
				     $("#datatable tbody").on("click", "tr a.btn-hapus", function(event){

				    		event.preventDefault(); //menghentikan fungsi utama dari element

				    		var deleteUrl = $(this).attr("href");

				    		swal({
								  title: "Apakah Anda Yakin?",
								  text: "Data Akan Di Hapus?",
								  icon: "warning",
								  buttons: true,
								  dangerMode: true,
								})
								.then((willDelete) => {
								  if (willDelete) {

								  	$.ajax({

								  		headers: {

								  			'X-CSRF-TOKEN': "{{ csrf_token() }}"
								  		},
								  		url: deleteUrl,
								  		type: "DELETE",
								  		dataType: "JSON",
								  		success: function(res){ //ketika sukses maka menampilkan blabla
								  			swal(res.message, {
								      		icon: "success",
								    		});
								    		dataTable.ajax.reload(null,false);
								  		},
								  		error: function(xhr, status){ //ketika gagal maka menampilkan blabla
								  			swal("Gagal Menghapus Data");
								  		}

								  	});

								    // 
								  } else {
								    swal("Your imaginary file is safe!");
								  }
								});
				    });
				});
		</script>
@stop
