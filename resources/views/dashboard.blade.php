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

                <p>Total Purchase Record</p>
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
      <div class ="card-body">
        <table class="table table-bordered table-sm">
        <thead> 
                  <tr>
                    <th>Encoded by</th>
                    <th>Stock Code</th>
                    <th>Price per Item</th>
                    <th>Number of Items</th>
                    <th>Total Payment</th>
                    <th>Added Date</th>
                  </tr> 
                </thead>
                <tbody>
                  @if($recent_purchase)
                    @foreach($recent_purchase as $key => $purchase)
                    <tr>
                      <td>{{ $purchase->user_id ?? ''}}</td>
                      <td>{{ $purchase->stock->stock_code ?? '' }}</td>
                      <td>{{ $purchase->item_price ?? '' }}</td>
                      <td>{{ $purchase->number_of_items ?? '' }}</td>
                      <td>{{ $purchase->total_payment ?? '' }}</td>
                      <td>{{ $purchase->created_at ?? ''}}</td>
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