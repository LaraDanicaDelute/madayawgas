@extends('layouts.master')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1> <br>
            <a href="{{route('users.create') }}"  class="btn btn-md btn-primary"> <i class="fa fa-plus"></i> Add User</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">User List</li>
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
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                
                <h5 class="card-title">Users</h5><br>
                
                <br>
                <table class ="table table-bordered datatable">
                 <thead> 
                  <tr>
                    <th>User NO.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date Added</th>
                    <th>ACTION</th>
                  </tr> 
                </thead>
                <tbody>
                  @if($users)
                    @foreach($users as $key => $user)
                    <tr>
                      <td>{{ $user->id ?? ''}}</td>
                      <td>{{ $user->name ?? '' }}</td>
                      <td>{{ $user->email ?? '' }}
                         @if(auth()->id() == $user->id) (you)
                          @endif
                      </td>
                      <td>{{ $user->created_at ?? '' }}</td>
                      <td> 
                      @if(auth()->id() == $user ->id )
                      <a href="{{ route('users.edit', $user->id) }}"  class="btn btn-sm btn-info">
                          <i class="fa fa-edit"></i> Edit</a>

                          <form role="form" action ="{{ route('users.update', $user->id) }}" method="post">
                          @csrf
                          @method('PUT')
                        </form>
                        @endif
                      
                      @if(auth()->id() != $user ->id )
                        <a href="javascript:;"  class="btn btn-sm btn-danger sa-delete" data-form-id="user-delete-{{  $user->id }}">
                          <i class="fa fa-trash"></i> Delete</a>
                        
                        <form id="user-delete-{{  $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                        </form> 
                        @endif
                      </td>
                    </tr>
                    @endforeach
                @endif
                </tbody>
                </table>
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