@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Register new User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Register</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="register-box">
                    <div class="register-logo">
                      <a href=""><b>Register</b></a>
                    </div>

                    <div class="card">
                      <div class="card-body register-card-body">
                        <p class="login-box-msg">Register a new user</p>

                        <form action="{{ route('register') }}" method="post">
                          @csrf
                          <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Full name">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-user"></span>
                              </div>
                            </div>
                        </div>
                            @error('name')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                          <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                              </div>
                            </div>
                        </div>
                            @error('email')
                            <div class="text-danger mb-2">{{ $message }}</div>
                            @enderror
                          <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                              </div>
                            </div>
                        </div>
                            @error('password')
                            <div class="text-danger mb-2">{{ $message }}</div>
                            @enderror
                          <div class="row">
                            <div class="col-8">

                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                              <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                          </div>
                        </form>


                      </div>
                      <!-- /.form-box -->
                    </div><!-- /.card -->
                  </div>
              <!-- /.card -->
            </div>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
