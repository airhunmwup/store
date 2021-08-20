<template>
  <!-- main content -->
  <div class="container">
  <div class="row">
    <p class="h6 p-3"><span class="text-primary">Your Account</span> > <span class=" ">Message Centre</span>
</p>
    <div class="col-2">
      <div class="" style="width: 10rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item underline font-weight-bold">Inbox</li>
    <li class="list-group-item">Sent messages</li>
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
      <div class="card" style="height: 30rem;">
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
    <p class="text-dark border-b-2 card-title"><b>From:</b> <span class="text-info"> GVX Machandise UK</span> <span class="text-dark"> 08/04 11:59:47</span> </p>
    <p class="card-text">No.

Purchase date and time below
04-Aug-2021 08:31

Item has been packed and sent through Royal mail

Thank you</p>
  </div>
</div>
    </div>
  </div>
  </div>
</template>
        