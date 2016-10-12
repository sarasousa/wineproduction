{include file="header.tpl"}

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_qGDMDlFKRORk8k7I4RoALcZGuJaHdX8" type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng( 41.1680, -8.6080),
        zoom: 13,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      downloadUrl("../php/map_action.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        var google_markers = [];
        var avg_lat = 0;
        var avg_lng = 0;
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");

      
          var id = markers[i].getAttribute("pid");

          var farm = markers[i].getAttribute("farm");

          avg_lat += parseFloat(markers[i].getAttribute("lat"));
          avg_lng += parseFloat(markers[i].getAttribute("lng"));

          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));


         var html = "<b>" + 'Pandlet ' + id + "</b> <br/>" + "<br/>" + "<b>" + 'Farm ' + farm + "</b> <br/>" + "<br/>" +"<input type='button' value='View Data' onclick='gotodata("+id+", "+farm+")'>";


          var icon = 'http://labs.google.com/ridefinder/images/mm_20_red.png';
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon

          });

          google_markers[i] = marker;



          bindInfoWindow(marker, map, infoWindow, html);

         // map.setCenter(new google.maps.LatLng(avg_lat,avg_lng));

        }

        //map.setCenter(new google.maps.LatLng(avg_lat/markers.length,avg_lng/markers.length));

        var bounds = new google.maps.LatLngBounds();
        for(i=0;i<google_markers.length;i++) {
         bounds.extend(google_markers[i].getPosition());
        }

        map.fitBounds(bounds);

      });


    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);

        //alert(id);

      });
    }


       function gotodata(id, farm) {

             window.location.href="../php/data-pandlet-simple.php?pandlet="+id+"&farm="+farm;
        }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

  </script>

 <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-left" href="#">Map</a>
                </div>
               <div class="collapse navbar-collapse"> 
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../php/logout_action.php">
                                Log out
                            </a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
                     
                     
        <div class="content">

              <h4 class="choice">Choose a Pandlet</h4>
           
                <div id="map" style="width: 1200px; height: 530px"></div>     
                <script type="text/javascript">
                   load();
                </script>                
 
        </div>


{include file="footer.tpl"}
