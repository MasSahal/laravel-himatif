@extends('layouts.backend')
@section('title', 'Data Mahasiswa - HIMATIF UCIC')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Data Mahasiswa</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-settings mr-1"></i> Settings
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Data Mahasiswa</h4>
                    <p class="text-muted m-b-30 font-14">This is an experimental awesome solution for responsive tables with
                        complex data.</p>

                    <button type="button" class="btn btn-primary" id="btn-tambah">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Tambah
                    </button>
                    <button type="button" class="btn btn-outline-info" id="btn-refresh">
                        <i class="fa fa-recycle" aria-hidden="true"></i>
                        Refresh
                    </button>
                    <hr>
                    <div class="table-responsive b-0">
                        <table id="mahasiswa" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Semester</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>

                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div class="viewdata"></div>
@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript">
        var data;
        $(() => {
            data = $('#mahasiswa').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('mahasiswa.getdata') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'nim',
                        name: 'nim'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'program_studi',
                        name: 'program_studi'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

            $("#btn-refresh").on("click", () => {
                data.ajax.reload(null, false);
            })
        });


        $("#btn-tambah").on('click', () => {
            $.ajax({
                url: "{{ route('mahasiswa.formadd') }}",
                type: 'GET',
                dataType: 'html',
                success: (response) => {
                    $('.viewdata').html(response);
                    $('#modaltambah').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    $('#modaltambah').modal('show');
                },
                error: (xhr, ajaxOptions, thrownerror) => {

                    Swal.fire({
                        title: "Maaf gagal load data!",
                        html: `Silahkan Cek kembali Kode Error: <strong>${(xhr.status + "\n")}</strong> `,
                        icon: "error",
                        showConfirmButton: false,
                        timer: 3100
                    });
                }
            });
        });
    </script>
    <script>
        function delData(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                confirmButtonText: 'Yes, delete it!'
            }).then(function(result) {
                if (result.value == true) {
                    $.ajax({
                        url: "{{ url('mahasiswa/delete') }}",
                        type: 'POST',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'html',
                        success: (response) => {
                            console.log(response);
                            swal(
                                'Deleted!',
                                'Your file id=' + id + ' has been deleted.',
                                'success'
                            );
                            // data.ajax.reload();
                        },
                        error: (xhr, ajaxOptions, thrownerror) => {
                            swal(
                                'Oops!',
                                'Error : ' + xhr + ' - ' + thrownerror,
                                'error'
                            );
                        }
                    });

                }


            })
        }
    </script>
@endsection
