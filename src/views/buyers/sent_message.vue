<template>
  <!-- main content -->
  <div class="container">
  <div class="row">
    <p class="h6 p-3"><span class="text-primary">Your Account</span> > <span class=" ">Message Centre</span>
</p>
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
<div class="card pt-2" style="height: 20rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
          <router-link
                              to="/messageopen"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="view Shopping basket"
                            >
  <div class="row">
    <div class="col-9">
      <p class="text-left text-sm">
      <b>Ivan,</b> regarding your recent order at REJEEStores.com.
      </p>
    </div>
    <div class="col">
      <p class="text-right text-xs">18/12 00:14:32</p>
    </div>
  </div>
          </router-link>
  </li>
    <li class="list-group-item">
          <router-link
                              to="/messageopen"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="view Shopping basket"
                            >
  <div class="row">
    <div class="col-9">
      <p class="text-left text-sm">
      <b>Ivan,</b> regarding your recent order at REJEEStores.com.
      </p>
    </div>
    <div class="col">
      <p class="text-right text-xs">18/12 00:14:32</p>
    </div>
  </div>
          </router-link>
  </li>
    <li class="list-group-item">
          <router-link
                              to="/messageopen"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="view Shopping basket"
                            >
  <div class="row">
    <div class="col-9">
      <p class="text-left text-sm">
      <b>Ivan,</b> regarding your recent order at REJEEStores.com.
      </p>
    </div>
    <div class="col">
      <p class="text-right text-xs">18/12 00:14:32</p>
    </div>
  </div>
          </router-link>
  </li>
  </ul>
</div>
  </div>
    </div>
  </div>
</template>
        