@extends('layouts.admin')
@section('admin')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>History Assesment</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">History Assesment</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->

    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <button class="btn btn-success float-right" data-toggle="modal" data-target="#addRowModal"><i class="fas fa-plus"></i> Tambah</button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="/history_assesment" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal</label>
                            <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="assesment">Assesment</label>
                            <input type="text" class="form-control" id="assesment" name="assesment" placeholder="Assesment">
                        </div>
                        <div class="form-group">
                            <label for="skor">Skor</label>
                            <input type="number" class="form-control" id="skor" name="skor" placeholder="Skor">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-success">Reset</button>
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
                            className : 'btn btn-success'
                        }
                    },
                });
            });

            //== Sweetalert Demo 2
            $('#alert_demo_2').click(function(e) {
                swal("Here's the title!", "...and here's the text!", {
                    buttons: {
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });
            });

            //== Sweetalert Demo 3
            $('#alert_demo_3_1').click(function(e) {
                swal("Good job!", "You clicked the button!", {
                    icon : "warning",
                    buttons: {
                        confirm: {
                            className : 'btn btn-warning'
                        }
                    },
                });
            });

            $('#alert_demo_3_2').click(function(e) {
                swal("Good job!", "You clicked the button!", {
                    icon : "error",
                    buttons: {
                        confirm: {
                            className : 'btn btn-danger'
                        }
                    },
                });
            });

            $.notify(function(e) {
                swal("Good job!", "You clicked the button!", {
                    icon : "success",
                    buttons: {
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });
            });

            $('#alert_demo_3_4').click(function(e) {
                swal("Good job!", "You clicked the button!", {
                    icon : "info",
                    buttons: {
                        confirm: {
                            className : 'btn btn-info'
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

            $('#alert_demo_5').click(function(e){
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
                            className : 'btn btn-success'
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
                    buttons:{
                        confirm: {
                            text : 'Yes, delete it!',
                            className : 'btn btn-success'
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
                            buttons : {
                                confirm: {
                                    className : 'btn btn-success'
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
                    buttons:{
                        cancel: {
                            visible: true,
                            text : 'No, cancel!',
                            className: 'btn btn-danger'
                        },
                        confirm: {
                            text : 'Yes, delete it!',
                            className : 'btn btn-success'
                        }
                    }
                }).then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                            buttons : {
                                confirm : {
                                    className: 'btn btn-success'
                                }
                            }
                        });
                    } else {
                        swal("Your imaginary file is safe!", {
                            buttons : {
                                confirm : {
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
