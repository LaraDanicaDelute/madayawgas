<template>
        <show-error></show-error>
                <div class="card card-primary card-outline">
                <div class="card-body">
                <h5 class="card-title">Add Product Stock Report</h5>
                <br>
                <form @submit.prevent="submitForm" role="form" method="POST">
                <div class = "row">
                  
               <div class="card-body">
                  <div class="form-group">
                   <label>Stock Code<span class="text-danger">*</span></label>
                    <!--<input type="text" v-model="form.stock_code" class="form-control" id="stock_code" placeholder="enter stock code">-->
                     <select class="form-control" v-model="form.stock_code" id="stock_code">
                      <option v-for="(item, index) in stocks" :key="index" :value="item.id">{{item.stock_code}}</option>
                    </select> 
                 <!--<Select2 v-model="form.stock_code" :options="stocks" :settings="{ placeholder: 'select stock code'}"></Select2> -->
                  </div>


                 

                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
              </form>
              </div>
            </div><!-- /.card -->
</template>

<script>
    import store from '../../store'
    import * as actions from '../../store/action-types'
    import { mapGetters }  from 'vuex'
    import ShowError from '../utils/ShowError.vue'
    //import Select2 from 'vue3-select2-component'
    export default {
     components: {ShowError},
      data(){
          ShowError
        return {
          form: {
            stock_code : 0,
        
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
      
          let data = new FormData();
          data.append('stock_code', this.form.stock_code)


          store.dispatch(actions.ADD_REPORT, data)
        }
      }
    }

</script>