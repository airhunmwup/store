<template>
<div>
  <webapp-headerseller/>
  <webapp-changeUserPasswordPage/>
</div>

</template>

<script>
import changeUserPasswordPage from './pages/seller_dashboard.vue'
import headerseller from './components/header.vue'

export default {
  name: 'App',
  components: {
    'webapp-changeUserPasswordPage':changeUserPasswordPage,
    'webapp-headerseller':headerseller,
  }
}
</script>
