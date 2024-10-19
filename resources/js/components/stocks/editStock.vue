<template>
     <div class="row">
        <show-error></show-error>
              <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Add Product Stock</h5>
                <br>
                <form @submit.prevent="submitForm" role="form" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="stock_code">Stock Code<span class="text-danger">*</span></label>
                    <input type="text" v-model="form.stock_code"  class="form-control" id="stock_code" placeholder="enter stock code">
                  </div>

                  <div class="form-group">
                    <label for="product_name">Product Name<span class="text-danger">*</span></label>
                    <input type="text" v-model="form.product_name" class="form-control" id="product_name" placeholder="enter product name">
                
                  </div>

                  <div class="form-group">
                    <label for="total_stocks">Product Stocks<span class="text-danger">*</span></label>
                    <input type="number" v-model="form.total_stocks" class="form-control" id="total_stocks" placeholder="enter total product stocks">
                    
                  </div>

                  <div class="form-group">
                    <label for="original_price">Product Price (₱) <span class="text-danger">*</span></label>
                    <input type="number" v-model="form.original_price" class="form-control" id="original_price" placeholder="enter price product original price">
                    
                  </div>

                  <div class="form-group">
                    <label for="retail_price">Product Retail Price (₱) <span class="text-danger">*</span></label>
                    <input type="number" v-model="form.retail_price" class="form-control" id="retail_price" placeholder="enter price product retail price">
                    
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save Changes</button>
                </div>
              </form>
              </div>
            </div><!-- /.card -->
          </div>

        </div>
        <!-- /.row -->
</template>

<script>
    //import Select2 from 'vue3-select2-component'
    import store from '../../store'
    import * as actions from '../../store/action-types'
    import ShowError from "../utils/ShowError.vue";
    export default {
     components: {ShowError},
     props: ['stock'],
      data(){
        return {
          form: {
            stock_code : '',
            product_name : '',
            total_stocks : '',
            original_price : '',
            retail_price : '',
            
          }
        }
      },
    mounted() {
      this.form.stock_code = stock.stock_code
    },
     methods: {
        submitForm() {
          //axios.post('/purchases/create', this.form).then(
            //response => {
              //console.log(response);
            //}
          //).catch(error=> {
            //console.log('error')
          //})

          let data = new FormData();
          data.append('stock_code', this.form.stock_code)
          data.append('product_name', this.form.product_name)
          data.append('total_stocks', this.form.total_stocks)
          data.append('original_price', this.form.original_price)
          data.append('retail_price', this.form.retail_price)


          store.dispatch(actions.ADD_STOCK, data)
        }
      }
      }


</script>