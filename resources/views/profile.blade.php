@include('header')

<body class="nav-md">
    <div class="container body">
      <div class="main_container">


          <!-- side menu -->
    @include('side_menu')
 <!-- /side menu -->

 <div class="right_col" role="main">

<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profile</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                     


                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        
                       <div class="col-md-12">
                        <h3>{{ Auth::user()->raison_sociale}}</h3>

                      <ul class="list-unstyled user_data">
                        
                        <li class="m-top-xs">
                          <i class="fa fa-user"></i>
                          {{ Auth::user()->name}}
                        </li>
                        <li class="m-top-xs">
                          <i class="fa fa-at"></i>
                          {{ Auth::user()->email}}
                        </li>
                        <li class="m-top-xs">
                          <i class="fa fa-globe"></i>
                          <a href="">{{ Auth::user()->site_web}}</a>
                        </li>
                        <li class="m-top-xs">
                          <i class="fa fa-phone"></i>
                          {{ Auth::user()->tel}}
                        </li>
                        <li class="m-top-xs">
                          <i class="fa fa-map-marker user-profile-icon"></i> 
                          ESI, OUED SMAR, ALGERIE
                        </li>
                        <li class="m-top-xs">
                          <i class="fa fa-check"></i>
                          {{ Auth::user()->created_at}}
                        </li>
                        <li class="m-top-xs">
                          <i class="fa fa-cog"></i>
                          {{ Auth::user()->updated_at}}
                        </li>
                      </ul>

                      
                      <br />
                    </div>
            

                      </div>
                      <br />
                       <a class="btn btn-success" href="{{ route('paramaitre')}}"><i class="fa fa-edit m-right-xs"></i>Modifier</a>
                     
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

            
@include('footer')