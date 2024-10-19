@extends('layouts.master')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product Purchase</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Purchase</li>
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
                <h5 class="card-title">Edit Product Purchase</h5>
                <br>
                <form role="form" action ="{{ route('purchases.update', $purchase->id) }}" method="post">
                @csrf
                @method('PUT')
                 <div class="card-body">

                  <div class="form-group">
                    <label for="item_price">Price Per Item</label>
                    <input name="item_price" type="number" class="form-control" id="item_price" placeholder="enter price per item" value="{{ $purchase->item_price }}">
                    @if($errors->has('item_price'))
                    <span class="text-danger">{{ $errors->first('item_price') }}</span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="number_of_items">Number of items</label>
                    <input name="number_of_items" type="number" class="form-control" id="number_of_items" placeholder="enter number of items" value="{{ $purchase->number_of_items}}">
                    @if($errors->has('number_of_items'))
                    <span class="text-danger">{{ $errors->first('number_of_items') }}</span>
                    @endif
                  </div>

                <!--  <div class="form-group">
                    <label for="total_payment">Total Payment</label>
                    <input name="total_payment" type="number" class="form-control" id="total_payment" placeholder="enter total payment" value="{{ $purchase->total_payment}}">
                    @if($errors->has('total_payment'))
                    <span class="text-danger">{{ $errors->first('total_payment') }}</span>
                    @endif
                  </div> -->


        
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary"><i class = "fa fa-save"></i> Save Changes</button>
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