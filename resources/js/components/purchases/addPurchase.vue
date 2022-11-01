<template>
                <div class="card card-primary card-outline">
                <div class="card-body">
                <h5 class="card-title">Add Product Purchase</h5>
                <br>
                <form role="form" action ="" method="post">
                
                <div class="card-body">
                  <div class="form-group">
                   <label>Stock Code<span class="text-danger">*</span></label>
                    <input type="text" v-model="form.stock_code" class="form-control" id="stock_code" placeholder="enter stock code">
                    <!-- <select class="form-control" v-model="form.stock_id">
                      <option v-for="(item, index) in stocks" :key="index" :value="item.id">{{ item.stock_code}}</option>
                    </select>
                    <Select2 v-model="form.stocks_id" :options="stocks" :settings="{ placeholder: 'PLEASE'}"></Select2> -->
                  </div>

                  <div class="form-group">
                    <label>Price per Item (₱)<span class="text-danger">*</span></label>
                    <input type="number" v-model="form.item_price" class="form-control" id="item_price" placeholder="enter item price">
                  </div>

                  <div class="form-group">
                    <label>Number per Item<span class="text-danger">*</span></label>
                    <input type="number" v-model="form.number_of_items" class="form-control" id="number_of_items" placeholder="enter number of items">
                  </div>

                  <div class="form-group">
                    <label>Total Payment (₱)<span class="text-danger">*</span></label>
                    <input type="number" v-model="form.total_payment" class="form-control" id="total_payment" placeholder="enter total payment">
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
    import store from '../../store'
    import * as actions from '../../store/action-types'
    import { mapGetters }  from 'vuex'
    //import Select2 from 'v-select2-component'

    export default {
     // components: {Select2},
      data(){
        return {
          form: {
            stock_id : 0,
            item_price: 0,
            number_of_items: 0,
            total_payment: 0
          }
        }
      },
      computed: {
        ...mapGetters ({
          'stocks' : 'getStocks'
        })
      },
      mounted(){
        //get stocks
        store.dispatch(actions.GET_STOCKS)
      }
    }

</script>