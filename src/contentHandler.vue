<template>
  <webapp-productDetails/>

</template>

<script>
import productDetails from './components/productDetails.vue'

export default {
  name: 'App',
  components: {
    'webapp-productDetails':productDetails,
  }
}
</script>
