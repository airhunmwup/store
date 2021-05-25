<template>
<div>
  <webapp-headerseller/>
  <webapp-changeUserPasswordPage/>
</div>

</template>

<script>
import changeUserPasswordPage from './components/seller_dashboard.vue'
import headerseller from './components/headerseller.vue'

export default {
  name: 'App',
  components: {
    'webapp-changeUserPasswordPage':changeUserPasswordPage,
    'webapp-headerseller':headerseller,
  }
}
</script>
