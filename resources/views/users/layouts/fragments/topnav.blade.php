  <!--  BEGIN NAVBAR  -->
  <div class="header-container fixed-top">
      <header class="header navbar navbar-expand-sm">

          <ul class="navbar-item theme-brand flex-row  text-center">
              <li class="nav-item theme-logo">
                  <a href="/">
                      <img class="ui fluid image" src="{{ $admin_assets }}/assets/img/m-icon.jpg">
                  </a>
              </li>
              <li class="nav-item theme-text">
                  <a href="index.html" class="nav-link"> Media Downloader</a>
              </li>
          </ul>

          <ul class="navbar-item flex-row ml-md-0 ml-auto">
              <li class="nav-item align-self-center search-animated">
                  <svg type="submit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  </svg>
                  <form class="form-inline search-full form-inline search" role="search" action="">
                      <div class="search-bar">
                          <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search..." value="">
                      </div>
                  </form>
              </li>
          </ul>

          <ul class="navbar-item flex-row ml-md-auto">



              <li class="nav-item dropdown user-profile-dropdown">
                  <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img class="img-fluid" src="{{ asset(auth()->user()->avatar) }}" alt="avatar">
                  </a>
                  <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                      <div class="">
                          <div class="dropdown-item">
                              <a class="" href="{{ route('user.profile')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                      <circle cx="12" cy="7" r="4"></circle>
                                  </svg> Profile</a>
                          </div>

                          <div class="dropdown-item">
                              <a class="" href=" apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                      <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                      <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                      </path>
                                  </svg> Inbox</a>
                          </div>



                          <div class="dropdown-item">
                              {{-- <form action="{{ route('logout')}}" method="post"
                              class="">@csrf --}}
                              <form action="{{ route('logout') }}" method="post">@csrf
                                  <button class="dropdown-item text-danger" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                          <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                          <polyline points="16 17 21 12 16 7"></polyline>
                                          <line x1="21" y1="12" x2="9" y2="12"></line>
                                      </svg>Sign-Out</button>
                              </form>

                              </form>

                          </div>

                      </div>
                  </div>
              </li>

          </ul>
      </header>
  </div>
  <!--  END NAVBAR  -->

  <!--  BEGIN NAVBAR  -->
  <div class="sub-header-container">
      <header class="header navbar navbar-expand-sm">
          <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                  <line x1="3" y1="12" x2="21" y2="12"></line>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <line x1="3" y1="18" x2="21" y2="18"></line>
              </svg></a>

          <ul class="navbar-nav flex-row">
              <li>
                  <div class="page-header">


                  </div>
              </li>
          </ul>

      </header>
  </div>
  <!--  END NAVBAR  -->