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
      .right_col{
        margin-top: -19px !important;
      }
    </style>




        <!-- page content -->
        <div class="right_col section-mapa" role="main">
           <div id="map" class="map"></div>
        </div>

        <button type="button" class="btn btn-primary instalacion-info" id="instalacion-info" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
    <script type="text/javascript">


(function(){

  function Marcador(lon, lat) {
    var vectorSource = new ol.source.Vector({
      //create empty vector
    });

      //create a bunch of icons and add to source vector
 
        var iconFeature = new ol.Feature({
          geometry: new  
          ol.geom.Point([lon, lat]),
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
        src: 'images/marcador.png'
      }))
    });

      //add the feature vector to the layer vector, and apply a style to whole layer
      var vectorLayer = new ol.layer.Vector({
        source: vectorSource,
        style: iconStyle
      });

      return vectorLayer

    }

    

    var map = new ol.Map({
      layers: [new ol.layer.Tile({ source: new ol.source.OSM() }), @foreach ($Instalacioness as $Instalacion) Marcador({{ $Instalacion->longitud }}, {{ $Instalacion->latitud }}), @endforeach ],
      target: document.getElementById('map'),
      view: new ol.View({
      center: [-72.069960, -37.157991],
      zoom: 7,
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

    <script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
      title: {
            display: true,
            text: 'PH2',
            position: "left"
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
var ctx = document.getElementById("myChart2");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
      title: {
            display: true,
            text: 'PH 2',
            position: "left"
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

    <!-- bootstrap-daterangepicker -->
    <script src="moment/min/moment.min.js"></script>

    <!-- jQuery -->
    <script src="jquery/dist/jquery.min.js"></script>

    <!-- bootstrap-datetimepicker -->    
    <script src="bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="cropper/dist/cropper.min.js"></script>

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
    
    <script src="bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
    

          <script>
            $('#myDatepicker').datetimepicker();  
            $('#myDatepicker2').datetimepicker();  
        </script>

  </body>
</html>
