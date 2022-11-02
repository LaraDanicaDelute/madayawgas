<template>
            <show-error></show-error>
              <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Add Product Stock</h5>
                <br>
                <form @submit.prevent="submitForm" method="post">
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="stock_code">Stock Code<span class="text-danger">*</span></label>
                    <input name="stock_code" type="text" class="form-control" id="stock_code" placeholder="enter stock code">
                
                  </div>

                  <div class="form-group">
                    <label for="product_name">Product Name<span class="text-danger">*</span></label>
                    <input name="product_name" type="text" class="form-control" id="product_name" placeholder="enter product name">
                
                  </div>

                  <div class="form-group">
                    <label for="total_stocks">Product Stocks<span class="text-danger">*</span></label>
                    <input name="total_stocks" type="number" class="form-control" id="total_stocks" placeholder="enter total product stocks">
                    
                  </div>

                  <div class="form-group">
                    <label for="original_price">Product Price (₱) <span class="text-danger">*</span></label>
                    <input name="original_price" type="number" class="form-control" id="original_price" placeholder="enter price product original price">
                    
                  </div>

                  <div class="form-group">
                    <label for="retail_price">Product Retail Price (₱) <span class="text-danger">*</span></label>
                    <input name="retail_price" type="number" class="form-control" id="retail_price" placeholder="enter price product retail price">
                    
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Submit</button>
                </div>
              </form>
              </div>
            </div><!-- /.card -->
          </div>
</template>


<script>
    import store from '../../store'
    import * as actions from '../../store/action-types'
    import { mapGetters }  from 'vuex'
    //import Select2 from 'v-select2-component'
    import ShowError from "../utils/ShowError.vue";
    export default {
     components: { ShowError },
      data(){
        return {
          form: {
            stock_code : 0,
            product_name : '',
            total_stocks : 0,
            original_price: 0,
            retail_price: 0,
            
          }
        }
      },
      methods: {
        submitForm() {
          let data = new FormData()
          data.append('stock_code', this.form.stock_code)
          data.append('product_name', this.form.product_name)
          data.append('total_stocks', this.form.total_stocks)
          data.append('original_price', this.form.original_price)
          data.append('retail_price', this.form.retail_price)
          store.dispatch(actions.ADD_STOCKS, this.data)
        }
      }
    }

</script>