<template>
  <section>
    <Header/>
    <router-view />
    <Footer/>
    <div class="back-to-top pr-4">
      <a href="#">
        <i class="text-warning fa fa-long-arrow-up"></i>
      </a>
    </div>
    
  </section>
</template>


<script>
import Header from './components/header';
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

