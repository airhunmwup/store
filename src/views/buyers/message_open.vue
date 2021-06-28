<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
       
      </div>
      <div class="container justify-content-center content-bottom">
        <span class="p-5 text-right">Summary is your My REJEE 
          <router-link
            to="/Summary"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="text-primary"
            title="Home Page"
            >homepage</router-link></span>
        <div class="content sidebar-block">
          <div class="text-base">
            <div class="pt-5 pl-5">
              <span class="font-weight-bold text-dark h3"> My REJEE</span>
              <span class="text-dark text-sm"> UserID (0)</span>
            </div>
<div class="dropdown pt-2 d-lg-none h6 d-md-none justify-content-end pl-5">
  <a href="#" class="text-primary underline justify-content-end dropdown-toggle" data-toggle="dropdown">
    Menu
  </a>
  <div class="dropdown-menu">

            <div class="cateTitle hasSubCategory pl-2 open level1">
              <p class="p-2 text-dark">Inbox</p>
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <button
                  class="pl-4 p-1 text-primary active me-3"
                  id="v-pills-inbox1-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-inbox1"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-inbox1"
                  aria-selected="true"
                >
                  All messages (2)
                </button>
                <button
                  class="pl-4 p-1 text-primary me-3"
                  id="v-pills-inbox2-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-inbox2"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-inbox2"
                  aria-selected="false"
                >
                  From REJEE (1)
                </button>

                <button
                  class="text-left text-dark p-2"
                  id="v-pills-sent-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-sent"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-sent"
                  aria-selected="true"
                >
                  Sent
                </button>
                <button
                  class="text-left text-dark p-2"
                  id="v-pills-trash-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-trash"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-trash"
                  aria-selected="true"
                >
                  Trash
                </button>
                <button
                  class="text-left text-dark p-2"
                  id="v-pills-Archive-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Archive"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Archive"
                  aria-selected="true"
                >
                  Archive
                </button>
              </div>
            </div>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>
    <div class="row pl-5">
      <div class="container pl-5">
        <div class="content text-dark p-3 border-b-2 font-weight-bold col-12 pl-5">
          <router-link
            to="/Summary"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="p-3"
            title="Home Page"
            ><span>Activity</span></router-link
          >
          <span class="p-3 text-primary border-primary border-b-4">Message (2)</span>
          <router-link
            to="/account"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="p-3"
            title="Account"
            ><span>Account</span></router-link
          >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="sidebar-3 col-lg-2 col-md-2 d-xs-none pt-3 font-weight-bold">
        <!-- category menu -->
        <div class="sidebar-block">
          <div class="block-content">
            <div class="cateTitle hasSubCategory pl-3 open level1">
              <p class="p-2 text-dark">Inbox</p>
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <button
                  class="pl-4 p-1 text-primary active me-3"
                  id="v-pills-inbox1-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-inbox1"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-inbox1"
                  aria-selected="true"
                >
                  All messages (2)
                </button>
                <button
                  class="pl-4 p-1 text-primary me-3"
                  id="v-pills-inbox2-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-inbox2"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-inbox2"
                  aria-selected="false"
                >
                  From REJEE (1)
                </button>

                <button
                  class="text-left text-dark p-2"
                  id="v-pills-sent-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-sent"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-sent"
                  aria-selected="true"
                >
                  Sent
                </button>
                <button
                  class="text-left text-dark p-2"
                  id="v-pills-trash-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-trash"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-trash"
                  aria-selected="true"
                >
                  Trash
                </button>
                <button
                  class="text-left text-dark p-2"
                  id="v-pills-Archive-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Archive"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Archive"
                  aria-selected="true"
                >
                  Archive
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-9 col-md-9 product-container">
        <p class="p-3 justify-content-end text-right">
          <router-link
            to="/seller_dashboard"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="p-3 justify-content-end"
            title="Account"
            ><span class="p-3 text-primary underline justify-content-end"
              >Change settings</span
            ></router-link
          >
        </p>
        <div id="wrapper-site" class="border">
          <div class="col-sm-12 col-lg-12 p-3 col-md-12 product-container">
            <div id="wrapper-site">
              <div class="tab-content" id="v-pills-tabContent">

                <div
                  class="tab-pane fade show active"
                  role="tabpanel"
                >
                  <div id="content" class="page-content border p-3">

                    <p class="text text-primary p-3">
                      <span class="p-2">
                        <button class="btn-sm border">Delete</button>
                      </span>
                      <span class="p-2">
                        <button class="btn-sm border">Archive</button>
                      </span>
                      <span class="p-2">
                        <select class="btn-sm text-primary select btn border">
                          <option>Mark As</option>
                          <option>Read</option>
                          <option>Unread</option>
                          <option>Flagged</option>
                          <option>Unflagged</option>
                        </select></span
                      >
                      <span class="p-2">
                        <select class="btn-sm border">
                          <option>Move To</option>
                          <option>Trash</option>
                          <option>Archive</option>
                          <option>Save Messages</option>
                        </select></span
                      >
                    </p>
                    <div class="row container p-3 text-dark text-md">
<div class="row inbox-wrapper">

                    <div class="sender d-flex text-primary align-items-center">
                      <span class="pr-2"><b>From:</b></span> <span>  REJEE</span>
                    </div>
                <div class="email-head-sender d-flex align-items-center justify-content-between flex-wrap">
                  
                  <div class="date text-primary">Nov 20, 11:20</div>
                </div>
            <div class="email-content">
              <div class="email-head">
                <div class="email-head-subject">
                  <div class="title d-flex align-items-left justify-content-between">
                    <div class="d-flex align-items-left">
                      <span>
                  <img src="img/home/logo.png" alt="logo" width="50%" /></span>
                    </div>
                    <div class="icons">
                      <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share text-muted hover-primary-muted" data-toggle="tooltip" title="" data-original-title="Forward"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg></a>
                      <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer text-muted" data-toggle="tooltip" title="" data-original-title="Print"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg></a>
                      <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash text-muted" data-toggle="tooltip" title="" data-original-title="Delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="email-body">
                <p>Hello,</p>
                <br>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <br>
                <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                <br>
                <p><strong>Regards</strong>,<br> John Doe</p>
              </div>
            </div>
  </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-inbox1"
                  role="tabpanel"
                  aria-labelledby="v-pills-inbox1-tab"
                >
                  <span class="text text-dark h6 p-3 font-weight-bold">
                    Inbox : All Messages
                  </span>
                  <span class="justify-content-end p-3">
                    <form
                      method="post"
                      class="justify-content-end"
                      id="customer-form"
                    >
                      <div
                        class="
                          input-group
                          col-xs-12 col-sm-12 col-md-7 col-lg-6
                        "
                      >
                        <input
                          type="text"
                          id="name"
                          name="name"
                          placeholder="Search inbox: All messages"
                          class="form-control border-r-none border"
                          value=""
                        />
                        <button
                          class="btn border border-l-none"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i class="fa fa-search fa-1x font-weight-bold"></i>
                        </button>
                        <button
                          class="btn"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i
                            class="fa fa-angle-down fa-1x font-weight-bold"
                          ></i>
                        </button>
                      </div>
                    </form>
                  </span>
                  <div id="content" class="page-content border p-3">
                    <p>
                      <span class="text text-">All </span>|
                      <span class="text text-primary">Unread </span>|
                      <span class="text text-primary">Flagged</span>
                    </p>

                    <p class="text text-primary p-3">
                      <span class="p-2">
                        <input class="pr-3" type="checkbox" />
                      </span>
                      <span class="p-2">
                        <button class="btn-sm border">Delete</button>
                      </span>
                      <span class="p-2">
                        <button class="btn-sm border">Archive</button>
                      </span>
                      <span class="p-2">
                        <select class="btn-sm text-primary select btn border">
                          <option>Mark As</option>
                          <option>Read</option>
                          <option>Unread</option>
                          <option>Flagged</option>
                          <option>Unflagged</option>
                        </select></span
                      >
                      <span class="p-2">
                        <select class="btn-sm border">
                          <option>Move To</option>
                          <option>Trash</option>
                          <option>Archive</option>
                          <option>Save Messages</option>
                        </select></span
                      >
                    </p>
                    <div class="row container p-3 text-dark text-md">
                      <table class="std table table-fixed">
                        <tbody>
                          <tr class="box font-weight-bold text-primary">
                            <td class="text-left">
                              <span>
                                <i class="pl-4 text-gray-400 fa fa-flag"></i
                                ><i
                                  class="
                                    pl-4
                                    text-dark
                                    font-weight-bold
                                    fa fa-paperclip
                                  "
                                ></i
                              ></span>
                            </td>
                            <td class="text-left font-w">From</td>
                            <td class="text-left">Subject</td>
                            <td class="text-right">Item Ends</td>
                            <td class="text-right">Received</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >REJEE
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >New sign in activity on your REJEE account
                              </router-link>
                            </td>
                            <td class="text-right">--</td>
                            <td class="text-right">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Jun 21</router-link
                              >
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table
                        class="std table table-fixed font-weight-bold text-xs"
                      >
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Simple serve
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >New Order
                              </router-link>
                            </td>
                            <td class="text-right">--</td>
                            <td class="text-right">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Jun 21</router-link
                              >
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-inbox2"
                  role="tabpanel"
                  aria-labelledby="v-pills-inbox2-tab"
                >
                  <span class="text text-dark p-3 h6 font-weight-bold">
                    Inbox : From REJEE
                  </span>
                  <span class="justify-content-end p-3">
                    <form
                      method="post"
                      class="justify-content-end"
                      id="customer-form"
                    >
                      <div
                        class="
                          input-group
                          col-xs-12 col-sm-12 col-md-7 col-lg-6
                        "
                      >
                        <input
                          type="text"
                          id="name"
                          name="name"
                          placeholder="Search inbox: From REJEE"
                          class="form-control border-r-none border"
                          value=""
                        />
                        <button
                          class="btn border border-l-none"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i class="fa fa-search fa-1x font-weight-bold"></i>
                        </button>
                        <button
                          class="btn"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i
                            class="fa fa-angle-down fa-1x font-weight-bold"
                          ></i>
                        </button>
                      </div>
                    </form>
                  </span>
                  <div id="content" class="page-content border p-3">
                    <p>
                      <span class="text text-dark">All </span>|
                      <span class="text text-primary">Unread </span>|
                      <span class="text text-primary">Flagged</span>
                    </p>

                    <p class="text text-primary p-3">
                      <span class="p-2">
                        <input class="pr-3" type="checkbox" />
                      </span>
                      <span class="p-2">
                        <button class="btn-sm border">Delete</button>
                      </span>
                      <span class="p-2">
                        <button class="btn-sm border">Archive</button>
                      </span>
                      <span class="p-2">
                        <select class="btn-sm text-primary select btn border">
                          <option>Mark As</option>
                          <option>Read</option>
                          <option>Unread</option>
                          <option>Flagged</option>
                          <option>Unflagged</option>
                        </select></span
                      >
                      <span class="p-2">
                        <select class="btn-sm border">
                          <option>Move To</option>
                          <option>Trash</option>
                          <option>Archive</option>
                          <option>Save Messages</option>
                        </select></span
                      >
                    </p>
                    <div class="row container p-3 text-dark text-md">
                      <table class="std table table-fixed">
                        <tbody>
                          <tr class="box font-weight-bold text-primary">
                            <td class="text-left">
                              <span>
                                <i class="pl-4 text-gray-400 fa fa-flag"></i
                                ><i
                                  class="
                                    pl-4
                                    text-dark
                                    font-weight-bold
                                    fa fa-paperclip
                                  "
                                ></i
                              ></span>
                            </td>
                            <td class="text-left font-w">From</td>
                            <td class="text-left">Subject</td>
                            <td class="text-right">Item Ends</td>
                            <td class="text-right">Received</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >REJEE
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >New sign in activity on your REJEE account
                              </router-link>
                            </td>
                            <td class="text-right">--</td>
                            <td class="text-right">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Jun 21</router-link
                              >
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-sent"
                  role="tabpanel"
                  aria-labelledby="v-pills-sent-tab"
                >
                  <span class="text text-dark p-3 h6 font-weight-bold">
                    Sent : All Messages
                  </span>
                  <span class="justify-content-end p-3">
                    <form
                      method="post"
                      class="justify-content-end"
                      id="customer-form"
                    >
                      <div
                        class="
                          input-group
                          col-xs-12 col-sm-12 col-md-7 col-lg-6
                        "
                      >
                        <input
                          type="text"
                          id="name"
                          name="name"
                          placeholder="Search Sent: All messages"
                          class="form-control border-r-none border"
                          value=""
                        />
                        <button
                          class="btn border border-l-none"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i class="fa fa-search fa-1x font-weight-bold"></i>
                        </button>
                        <button
                          class="btn"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i
                            class="fa fa-angle-down fa-1x font-weight-bold"
                          ></i>
                        </button>
                      </div>
                    </form>
                  </span>
                  <div id="content" class="page-content border p-3">
                    <p>
                      <span class="text text-dark">All </span>|
                      <span class="text text-primary">Unread </span>|
                      <span class="text text-primary">Flagged</span>
                    </p>

                    <p class="text text-primary p-3">
                      <span class="p-2">
                        <input class="pr-3" type="checkbox" />
                      </span>
                      <span class="p-2">
                        <button class="btn-sm border">Delete</button>
                      </span>
                      <span class="p-2">
                        <button class="btn-sm border">Archive</button>
                      </span>
                      <span class="p-2">
                        <select class="btn-sm border">
                          <option>Move To</option>
                          <option>Trash</option>
                          <option>Archive</option>
                          <option>Save Messages</option>
                        </select></span
                      >
                    </p>
                    <div class="row container p-3 text-dark text-md">
                      <table class="std table table-fixed">
                        <tbody>
                          <tr class="box font-weight-bold text-primary">
                            <td class="text-left">
                              <span>
                                <i class="pl-4 text-gray-400 fa fa-flag"></i
                                ><i
                                  class="
                                    pl-4
                                    text-dark
                                    font-weight-bold
                                    fa fa-paperclip
                                  "
                                ></i
                              ></span>
                            </td>
                            <td class="text-left font-w">From</td>
                            <td class="text-left">Subject</td>
                            <td class="text-right">Item Ends</td>
                            <td class="text-right">Received</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >REJEE
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >New sign in activity on your REJEE account
                              </router-link>
                            </td>
                            <td class="text-right">--</td>
                            <td class="text-right">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Jun 21</router-link
                              >
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table
                        class="std table table-fixed font-weight-bold text-xs"
                      >
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Simple serve
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >New Order
                              </router-link>
                            </td>
                            <td class="text-right">--</td>
                            <td class="text-right">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Jun 21</router-link
                              >
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-trash"
                  role="tabpanel"
                  aria-labelledby="v-pills-trash-tab"
                >
                  <div class="row">
                    <span class="text text-dark h6 p-3 font-weight-bold">
                      Trash
                    </span>

                  <span class="justify-content-end p-3">
                    <form
                      method="post"
                      class="justify-content-end"
                      id="customer-form"
                    >
                      <div
                        class="
                          input-group
                          col-xs-12 col-sm-12 col-md-7 col-lg-6
                        "
                      >
                        <input
                          type="text"
                          id="name"
                          name="name"
                          placeholder="Search Trash: All messages"
                          class="form-control border-r-none border"
                          value=""
                        />
                        <button
                          class="btn border border-l-none"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i class="fa fa-search fa-1x font-weight-bold"></i>
                        </button>
                        <button
                          class="btn"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i
                            class="fa fa-angle-down fa-1x font-weight-bold"
                          ></i>
                        </button>
                      </div>
                    </form>
                  </span>
                    <span class="shadow"
                      ><i
                        class="fa text-danger fa-exclamation-circle fa-2x"
                      ></i>
                      You do not have any messages.
                    </span>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-Archive"
                  role="tabpanel"
                  aria-labelledby="v-pills-Archive-tab"
                >
                  <div class="row">
                    <span class="text text-dark h6 p-3 font-weight-bold">
                      Archive
                    </span>

                  <span class="justify-content-end p-3">
                    <form
                      method="post"
                      class="justify-content-end"
                      id="customer-form"
                    >
                      <div
                        class="
                          input-group
                          col-xs-12 col-sm-12 col-md-7 col-lg-6
                        "
                      >
                        <input
                          type="text"
                          id="name"
                          name="name"
                          placeholder="Search Archive: All messages"
                          class="form-control border-r-none border"
                          value=""
                        />
                        <button
                          class="btn border border-l-none"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i class="fa fa-search fa-1x font-weight-bold"></i>
                        </button>
                        <button
                          class="btn"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i
                            class="fa fa-angle-down fa-1x font-weight-bold"
                          ></i>
                        </button>
                      </div>
                    </form>
                  </span>
                    <span class="shadow"
                      ><i
                        class="fa text-danger fa-exclamation-circle fa-2x"
                      ></i>
                      You do not have any messages..
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
              <div class="d-flex align-items-start p-5"></div>
      <!-- end col-md-9-1 -->
    </div>

    <hr />
  </div>
</template>
        