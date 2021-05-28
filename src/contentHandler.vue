<template>
<div>
  <webapp-headerseller/>
  <webapp-changeUserPasswordPage/>
</div>
</template>

<script>
import changeUserPasswordPage from './views/sellers/seller_dashboard.vue'
import headerseller from './components/header'

export default {
  name: 'App',
  components: {
    'webapp-changeUserPasswordPage':changeUserPasswordPage,
    'webapp-headerseller':headerseller,
  }
}
</script>
