<template>
  <!-- main content -->
  <div class="container text-sm">
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
    <li class="list-group-item underline font-weight-bold bg-light">Inbox</li>
    <li class="list-group-item font-weight-bold">
          <router-link
                              to="/sentmessage"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="view Shopping basket"
                            >Sent messages
          </router-link></li>
  </ul>
</div>
    </div>
    <div class="col-lg-10 col-md-12">
    <div class="col-12 pb-2">
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
  <ul class="nav nav-tabs border border-b-0 bg-light" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Messages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Buyer/Seller Messages</a>
  </li>
</ul>
<div class="tab-content  border-t-0" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<div class="card pt-2" style="height: 20rem;" data-spy="scroll"> 
  <ul class="list-group list-group-flush">
    <li class="list-group-item" v-for="inbox_message in inbox_messages" v-bind:key="inbox_message.id">
        <router-link
            v-bind:to="'/messageopen/' + inbox_message.id"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="open message"
        >
  <div class="row">
    <div class="col-9">
      <p class="text-left text-sm">
      {{inbox_message.message}}
      </p>
    </div>
    <div class="col">
      <p class="text-right text-xs">{{new Date(inbox_message.created_at).toLocaleString()}}</p>
    </div>
  </div>
          </router-link>
  </li>
  <li class="list-group-item" >
      <p class="text-center text-xs">Empty! you do not have any message here.</p>
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
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    
<div class="card pt-2" style="height: 20rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item" v-for="inbox_message in inbox_messages" v-bind:key="inbox_message.id">
          <router-link
            v-bind:to="'/messageopen/' + inbox_message.id"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="open message"
        >
  <div class="row">
    <div class="col">
        <b class="text-xs text-uppercase">FX stores uk</b>
    </div>
    <div class="col-6">
      <p class="text-xs">
      {{inbox_message.message}}
      </p>
    </div>
    <div class="col">
      <p class="text-right text-xs">{{new Date(inbox_message.created_at).toLocaleString()}}</p>
    </div>
  </div>
          </router-link>
  </li>
  <li class="list-group-item" >
      <p class="text-center text-xs" >Empty! you do not have any message here.</p>
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
        