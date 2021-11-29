@extends('layouts.admin')
@section('admin')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Rekam Medik</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Rekam Medik</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <a href="/admin/rekam_medik" class="btn btn-warning float-right"><i class="fas fa-angle-left"></i>
                        Kembali</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="post" action="/admin/rekam_medik/{{ $rekam_medik->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="user_id">Nama Mahasiswa</label>
                            <select class="form-control @error('user_id') is-invalid @enderror" name="user_id" id="user_id"
                                autofocus>
                                <option value="1">~ Pilih Mahasiswa ~</option>
                                @foreach ($mahasiswa as $u)
                                    @if (old('user_id', $u->nama)) == $u->id)
                                        <option value="{{ $u->id }}" selected>{{ $u->nama }}</option>
                                    @else
                                        <option value="{{ $u->id }}">{{ $u->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('user_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="konsultasi_id">Nama Konsultasi</label>
                            <select class="form-control @error('konsultasi_id') is-invalid @enderror" name="konsultasi_id"
                                id="konsultasi_id" autofocus>
                                <option value="1">~ Pilih Mahasiswa ~</option>
                                @foreach ($konsultasi as $k)
                                    @if (old('konsultasi_id', $k->nama)) == $k->id)
                                        <option value="{{ $k->id }}" selected>{{ $k->nama }}</option>
                                    @else
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('konsultasi_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Lahir</label>
                            <input type="date" name="tanggal" id="tanggal" placeholder="tanggal"
                                class="form-control  @error('tanggal') is-invalid @enderror"
                                value="{{ old('tanggal', $rekam_medik->tanggal) }}">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="photo_rekam_medik">Photo Rekam Medik</label>
                            <input type="file" name="photo_rekam_medik" id="photo_rekam_medik"
                                placeholder="Photo Rekam Medik"
                                class="form-control @error('rekam_medik') is-invalid @enderror"
                                value="{{ old('photo_rekam_medik', $rekam_medik->photo_rekam_medik) }}">
                            <input type="hidden" name="oldphoto_rekam_medik"
                                value="{{ $rekam_medik->photo_rekam_medik }}">
                            <p>*Photo Rekam Medik</p>
                            @error('photo_rekam_medik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-danger">Hapus</button>
                        </div>
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
