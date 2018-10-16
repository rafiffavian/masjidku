@extends('adminlte::page')

@section('title', 'Jadwal Kajian')

@section('content_header')
    
@stop

@section('content')
	<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Jadwal Kajian</h3>
			</div>
		<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<a href="{{ route('admin.jadwal.kajian.create') }}">
							<button class="btn btn-primary btn-xs">
								<i class="fa fa-plus"></i> Tambah
							</button>
						</a>

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>Tema</th>
									<th>Pengisi Acara</th>
									<th>Kategori</th>
									<th>created_at</th>
									<th>updated_at</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach(Auth::user()->masjid->jadwalKajianKu()->get() as $jadwal)
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
								@endforeach	
							</tbody>
						</table>
					</div>
				</div>
			</div>	
	</div>		
@endsection