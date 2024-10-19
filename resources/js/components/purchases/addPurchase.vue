<template>
                <show-error></show-error>
                <div class="card card-primary card-outline">
                <div class="card-body">
                <h5 class="card-title">Add Product Purchase</h5>
                <br>
                <form @submit.prevent="submitForm" role="form" method="POST" enctype="multipart/form-data">
                <div class = "row">
                  
                <div class="card-body">
                  <div class="form-group">
                   <label>Stock Code<span class="text-danger">*</span></label>
                    <!--<input type="text" v-model="form.stock_code" class="form-control" id="stock_code" placeholder="enter stock code">-->
                     <select class="form-control" v-model="form.stock_code" id="stock_code" >
                      <option v-for="(item, index) in stocks" :key="index" :value="item.id">{{item.stock_code}}</option>
                    </select> 
                 <!--<Select2 v-model="form.stock_code" :options="stocks" :settings="{ placeholder: 'select stock code'}"></Select2> -->
                  </div>

                 
                  <div class="form-group">
                    <label>Price per Item (₱)<span class="text-danger">*</span></label>
                    <input type="number" v-model="form.item_price" class="form-control" id="item_price" placeholder="item price" wire:model="price" >
                  </div>
            

                  <div class="form-group">
                    <label>Number of Items<span class="text-danger">*</span></label>
                    <input type="number" v-model="form.number_of_items" class="form-control" id="number_of_items" placeholder="enter number of items">
                  </div>

                <!--  <div class="form-group">
                    <label>Total Payment (₱)<span class="text-danger">*</span></label>
                    <input type="number" v-model="form.total_payment" class="form-control" id="total_payment" placeholder="enter total payment">
                  </div>-->
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary" ><i class="fa fa-save"></i> Save</button>
        
                </div>
              </form>
              </div>
            </div><!-- /.card -->
</template>

<script>
    import store from '../../store'
    import * as actions from '../../store/action-types'
    import { mapGetters }  from 'vuex'
    //import Select2 from 'vue3-select2-component';
    import ShowError from "../utils/ShowError.vue";
    export default {
     components: {ShowError},
      data(){
        return {
          form: {
            stock_code : 0,
            item_price: '',
            number_of_items: '',
            total_payment: ''
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
          data.append('item_price', this.form.item_price)
          data.append('number_of_items', this.form.number_of_items)
          data.append('total_payment', this.form.total_payment)
         
          store.dispatch(actions.ADD_PURCHASE, data)
        }
      }
    }

</script>