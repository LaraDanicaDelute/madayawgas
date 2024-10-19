@extends('layouts.master')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
              <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Add Product Stock</h5>
                <br>
                <form role="form" action="{{route('users.store')}}" method="POST">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="enter name">
                    @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="email">Email<span class="text-danger">*</span></label>
                    <input type="text"  class="form-control" name="email" placeholder="enter email">
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>  

                  <div class="form-group">
                    <label for="password">Password<span class="text-danger">*</span></label>
                    <input type="password"  class="form-control" name="password" placeholder="enter password">
                    @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>  

                  <div class="form-group">
                    <label for="password">Confirm Password<span class="text-danger">*</span></label>
                    <input type="password"  class="form-control" name="password_confirmation" placeholder="confirm password">
                   
                  </div>  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
              </form>
              </div>
            </div><!-- /.card -->
          </div>

        </div>
        <!-- /.row -->
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection