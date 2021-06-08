<template>
  <div>
    <Header/>
    <router-view />
    <Footer/>
  </div>
</template>


<script>
import Header from './components/headerseller';
import Footer from './components/footer';

export default {
  components:{
    Header,
    Footer
  },
  
}
</script>

<style>

</style>

