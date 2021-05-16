<template>
  <div>
  <webapp-header/>
  <webapp-contentHandler/>
  <webapp-footer/>
  </div>
  
</template>

<script>
import header from './components/header.vue'
import contentHandler from './contentHandler.vue'
import footer from './components/footer.vue'

export default {
  name: 'App',
  components: {
    'webapp-header':header,
    'webapp-contentHandler':contentHandler,
    'webapp-footer':footer,
  }
}
</script>