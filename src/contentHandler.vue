<template>
<div>
  <webapp-header/>
  <webapp-changeUserPasswordPage/>
  <webapp-footer/>
</div>

</template>

<script>
import changeUserPasswordPage from './components/wishlist.vue'
import header from './components/header.vue'
import footer from './components/footer.vue'

export default {
  name: 'App',
  components: {
    'webapp-changeUserPasswordPage':changeUserPasswordPage,
    'webapp-header':header,
    'webapp-footer':footer,
  }
}
</script>
