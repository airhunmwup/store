<template>
<div>
  <webapp-changeUserPasswordPage/>
</div>

</template>

<script>
import changeUserPasswordPage from './components/businessLogin.vue'

export default {
  name: 'App',
  components: {
    'webapp-changeUserPasswordPage':changeUserPasswordPage,
  }
}
</script>
