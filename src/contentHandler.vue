<template>
<div class="main-content">
  <webapp-productPage/>

</div>
</template>

<script>
import productPage from './components/productPage.vue'

export default {
  name: 'App',
  components: {
    'webapp-productPage':productPage,
  }
}
</script>
