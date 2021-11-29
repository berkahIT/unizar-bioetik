@extends('layouts.admin')
@section('admin')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Konsultasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Konsultasi</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <button class="btn btn-success float-right" data-toggle="modal" data-target="#addRowModal"><i
                            class="fas fa-plus"></i> Tambah</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header no-bd">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">
                                            Tambah</span>
                                        <span class="fw-light">
                                            Dosen
                                        </span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="small">Silahkan Masukkan Data Konsultasi</p>
                                    <form action="/admin/konsultasi" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="nama">Nama Mahasiswa</label>
                                                    <select class="form-control @error('mahasiswa_id') is-invalid @enderror"
                                                        name="mahasiswa_id" id="mahasiswa_id" autofocus>
                                                        <option value="1">~ Pilih Mahasiswa ~</option>
                                                        @foreach ($mahasiswa as $m)
                                                            @if (old('mahasiswa_id') == $m->id)
                                                                <option value="{{ $m->id }}" selected>
                                                                    {{ $m->nama }}</option>
                                                            @else
                                                                <option value="{{ $m->id }}">
                                                                    {{ $m->nama }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    @error('mahasiswa_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama">Nama Konselor</label>
                                                    <select class="form-control @error('konselor_id') is-invalid @enderror"
                                                        name="konselor_id" id="konselor_id" autofocus>
                                                        <option value="1">~ Pilih konselor ~</option>
                                                        @foreach ($konselor as $k)
                                                            @if (old('konselor_id') == $k->id)
                                                                <option value="{{ $k->id }}" selected>
                                                                    {{ $k->nama }}</option>
                                                            @else
                                                                <option value="{{ $k->id }}">
                                                                    {{ $k->nama }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    @error('matkul_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">Tanggal</label>
                                                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                        placeholder="Tanggal">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Status Rekam Medik</label>
                                                    <select class="form-control" id="rekam_medik" name="rekam_medik">
                                                        <option value=""><i>Rekam Medik</i></option>
                                                        <option value="true"><i>Ada</i></option>
                                                        <option value="false"><i>Tidak Ada</i></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rekam_medik_id">Rekam Medik</label>
                                                    <select
                                                        class="form-control @error('rekam_medik_id') is-invalid @enderror"
                                                        name="rekam_medik_id" id="rekam_medik_id" autofocus>
                                                        <option value="1">~ Pilih Rekam Medik ~</option>
                                                        @foreach ($rekam_medik as $r)
                                                            @if (old('konsultasi_id') == $r->id)
                                                                <option value="{{ $r->id }}" selected>
                                                                    {{ $r->nama }}</option>
                                                            @else
                                                                <option value="{{ $r->id }}">
                                                                    {{ $r->nama }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    @error('rekam_medik_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_konsultasi">Jenis Konsultasi</label>
                                                    <select class="form-control" id="jenis_konsultasi"
                                                        name="jenis_konsultasi">
                                                        <option value=""><i>Konsultasi</i></option>
                                                        <option value="wajib"><i>Wajib</i></option>
                                                        <option value="relawan"><i>Relawan</i></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option value=""><i>Status</i></option>
                                                        <option value="true"><i>Ada</i></option>
                                                        <option value="false"><i>Tidak Ada</i></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <div class="modal-footer no-bd">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Penutup Modal --}}

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mahasiswa</th>
                                <th>Konselor</th>
                                <th>Rekam Medik</th>
                                <th>Jenis Konsultasi</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($konsultasi as $konsultasi)
                                <tr>
                                    @foreach ($mahasiswa as $m)
                                        @if ($m->id == $konsultasi->mahasiswa_id)
                                            <td>{{ $m->nama }}</td>
                                        @endif
                                    @endforeach
                                    @foreach ($konselor as $ko)
                                        @if ($ko->id == $konsultasi->konselor_id)
                                            <td>{{ $ko->nama }}</td>
                                        @endif
                                    @endforeach
                                    @foreach ($rekam_medik as $re)
                                        @if ($re->id == $konsultasi->rekam_medik_id)
                                            <td>{{ $re->photo_rekam_medik }}</td>
                                        @endif
                                    @endforeach
                                    <td>{{ $konsultasi->jenis_konsultasi }}</td>
                                    <td>{{ $konsultasi->tanggal }}</td>
                                    <td>
                                        <a href="/admin/konsultasi/{{ $konsultasi->id }}/edit"><i
                                                class="fas fa-edit"></i></a> |
                                        <form action="/admin/konsultasi/{{ $konsultasi->id }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="text-danger bg-transparent border-0"
                                                onclick="return confirm('Yakin ingin mengahpus?')">
                                                <i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>NIDN</th>
                                <th>Tanggal Lahir</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <script>
        //== Class definition
        var SweetAlert2Demo = function() {

            //== Demos
            var initDemos = function() {
                //== Sweetalert Demo 1
                $('#alert_demo_1').click(function(e) {
                    swal('Good job!', {
                        buttons: {
                            confirm: {
                                className: 'btn btn-success'
                            }
                        },
                    });
                });

                //== Sweetalert Demo 2
                $('#alert_demo_2').click(function(e) {
                    swal("Here's the title!", "...and here's the text!", {
                        buttons: {
                            confirm: {
                                className: 'btn btn-success'
                            }
                        },
                    });
                });

                //== Sweetalert Demo 3
                $('#alert_demo_3_1').click(function(e) {
                    swal("Good job!", "You clicked the button!", {
                        icon: "warning",
                        buttons: {
                            confirm: {
                                className: 'btn btn-warning'
                            }
                        },
                    });
                });

                $('#alert_demo_3_2').click(function(e) {
                    swal("Good job!", "You clicked the button!", {
                        icon: "error",
                        buttons: {
                            confirm: {
                                className: 'btn btn-danger'
                            }
                        },
                    });
                });

                $.notify(function(e) {
                    swal("Good job!", "You clicked the button!", {
                        icon: "success",
                        buttons: {
                            confirm: {
                                className: 'btn btn-success'
                            }
                        },
                    });
                });

                $('#alert_demo_3_4').click(function(e) {
                    swal("Good job!", "You clicked the button!", {
                        icon: "info",
                        buttons: {
                            confirm: {
                                className: 'btn btn-info'
                            }
                        },
                    });
                });

                //== Sweetalert Demo 4
                $('#alert_demo_4').click(function(e) {
                    swal({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success",
                        buttons: {
                            confirm: {
                                text: "Confirm Me",
                                value: true,
                                visible: true,
                                className: "btn btn-success",
                                closeModal: true
                            }
                        }
                    });
                });

                $('#alert_demo_5').click(function(e) {
                    swal({
                        title: 'Input Something',
                        html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
                        content: {
                            element: "input",
                            attributes: {
                                placeholder: "Input Something",
                                type: "text",
                                id: "input-field",
                                className: "form-control"
                            },
                        },
                        buttons: {
                            cancel: {
                                visible: true,
                                className: 'btn btn-danger'
                            },
                            confirm: {
                                className: 'btn btn-success'
                            }
                        },
                    }).then(
                        function() {
                            swal("", "You entered : " + $('#input-field').val(), "success");
                        }
                    );
                });

                $('#alert_demo_6').click(function(e) {
                    swal("This modal will disappear soon!", {
                        buttons: false,
                        timer: 3000,
                    });
                });

                $('#alert_demo_7').click(function(e) {
                    swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        buttons: {
                            confirm: {
                                text: 'Yes, delete it!',
                                className: 'btn btn-success'
                            },
                            cancel: {
                                visible: true,
                                className: 'btn btn-danger'
                            }
                        }
                    }).then((Delete) => {
                        if (Delete) {
                            swal({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                type: 'success',
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        } else {
                            swal.close();
                        }
                    });
                });

                $('#alert_demo_8').click(function(e) {
                    swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        buttons: {
                            cancel: {
                                visible: true,
                                text: 'No, cancel!',
                                className: 'btn btn-danger'
                            },
                            confirm: {
                                text: 'Yes, delete it!',
                                className: 'btn btn-success'
                            }
                        }
                    }).then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        } else {
                            swal("Your imaginary file is safe!", {
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        }
                    });
                })

            };

            return {
                //== Init
                init: function() {
                    initDemos();
                },
            };
        }();

        //== Class Initialization
        jQuery(document).ready(function() {
            SweetAlert2Demo.init();
        });
    </script>

@endsection
