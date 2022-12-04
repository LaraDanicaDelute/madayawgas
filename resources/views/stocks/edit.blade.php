@extends('layouts.master')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product Stocks</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Product Stocks</li>
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
                <h5 class="card-title">Edit Product Stock</h5>
                <br>
                <form role="form" action ="{{ route('stocks.update', $stock->id) }}" method="post">
                @csrf
                @method('PUT')
                 <div class="card-body">
                     <!-- <div class="form-group">
                    <label for="stock_code">Stock Code</label>
                    <input name="stock_code" type="text" class="form-control" id="stock_code" placeholder="enter stock code" value="{{ $stock->stock_code }}">
                    @if($errors->has('stock_code'))
                    <span class="text-danger">{{ $errors->first('stock_code') }}</span>
                    @endif
                  </div> 

                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input name="product_name" type="text" class="form-control" id="product_name" placeholder="enter product name" value="{{ $stock->product_name }}">
                    @if($errors->has('product_name'))
                    <span class="text-danger">{{ $errors->first('product_name') }}</span>
                    @endif
                  </div> -->

                  <div class="form-group">
                    <label for="total_stocks">Product Stocks</label>
                    <input name="total_stocks" type="number" class="form-control" id="total_stocks" placeholder="enter total product stocks" value="{{ $stock->total_stocks }}">
                    @if($errors->has('total_stocks'))
                    <span class="text-danger">{{ $errors->first('total_stocks') }}</span>
                    @endif
                  </div>

                   <!--<div class="form-group">
                    <label for="original_price">Product Price</label>
                    <input name="original_price" type="number" class="form-control" id="original_price" placeholder="enter price product original price" value="{{ $stock->original_price }}">
                    @if($errors->has('original_price'))
                    <span class="text-danger">{{ $errors->first('original_price') }}</span>
                    @endif
                  </div>

                 <div class="form-group">
                    <label for="retail_price">Product Retail Price</label>
                    <input name="retail_price" type="number" class="form-control" id="retail_price" placeholder="enter price product retail price" value="{{ $stock->retail_price }}">
                    @if($errors->has('retail_price'))
                    <span class="text-danger">{{ $errors->first('retail_price') }}</span>
                    @endif
                  </div>  -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary"><i class = "fa fa-save"></i> Submit</button>
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