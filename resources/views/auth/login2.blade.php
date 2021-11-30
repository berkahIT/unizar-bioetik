<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('login2.css') }}">

    <title>BIOETIK | Login</title>
  </head>
  <body>


    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img style="border-radius: 20px;" src="{{ asset('img/LOGO FK unizar (1).png') }}" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px; padding: 30px">
              <form action="/authenticate" method="POST">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Welcome to BIOETIK </p>

                </div>

                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0"></p>
                </div>


                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                  <input type="text" id="username" name="username" class="form-control form-control-lg"
                    placeholder="Username" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg"
                    placeholder="Password" />
                </div>

                <div class="text-center text-lg-start mt-3 pt-2">
                  <button type="button" class="btn btn-success btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                </div>

              </form>
            </div>
          </div>
        </div>
        {{-- <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-2 px-2 px-xl-5 bg-success">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
          </div>
          <!-- Copyright -->
        </div> --}}
      </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>
