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
    <div class="col-12 p-2">
  <div class="btn-group" role="group">
   <router-link type="button" class="border text-sm btn-sm btn-light" to="/MY message"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                            >Back
          </router-link> 
   <button type="button" class="border text-sm btn-sm btn-light" data-toggle="collapse" data-target="#replymessage" aria-expanded="false" aria-controls="collapseExample">Reply
   </button>
          
  </div>
    </div>
      <div class="" style="height: 30rem;">
  <div class="card-body">

<div class="collapse" id="replymessage">
  <div class="card-header">
    <p class="h6 text-dark">Delivery enquiry from REJEE Stores. customer Ivan (Order: 202-0274579-1617107).</p>
  </div>
  <form>
    <p class="text-dark border-b-2 card-title"><b>Send to:</b> <span class="text-info"> GVX Machandise UK</span></p>
    

  <div class="form-group">
    <textarea class="form-control text-sm text-secondary" id="exampleFormControlTextarea1"  rows="3"> Please limit your text to 40000</textarea>
  </div>
  <div class="form-group">
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    <p class="text-secondary text-xs">You can upload text files, PDFs, Word documents, and various image types (.jpg, .gif, .png)</p>
  </div>
  <div class="form-group justify-content-end">
    <button type="submit" class="btn btn-light btn-sm border" data-toggle="collapse" data-target="#replymessage" aria-expanded="false" aria-controls="collapseExample">Cancel</button>
    <button type="submit" class="btn btn-warning btn-sm border">Submit</button>
  </div>
  </form>
  
</div>

  <div class="card-header">
    <p class="h6 text-dark">Delivery enquiry from REJEE Stores. customer Ivan (Order: 202-0274579-1617107).</p>
  </div>
    <p class="text-dark border-b-2 card-title"><b>From:</b> <span class="text-info"> {{message.sender_name}}</span> <span class="text-dark" v-if="message.created_at"> {{new Date(message.created_at).toLocaleString()}}</span> </p>
    <p class="card-text">{{message.message}}</p>
  </div>
</div>
    </div>
  </div>
  </div>
</template>
<script>

import User from '../../apis/User';
export default {
  props: ['mid'],
  data() {
    return {
      message: {},
      errors: {},
      loading: false,
    }
  },
  methods: {
    loadData(){
        User.getMessage(this.mid)
            .then(res=>{
                    this.message = res.data[0];                  
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
        