@extends('layouts.master')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product Purchase Record</h1> <br>
            <a href="{{route('purchases.create') }}"  class="btn btn-md btn-primary"> <i class="fa fa-plus"></i> Add Product Purchase</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Product Purchases</li>
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
                
                <h5 class="card-title">Product Purchases List</h5><br>
                <br>
                <table class ="table table-bordered datatable">
                 <thead> 
                  <tr>
                    <th>Stock Code</th>
                    <th>Price per Item</th>
                    <th>Number of Items</th>
                    <th>Total Payment</th>
                    <th>Retail Price</th>
                    <th>Added Date</th>
                    <th>ACTION</th>
                  </tr> 
                </thead>
                <tbody>
                  @if($purchases)
                    @foreach($purchases as $key => $purchase)
                    <tr>
                      <td>{{ $purchase->stock_code ?? '' }}</td>
                      <td>{{ $purchase->item_price ?? '' }}</td>
                      <td>{{ $purchase->number_of_items ?? '' }}</td>
                      <td>{{ $purchase->total_payment ?? '' }}</td>
                      <td> {{ $purchase->created_at ?? '' }}</td>
                      <td> 
                        <a href="{{ route('purchases.edit', $purchase->id) }}"  class="btn btn-sm btn-info">
                          <i class="fa fa-edit"></i> Edit</a>

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