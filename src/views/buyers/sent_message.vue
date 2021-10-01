<template>
  <!-- main content -->
  <div class="container">
<nav aria-label="breadcrumb" class="d-xs-none">
  <ol class="breadcrumb text-xs">
        <li class="breadcrumb-item text-primary"> <router-link
                            to="/account"
                            data-toggle="collapse"
                            class="text-primary underline"
                            data-target=".navbar-collapse"
                            >
          Your Account</router-link>
        </li>
    <li class="breadcrumb-item active" aria-current="page">Message Centre</li>
  </ol>
</nav>
  <div class="row pt-4">
    <div class="col-2">
      <div class="" style="width: 10rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item font-weight-bold">
          <router-link
                              to="/My message"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="view Shopping basket"
                            >Inbox
          </router-link></li>
    <li class="list-group-item font-weight-bold underline bg-light">Sent Messages</li>
  </ul>
</div>
    </div>
    <div class="col-lg-10 col-md-12">
    <div class="col-12 p-2">
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-sm border border-b-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      All Messages
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#"><p class="text-xs">Last 30 Days</p></a>
      <a class="dropdown-item" href="#"><p class="text-xs">30 Days to 6 Months</p></a>
      <a class="dropdown-item" href="#"><p class="text-xs">This Year</p></a>
      <a class="dropdown-item" href="#"><p class="text-xs">Last Year</p></a>
      <a class="dropdown-item" href="#"><p class="text-xs">Older</p></a>
    </div>
  </div>
    </div>
<div class="pt-2" style="height: 20rem;">
  <ul class="list-group list-group-flush">
        <li class="list-group-item" v-for="sent_message in sent_messages" v-bind:key="sent_message.id">
          <router-link
                              to="/messageopen"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="view Shopping basket"
                            >
  <div class="row">
    <div class="col-9">
      <p class="text-left text-sm">
      {{sent_message.message}}
      </p>
    </div>
    <div class="col">
      <p class="text-right text-xs">{{new Date(sent_message.created_at).toLocaleString()}}</p>
    </div>
  </div>
          </router-link>
  </li>
  <li class="list-group-item" >
      <p class="text-center text-xs" >Empty! you do not have any sent messages.</p>
    </li>
  </ul>
</div>

                        <div class="justify-content-center p-4">
                <nav aria-label="Page navigation example" class="col-12">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link underline" href="#">1</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
  </ul>
</nav>
                      </div>
  </div>
    </div>
  </div>
</template>
<script>

import User from '../../apis/User';
export default {
  data() {
    return {
      sent_messages: {},
      inbox_messages: {},
      errors: {},
      loading: false,
    }
  },
  methods: {
    loadData(){
        User.fetchMessages(this.$store.state.currentUser.id)
            .then(res=>{
                    this.sent_messages = res.data.sent;  
                    this.inbox_messages = res.data.inbox;                  
                })
                .catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
           // document.getElementById("alat").innerHTML = error.response.data.message;
        }
      })
            }
    },
    created() {
            this.loadData()
        }  
}

</script>
        