@extends('adminlte::page')

@section('title', 'Jadwal Shalat Jumat')

@section('content_header')
    
@stop

@section('content')

    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Jadwal Shalat Jumat</h3>
            </div>
	    <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                <a href="{{ route('admin.jadwal.shalat-jumat.create')}}">
                  <button class="btn btn-primary btn-xs">
                    <i class="fa fa-plus"></i>Tambah
                  </button>
                </a>    

                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Khatib</th>
                      <th>Imam</th>
                      <th>Muadzin</th>
                      <th>Created At</th>
                      <th>Updated At</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach(Auth::user()->masjid->jadwalJumatan()->get() as $jadwal)
                        <tr>
                          <td>{{$jadwal->date}}</th>
                          <td>{{$jadwal->khatib}}</th>
                          <td>{{$jadwal->imam}}</th>
                          <td>{{$jadwal->muadzin}}</th>
                          <td>{{$jadwal->created_at}}</th>
                          <td>{{$jadwal->updated_at}}</th>
                          <td>
                            <div class="btn btn-group">
                              <a href="{{ route('admin.jadwal.shalat-jumat.edit', $jadwal->id) }}" class="btn btn-warning btn-xs">
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
          <a href="{{ route('admin.jadwal.shalat-jumat.create')}}"><button class="btn btn-primary btn"> <i class="fa fa-plus"></i>Tambah</button></a>
      </div>
    </div>

@endsection