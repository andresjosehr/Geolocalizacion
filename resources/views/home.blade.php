{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}


             

            @include("header");
            @include("modal");

    <style>
      .map {
        height: 120%;
        width: 100%;
      }
      body .section-mapa{
        padding: 0px !important;
        min-height: 100% !important;
        max-height: 100% !important;
      }
    </style>




        <!-- page content -->
        <div class="right_col section-mapa" role="main">
           <div id="map" class="map"></div>
        </div>

        <button type="button" class="btn btn-primary instalacion-info" id="instalacion-info" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
    <script type="text/javascript">


(function(){
    var vectorSource = new ol.source.Vector({
      //create empty vector
    });
    
    //create a bunch of icons and add to source vector
 
        var iconFeature = new ol.Feature({
          geometry: new  
          ol.geom.Point([-72.069960, -37.157991]),
          name: 'Null Island',
          population: 4000,
          rainfall: 500
          });
          vectorSource.addFeature(iconFeature);


    //create the style
    var iconStyle = new ol.style.Style({
      image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
        anchor: [0.5, 46],
        anchorXUnits: 'fraction',
        anchorYUnits: 'pixels',
        opacity: 0.75,
        src: 'http://openlayers.org/en/v3.9.0/examples/data/icon.png'
      }))
    });



    //add the feature vector to the layer vector, and apply a style to whole layer
    var vectorLayer = new ol.layer.Vector({
      source: vectorSource,
      style: iconStyle
    });

    var map = new ol.Map({
      layers: [new ol.layer.Tile({ source: new ol.source.OSM() }), vectorLayer],
      target: document.getElementById('map'),
      view: new ol.View({
      center: [-72.069960, -37.157991],
      zoom: 16,
      projection: 'EPSG:4326'
      })
    });

          map.on("click", function(e) {
          map.forEachFeatureAtPixel(e.pixel, function (feature, layer) {
              $(".instalacion-info").click();
          })
      });



})();



    </script>

    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="Flot/jquery.flot.js"></script>
    <script src="Flot/jquery.flot.pie.js"></script>
    <script src="Flot/jquery.flot.time.js"></script>
    <script src="Flot/jquery.flot.stack.js"></script>
    <script src="Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="jqvmap/dist/jquery.vmap.js"></script>
    <script src="jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="moment/min/moment.min.js"></script>
    <script src="bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
    
  </body>
</html>
