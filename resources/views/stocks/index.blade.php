@extends('layouts.master')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product Stocks</h1> <br>
            <a href="{{route('stocks.create') }}"  class="btn btn-md btn-primary"> <i class="fa fa-save"></i> Add Stock</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Product Stocks</li>
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
                
                <h5 class="card-title">Add Product Stock</h5><br>
                <br>
                <table class ="table table-bordered datatable">
                 <thead> 
                  <tr>
                    <th>Stock Code</th>
                    <th>Product Name</th>
                    <th>Total Stocks</th>
                    <th>Orignal Price</th>
                    <th>Retail Price</th>
                    <th>Added Date</th>
                    <th>ACTION</th>
                  </tr> 
                </thead>
                <tbody>
                  @if($stocks)
                    @foreach($stocks as $key => $stock)
                    <tr>
                      <td>{{ $stock->stock_code ?? '' }}</td>
                      <td>{{ $stock->product_name ?? '' }}</td>
                      <td>{{ $stock->total_stocks ?? '' }}</td>
                      <td>{{ $stock->original_price ?? '' }}</td>
                      <td>{{ $stock->retail_price ?? '' }}</td>
                      <td> {{ $stock->created_at ?? '' }}</td>
                      <td> 
                        <a href="{{ route('stocks.edit', $stock->id) }}"  class="btn btn-sm btn-info">
                          <i class="fa fa-edit"></i> Edit</a>

                        <a href="javascript:;"  class="btn btn-sm btn-danger sa-delete" data-form-id="stock-delete-{{  $stock->id }}">
                          <i class="fa fa-trash"></i> Delete</a>

                        <form id="stock-delete-{{  $stock->id }}" action="{{ route('stocks.destroy', $stock->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                        </form> 
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