<header class="main-header">
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top w-100">
          <!-- Sidebar toggle button-->
          <a href="{{url('/dashboard')}}" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->

          <!-- Logo -->
          <a href="{{url('/')}}" class="logo">
            <span class="logo-lg"><img src="{{asset('front/img/logo.png')}}" class="img-fluid" alt="Logo"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              @if(Auth::user()->is_admin == 2)
              <li>
                <a href="{{route('subscription')}}" class="invite-user">See Plans & Pricing</a>
              </li>
              @endif
              <li class="user user-menu">
                <a href="#" class="" data-toggle="dropdown">
                  <!-- <span class="hidden-xs btn btn-warning">Ravinsan Kumar</span> -->
                  <!-- <i class="fa fa-user-circle-o"></i> -->
                  <div class="log_prof">
                    <img src="{{asset('admin/img/log-user.png')}}" class="img-fluid" alt="log user" />
                    <div class="acive_color"></div>
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('admin/img/avatar.svg')}}" alt="avatar" />
                    <h4>{{ !empty(Auth::user()->name) ? Auth::user()->name : '' }}</h4>
                    <p>{{ !empty(Auth::user()->email) ? Auth::user()->email : '' }}</p>
                  </li>

                  <li class="user-footer">
                    <div class="user_cdetails">
                     <a href="{{ route('profile.index') }}">   
                      <div class="user_lic">
                        <div class="p-2">
                          <i class="fa fa-user-circle" aria-hidden="true"></i>
                          My Profile
                        </div>
                      </div>
                     </a> 
                     
                      <div class="user_lic">
                        <div class="p-2">
                        <a class="text-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">

                                   <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out

                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                    @csrf

                                </form>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>