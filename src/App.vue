<template>
  <div>
  <webapp-contentHandler/>
  </div>
  
</template>

<script>
import contentHandler from './contentHandler.vue'

export default {
  name: 'App',
  components: {
    'webapp-contentHandler':contentHandler,
  }
}
</script>