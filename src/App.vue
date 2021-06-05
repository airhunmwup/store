<template>
  <div>
    <Header/>
    <router-view />
    <Footer/>
  </div>
</template>


<script>
import Header from './components/notloginHeader';
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

