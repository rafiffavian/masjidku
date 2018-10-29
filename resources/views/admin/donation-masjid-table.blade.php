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
						<a href="{{ route('admin.donation.create') }}">
							<button class="btn btn-primary btn-xs">
								<i class="fa fa-plus"></i> Tambah
							</button>
						</a>

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Minimal Donasi</th>
									<th>Tipe Donasi</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($listDonasi as $d)
									<tr>
										<td>{{$d->minimal}}</td>
										<td>{{$d->tipeDonasi->nama}}</td>
										<td>{{$d->status}}</td>
										<td>{{$d->keterangan}}</td>
										<td>
											<div class="btn btn-group">
												<a href="{{ route('admin.donation.edit', $d->id) }}" class="btn btn-warning btn-xs">
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