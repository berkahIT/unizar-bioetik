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
                    <a href="/admin/konsultasi" class="btn btn-warning float-right"><i class="fas fa-angle-left"></i>
                        Kembali</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/admin/konsultasi/{{ $konsultasi->id }}" method="POST">
                        @method('put')
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
                                    <input type="date" name="tanggal" id="tanggal" placeholder="Tanggal"
                                        class="form-control  @error('tanggal') is-invalid @enderror"
                                        value="{{ old('tanggal', $konsultasi->tanggal) }}">
                                    @error('tanggal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="rekam_medik">Status Rekam Medik</label>
                                    <select class="form-control @error('rekam_medik') is-invalid @enderror"
                                        name="rekam_medik" id="rekam_medik" autofocus>
                                        <option value="1">~ Status Rekam Medik ~</option>
                                        @if (old('konsultasi_id') == $konsultasi->id)
                                            <option value="{{ $konsultasi->status }}" selected>
                                                {{ $konsultasi->rekam_medik }}</option>
                                        @else
                                            <option value="{{ $konsultasi->status }}">
                                                {{ $konsultasi->rekam_medik }}</option>
                                        @endif
                                    </select>
                                    @error('rekam_medik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="rekam_medik_id">Rekam Medik</label>
                                    <select class="form-control @error('rekam_medik_id') is-invalid @enderror"
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
                                    <select class="form-control @error('jenis_konsultasi') is-invalid @enderror"
                                        name="jenis_konsultasi" id="jenis_konsultasi" autofocus>
                                        <option value="1">~ Jenis Konsultasi ~</option>
                                        @if (old('konsultasi_id') == $konsultasi->id)
                                            <option value="{{ $konsultasi->jenis_konsultasi }}" selected>
                                                {{ $konsultasi->jenis_konsultasi }}</option>
                                        @else
                                            <option value="{{ $konsultasi->jenis_konsultasi }}">
                                                {{ $konsultasi->jenis_konsultasi }}</option>
                                        @endif
                                    </select>
                                    @error('jenis_konsultasi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control @error('status') is-invalid @enderror"
                                        name="status" id="status" autofocus>
                                        <option value="1">~ Status ~</option>
                                        @if (old('konsultasi_id') == $konsultasi->id)
                                            <option value="{{ $konsultasi->status }}" selected>
                                                {{ $konsultasi->status }}</option>
                                        @else
                                            <option value="{{ $konsultasi->status }}">
                                                {{ $konsultasi->status }}</option>
                                        @endif
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>

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
