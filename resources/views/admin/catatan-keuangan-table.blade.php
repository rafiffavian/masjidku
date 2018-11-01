@extends('adminlte::page')

@section('title', 'Catatan Keuangan')

@section('content_header')
    
@stop

@section('content')

<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Catatan Keuangan</h3>
			</div>
		<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<!-- <a href="{{ route('admin.akuntansi.catatan-keuangan.create') }}">
							<button class="btn btn-primary btn-xs">
								<i class="fa fa-plus"></i> Tambah
							</button>
						</a> -->

						<table class="table table-striped table-bordered" id="datatable">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>Tipe Catatan</th>
									<th>Nominal</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach(Auth::user()->masjid->Keuangan()->get() as $jadwal)
									<tr>
										<td>{{$jadwal->date}}</td>
										<td>{{$jadwal->tipeCatatan->name}}</td>
										<td>{{$jadwal->amount}}</td>
										<td>{{$jadwal->description}}</td>
										<td>
											<div class="btn btn-group">
												<a href="{{ route('admin.akuntansi.catatan-keuangan.edit', $jadwal->id) }}" class="btn btn-warning btn-xs">
													<i class="fa fa-pencil"> Edit</i>
												</a>
												<a href="" class="btn btn-danger btn-xs">
				                                	<i class="fa fa-trash"> Hapus</i>
				                                </a>
											</div>
										</td>	
									</tr>
								@endforeach	
							</tbody>
						</table>
					</div>
				</div>
			</div>	
	</div>		
@endsection
@section('js')
	<script>
		$(document).ready(function(){
			$('#datatable').DataTable();
		});
	</script>
@stop