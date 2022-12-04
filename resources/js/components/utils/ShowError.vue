<template>
  <div class= "col-sm-12" v-if="isErrors">
    <div  v-for="(item, index) in errors" :key="index" class="alert alert-danger" role="alert">
        {{ item [0] }}
    </div>

  </div>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
  computed: {
    ...mapGetters ({
      isErrors: 'getIsErrors',
      errors: 'getErrors'
    })
  }
}
</script>

<style>

</style>