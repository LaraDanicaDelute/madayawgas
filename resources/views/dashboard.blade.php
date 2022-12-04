@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">

        <div class="content=header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                   
            </div>
        </div>
</div>
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $stocks ?? 0}}</h3>

                <p>Product in Stock</p>
              </div>
              <div class="icon">
              <i class="fa fa-solid fa-box"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $purchases ?? 0 }}</h3>

                <p>Totol Purchase Record</p>
              </div>
              <div class="icon">
              <i class="fa fa-solid fa-layer-group"></i>
              </div>
            
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $users ?? ''}}</h3>

                <p>Users</p>
              </div>
              <div class="icon">
              <i class="fa fa-user"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>


<div class="card card-primary card-outline">
    <div class="card-body">
    <table class ="table table-bordered datatable table-sm ">
                 <thead> 
                  <tr>
                    <th>Stock NO.</th>
                    <th>Stock Code</th>
                    <th>Product Name</th>
                    <th>Total Stocks</th>
                    <th>Retail Price</th>
                  </tr> 
                </thead>
                <tbody>
                  @if($prod_stock)
                    @foreach($prod_stock as $key => $stock)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $stock->stock_code ?? '' }}</td>
                      <td>{{ $stock->product_name ?? '' }}</td>
                      <td>{{ $stock->total_stocks ?? '' }}</td>
                      <td>{{ $stock->retail_price ?? '' }}</td>
                     
                    </tr>
                    @endforeach
                @endif
                </tbody>
                </table>
    </div>
</div>
</div>
</div>

    @endsection