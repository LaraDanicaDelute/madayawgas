@extends('layouts.master')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Stock Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Stock Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Stock Detail</h5>
                <br>
                <div class="card-body">
                 <table class="table table-sm table-bordered">
                    <tr>
                    <th>Stock NO.</th>
                    <td>{{ $stock->id ?? '' }}</td>
                    </tr>

                    <tr>
                    <th>Stock Code</th>
                    <td>{{ $stock->stock_code ?? '' }}</td>
                    </tr>

                    <tr>
                    <th>Product Name</th>
                    <td>{{ $stock->product_name ?? '' }}</td>
                    </tr>

                    <tr>
                    <th>Total Stocks</th>
                    <td>{{ $stock->total_stocks ?? '' }}</td>
                    </tr>

                    <tr>
                    <th>Original Price</th>
                    <td>{{ $stock->original_price ?? '' }}</td>
                    </tr>

                    <tr>
                    <th>Retail Price</th>
                    <td>{{ $stock->retail_price ?? '' }}</td>
                    </tr>
                 </table>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a href="{{ route('stocks.edit', $stock->id) }}"  class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> Edit</a>
                    <a href="javascript:;"  class="btn btn-sm btn-danger sa-delete" data-form-id="stock-delete-{{  $stock->id }}"><i class="fa fa-trash"></i> Delete</a> 
                        <form id="stock-delete-{{ $stock->id }}" action="{{ route('stocks.destroy', $stock->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                        </form> 
                  
                </div>
              </form>
              </div>
            </div><!-- /.card -->
          </div>
            <div class="col-sm-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <br>
                <div class="card-body">
                 <table class="table table-sm table-bordered">
                    <tr>
                    <th>Encoded by</th>
                    <td>{{ $stock->user_id ?? ''}}</td>
                    </tr>

                    <tr>
                    <th>Created on</th>
                    <td>{{ $stock->created_at ?? '' }}</td>
                    </tr>
                    
                 </table>
                </div>
              </form>
              </div>
            </div><!-- /.card -->
            </div>    
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection