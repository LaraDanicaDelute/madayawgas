
@extends('layouts.master')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Product Purchase</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Product Purchase</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid" >
      <div class="row">
      <div class="col-lg-8" id="addPurchase"> 

      </div>
      <div class="col-lg-4">
                <div class="card card-primary card-outline">
                <div class="card-body">
                <h5 class="card-title">Calculator</h5>
                <br>
                
                <form role="form" action="<?php  $_SERVER['PHP_SELF'] ;?>"method="GET">
                
                <div class="card-body">
                    
                  <div class="form-group">
                    <label>Enter First number <span class="text-danger">*</span></label>
                    <input type="number" id="num1" name="num1"  class="form-control" placeholder="enter item price">
                  </div>

                  <div class="form-group">
                    <label>Enter Second number<span class="text-danger">*</span></label>
                    <input type="number" id="num2" name="num2" class="form-control"  placeholder="enter number of items">
                  </div>
                  <input type="submit" value="add" name="operator" class="btn btn-sm btn-primary">
                  <input type="submit" value="subtract" name="operator" class="btn btn-sm btn-info">
                  <input type="submit" value="divide" name="operator" class="btn btn-sm btn-warning">
                  <input type="submit" value="multiply" name="operator" class="btn btn-sm btn-danger">
                  <br><br>
                  <label>Total:</label>
                  <?php
                if(isset($_GET['operator'])) {
                    $result1 = $_GET['num1'];
                    $result2 = $_GET['num2'];
                    $operator = $_GET['operator'];
                    switch($operator){
                      case "add":
                        echo $result1 + $result2;
                      break;
                      case "subtract":
                        echo  $result1 - $result2;
                      break;
                      case "divide":
                        echo  $result1 / $result2;
                      break;
                      case "multiply":
                        echo  $result1 * $result2;
                      break;
                    }
                }
              ?>
              
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