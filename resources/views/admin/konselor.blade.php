@extends('layouts.admin')
@section('admin')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Konselor</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Konselor</li>
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
                                            Konselor
                                        </span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="small">Silahkan Masukkan Data Konselor</p>
                                    <form action="/admin/konselor" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" name="username"
                                                        placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Nama</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Nama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nim">NIDN</label>
                                                    <input type="text" class="form-control" id="nim" name="nim"
                                                        placeholder="NIDN">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                        <option value=""><i>Jenis Kelamin</i></option>
                                                        <option value="Laki-Laki"><i>Laki-Laki</i></option>
                                                        <option value="Perempuan"><i>Perempuan</i></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="tanggal_lahir"
                                                        name="tanggal_lahir" placeholder="Tanggal Lahir">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea class="form-control" name="alamat" id="alamat" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="spesialis">Spesialis</label>
                                                    <input type="spesialis" class="form-control" id="spesialis"
                                                        name="spesialis" placeholder="Spesialis">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_konselor">Jenis Konselor</label>
                                                    <select class="form-control" id="jenis_konselor"
                                                        name="jenis_konselor">
                                                        <option value=""><i>Jenis Konselor</i></option>
                                                        <option value="Psikolog"><i>Psikolog</i></option>
                                                        <option value="Konselor"><i>Konselor</i></option>
                                                        <option value="Konselor Ahli"><i>Konselor Ahli</i></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="detail">Detail</label>
                                                    <textarea class="form-control" name="detail" id="detail" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="profile_photo_path">Photo</label>
                                                    <input type="file" name="profile_photo_path" id="profile_photo_path"
                                                        placeholder="Photo"
                                                        class="form-control @error('profile_photo_path') is-invalid @enderror"
                                                        value="{{ old('profile_photo_path') }}">
                                                    <p>*Photo</p>
                                                    @error('profile_photo_path')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" id="role" name="role"
                                                        value="konselor">
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
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>NIDN</th>
                                <th>Tanggal Lahir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($konselor as $konselor)
                                <tr>
                                    <td>{{ $konselor->name }}</td>
                                    <td>{{ $konselor->email }}</td>
                                    <td>{{ $konselor->username }}</td>
                                    <td>{{ $konselor->nim }}</td>
                                    <td>{{ $konselor->tanggal_lahir }}</td>
                                    <td>
                                        <a href="/admin/konselor/{{ $konselor->id }}/edit"><i
                                                class="fas fa-edit"></i></a> |
                                        <form action="/admin/konselor/{{ $konselor->id }}" method="post"
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
