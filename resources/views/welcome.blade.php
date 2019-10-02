@include('header')



   <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
      
 <!-- side menu -->
    @include('side_menu')
 <!-- /side menu -->

 <!-- page content -->
 




        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>Nombre poubelles</span>
              <div class="count">{{count(session('poubelles'))}}</div>
              <span class="count_bottom"><i class="green">4%</i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Etats des poubelles <small>nom pidiatrie</small></h3>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
               <!---   <div id="chart_plot_01" class="demo-placeholder"></div> 

               <img src="images/cropper.jpg" style="width:80%;"></img>   -->
                
                <div id="map" style="width:90%;height:400px;border:solid 1px red"></div>

               
    
               
                </div>



             <div class="sidebar-widget">
                        <h4>Profile Completion</h4>
                        <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text" class="gauge-value pull-left">0</span>
                          <span class="gauge-value pull-left">%</span>
                          <span id="goal-text" class="goal-value pull-right">100%</span>
                        </div>
                    </div>
                    <br><br><br>
                  <div  id="poubelleId" style="font-size:90px"></div>  
                     <div id="level" style="font-size:90px">0</div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

        

       
        </div>
 <!-- /page content -->



 <script>
      var map;
      var pos;
      var poubelles = [];
      var idPoubelleCourante = 2 ;
      var levelDiv = document.getElementById('level');
      var poubelleId = document.getElementById('poubelleId')

      @foreach( session('poubelles') as $p )
                // get lat and lng of trashes from database
                pos = { id: {{$p->id}} , lat: {{$p->lat}} , lng : {{$p->lng}} , niveau : {{$p->niveau}} };
                poubelles.push(pos);
                /*var mark = new google.maps.Marker({
                  position: pos ,
                  map: map
                });  */
           
      @endforeach  
      
        function initMap() {
        
        map = new google.maps.Map(document.getElementById('map'), {
          center: { lat: poubelles[0].lat , lng: poubelles[0].lng },
          zoom: 12
        });
       
        
      

      var markers = poubelles.map(function(info, i) {
       
          return new google.maps.Marker({
            id: info.id ,
            position: {lat:info.lat , lng: info.lng },
            niveau: info.niveau
            
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      

      for (var i=0 ; i < markers.length ; i++){
        markers[i].addListener('click', function() {
                idPoubelleCourante = this.id ;
                poubelleId.innerHTML = idPoubelleCourante ;
                
              });
      }

      }

      // making a realtime checking for the trash level
     function trashLevelAjax(){
       setTimeout(function(){ 
                    lien = "{{asset('')}}" + "getNiveauPoubelle/" + idPoubelleCourante ;
                    $.get( lien ,
                            
                            function(data, status){
                                  levelDiv.innerHTML = JSON.parse(data).niveau ;
                });
                trashLevelAjax();

            },600) ;
        
      }


      trashLevelAjax();

     
    
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtVIdhW9GINJHghEXjwtulioQeALlGAtA&callback=initMap"
    async defer></script>


    







@include('footer')
