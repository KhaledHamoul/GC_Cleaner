
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
               <br /> 
              <a href="index.html" class="site_title"><img style="width:20%;" src="{{ asset('images/logo.png')}}" />
              <span>Gc Cleaner</span></a>
            </div>

            <div class="clearfix"></div>
 
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenu</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br /> <br /> <br />

              <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Generale</h3>
                <ul class="nav side-menu">
                   <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i>Tableau de bord</a></li>
                   <li><a><i class="fa fa-user"></i>Mon profile <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{route('profile')}}">Profile</a>
                        <li><a href="{{ route('paramaitre')}}">Paramaitres</a>
                        <li><a onclick="logout()">logout</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="{{route('notifications')}}"><i class="fa fa-envelope-o"></i> Notifications 
                            <span class="label label-success pull-right">{{count(session('notifications'))}}</span></a>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-bar-chart-o"></i> Statistiques</a></li>

                 
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

          

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
               <a style="width:100%" data-toggle="tooltip" data-placement="top" title="logout"  onclick="logout()">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{ Auth::user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{route('profile')}}"> Profile</a></li>
                    <li>
                      <a href="{{route('paramaitre')}}">
                        <span>Settings</span>
                      </a>
                    </li>
                   
                     </li>
                    <li><a onclick="logout()" >logout</a></li>
                   <li>  
                      

                   <li>
              </ul>
                </li>

              
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

       
        <!-- logout form -->
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="dispaly:none;height:0px;">
                                {{ csrf_field() }}
                       <input id="logout_submit" type="submit" value="logout" style="height:0px;" > </input>

                      </form> 

    