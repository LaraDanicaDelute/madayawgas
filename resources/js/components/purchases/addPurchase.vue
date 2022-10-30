<template>
                <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Add Product Purchase</h5>
                <br>
                <form role="form" action ="" method="post">
                
                <div class="card-body">
                  <div class="form-group">
                    <label>Stock Code</label>
                    <input name="stock_code" type="text" class="form-control" id="stock_code" placeholder="enter stock code">
                  </div>

                  <div class="form-group">
                    <label>Price per Item</label>
                    <input name="item_price" type="number" class="form-control" id="item_price" placeholder="enter item price">
                  </div>

                  <div class="form-group">
                    <label>Number per Item</label>
                    <input name="number_of_items" type="number" class="form-control" id="number_of_items" placeholder="enter number of items">
                  </div>

                  <div class="form-group">
                    <label>Product Retail Price</label>
                    <input name="total_payment" type="number" class="form-control" id="total_payment" placeholder="enter total payment">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Submit</button>
                </div>
              </form>
              </div>
            </div><!-- /.card -->
</template>

<script>
    export default {

    }

</script>