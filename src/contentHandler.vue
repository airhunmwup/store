<template>
<div>
  <webapp-changeUserPasswordPage/>
</div>

</template>

<script>
import changeUserPasswordPage from './components/userRegistrationPage.vue'

export default {
  name: 'App',
  components: {
    'webapp-changeUserPasswordPage':changeUserPasswordPage,
  }
}
</script>
