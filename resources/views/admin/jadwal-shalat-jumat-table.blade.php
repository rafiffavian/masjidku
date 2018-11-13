@extends('adminlte::page')

@section('title', 'Jadwal Shalat Jumat')

@section('content_header')
    
@stop

@section('content')

    <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">Jadwal Shalat Jumat
                  <a href="{{ route('admin.jadwal.shalat-jumat.create')}}">
                  <button class="btn btn-primary btn-xs">
                    <i class="fa fa-plus"></i>Tambah
                  </button>
                </a>    

              </h4>
            </div>
	    <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                
                <table class="table table-striped table-bordered" id="datatable">
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
                    {{-- @foreach(Auth::user()->masjid->jadwalJumatan()->get() as $jadwal)
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
                    @endforeach --}}
                  </tbody>
                </table>
            </div>
          </div>
          <a href="{{ route('admin.jadwal.shalat-jumat.create')}}"><button class="btn btn-primary btn"> <i class="fa fa-plus"></i>Tambah</button></a>
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
    <script src="{{url('js/sweetalert.min.js')}}"></script>
    <script>
            $(document).ready(function() {
            let dataTable = $('#datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: '{!! route('admin.jadwal.shalat-jumat.getJsonData') !!}',
              method: "GET",
              dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
              columns: [
                  { data: 'tanggal_format', name: 'date' },
                  { data: 'khatib', name: 'khatib' },
                  { data: 'imam', name: 'imam' },
                  { data: 'muadzin', name: 'muadzin' },
                  { data: 'created_format', name: 'created_at' },
                  { data: 'updated_format', name: 'updated_at' },
                  { data:'action',
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

                event.preventDefault();

                var deleteUrl = $(this).attr("href");

                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
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
                              success: function(res){
                                swal(res.message, {
                                  icon: "success",

                                 });
                                dataTable.ajax.reload(null,false);
                              },
                              error: function(xhr, status){
                                swal("Gagal Menghapus Data");
                              }

                          });

                        } else {
                          swal("Your imaginary file is safe!");
                        }
                      });

            });
          });
          
    </script>
@stop