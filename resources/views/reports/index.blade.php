@extends('layouts.master')
@section('content')
<div class="content-header"> 
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product Stock Report</h1> <br>
            <a href="{{route('reports.create') }}"  class="btn btn-md btn-primary"> <i class="fa fa-plus"></i> Compute Stock Report</a>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Product Stock Report</li>
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
                
                <h5 class="card-title">Report List</h5><br>
                <br>
                <table class ="table table-bordered datatable">
                 <thead> 
                    <th>Stock No.</th>
                    <th># of Sold Items</th>
                    <th>Total Sales</th>
                    
                  </tr> 
                </thead>
                <tbody>
                  @if($reports)
                    @foreach($reports as $key => $report)
                    <tr>
                      <td>{{ $report->stock_code ?? ''}}</td>
                      <td>{{ $report->sold_items ?? ''}}</td>
                      <td>{{ $report->total_sales ?? ''}}</td>
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