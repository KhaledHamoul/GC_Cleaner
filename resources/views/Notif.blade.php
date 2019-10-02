@include('header')


<body class="nav-md">
	 <div class="container body">
      <div class="main_container">
			<!-- side menu -->
				@include('side_menu')
			<!-- /side menu -->


 		<div class="right_col" role="main">
		     <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Notifications</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">

                     

                      

                      @foreach ( session('notifications') as $notif)

                        <!-- end of user messages -->
                        <ul class="messages">
                          <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h3 class="date text-info">24</h3>
                              <p class="month">May</p>
                            </div>
                            <div class="message_wrapper">
                              @if( $notif->type == 0)
                              <h4 class="heading">alert de type 1 !</h4>
                              @else
                               <h4 class="heading">alert de type 2 !</h4>
                               @endif
                              <blockquote class="message">Niveau : {{$notif->niveau}}</blockquote>
                               <blockquote class="message">Poubelle : {{$notif->id_poubelle}}</blockquote>
                              <br />
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="#">{{$notif->created_at}}</a>
                              </p>
                            </div>
                          </li>

                        @endforeach
  
                        <!-- end of user messages -->


                      </div>


                    </div>

                
                  </div>
                </div>
              </div>
            </div>
</div>
           




@include('footer')