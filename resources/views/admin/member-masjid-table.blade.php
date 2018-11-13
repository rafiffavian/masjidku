@extends('adminlte::page')

@section('title', 'Jadwal Kajian')

@section('content_header')
    
@stop

@section('content')
    <div class="box box-primary">
	    	<div class="box-header with-border">
	    		<h3 class="box-title">Member Masjid</h3>
	    	</div>
	    <div class="box-body">
	    		<div class="col-md-12">
	    			<a href="{{ route('admin.member.create') }}">
	    				<button class="btn btn-primary btn-xs">
	    					<i class="fa fa-plus"></i> Tambah
	    				</button>
	    			</a>
	    			<table class="table table-striped table-bordered" id="datatable">
	    				<thead>
	    					<tr>
	    						<th>Nama</th>
	    						<th>Posisi</th>
	    						<th>Phone</th>
	    						<th>Email</th>
	    						<th>Created_At</th>
	    						<th>Updated_At</th>
	    						<th>Action</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    				{{-- @foreach($member as $v)
	    					<tr>
	    						<td>{{$v->name}}</td>
	    						<td>{{$v->position}}</td>
	    						<td>{{$v->phone}}</td>
	    						<td>{{$v->email}}</td>
	    						<td>{{$v->created_at}}</td>
	    						<td>{{$v->updated_at}}</td>
	    						<td>
	    							<div class="btn btn-group">
	    								<a href="{{ route('admin.member.edit', $v->id) }}" class="btn btn-warning btn-xs">
	    									<i class="fa fa-pencil"> Edit</i>
	    								</a>
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
@stop
@section('js')
    <script>
		$(document).ready(function() {
		    $('#datatable').DataTable();
		} );
    </script>
@stop