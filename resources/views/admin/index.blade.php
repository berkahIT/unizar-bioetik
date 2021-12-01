@extends('layouts.admin')
@section('admin')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->

          <!-- Small Box (Stat card) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small card -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{ $assessment }}</h3>

                  <p>Assesment</p>
                </div>
                <div class="icon">
                  <i class="fas fa-tasks"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small card -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $konselor }}</h3>

                  <p>Konselor</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-md"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small card -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $mahasiswa }}</h3>

                  <p>Mahasiswa</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-graduate"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small card -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{ $bioetik }}</h3>

                  <p>Lapor Bioetik</p>
                </div>
                <div class="icon">
                  <i class="fas fa-file-medical-alt"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

@endsection
