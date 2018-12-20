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
      .loader-opacidad{
        background-color: black;
        height: 100%;
        width: 100%;
        position: absolute;
        z-index: 999;
        top: 0px;
        opacity: 0.7;
      }
      .loader-block{
        display: block;
      }

      .loader-none{
        display: none;
      }

      .loading{
        width:160px;
        height:160px;
        border-radius:150px;
        border:15px solid #fff;
        border-top-color:rgba(0,0,0,0.3);
        box-sizing:border-box;
        position:absolute;
        top:50%;left:50%;
        margin-top:-80px;
        margin-left:-80px;
        animation:loading 1.2s linear infinite;
        -webkit-animation:loading 1.2s linear infinite;
        z-index: 9999;
      }
      @keyframes loading{
        0%{transform:rotate(0deg)}
        100%{transform:rotate(360deg)}
      }
      @-webkit-keyframes loading{
        0%{-webkit-transform:rotate(0deg)}
        100%{-webkit-transform:rotate(360deg)}
      }
    </style>



        <div class="loader-opacidad loader-none"></div>
        <div class="loading adsf loader-none"></div>


        <!-- page content -->
        <div id="contenedor"></div>
        <div class="right_col section-mapa" role="main">
          <div id="map" class="map"></div>
        </div>

        <button type="button" class="btn btn-primary instalacion-info" id="instalacion-info" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

        <script type="text/javascript">


(function(){

  function Marcador(lon, lat, id) {
    var vectorSource = new ol.source.Vector({
      //create empty vector
    });

      //create a bunch of icons and add to source vector
        
        var iconFeature = new ol.Feature({
          geometry: new  
          ol.geom.Point([lon, lat]),
          name: id,
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
        cursor: "pointer",
        opacity: 0.75,
        src: 'images/marcador.png',
        id: "1"
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
      layers: [new ol.layer.Tile({ source: new ol.source.OSM() }), @foreach ($Instalacioness as $Instalacion) Marcador({{ $Instalacion->longitud }}, {{ $Instalacion->latitud }}, {{ $Instalacion->id }}), @endforeach ],
      target: document.getElementById('map'),
      view: new ol.View({
      center: [-71.097899, -34.766003],
      zoom: 7,
      projection: 'EPSG:4326'
      })
    });

    map.on("pointermove", function (evt) {
        var hit = map.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
            return true;
        }); 
        if (hit) {
            map.getTarget().style.cursor = 'pointer';
        } else {
            map.getTarget().style.cursor = '';
        }
    });

      map.on("click", function(e) {
          map.forEachFeatureAtPixel(e.pixel, function (feature, layer) {



              $(".loader-opacidad").addClass("loader-block");
              $(".loader-opacidad").removeClass("loader-none");

              $(".loading").addClass("loader-block");
              $(".loading").removeClass("loader-none");

              var id    = feature.values_.name;
              var url   = "<?php echo Request::root() ?>/ConsultaInicialModal-inter";
              var datos = $('#consulta-form').serialize();
              
              $("#contenedor").load(url, {id_instalacion: id, status: "0"});
          })
      });

})();


        function Graficar(status, id) {
           var url   = "<?php echo Request::root() ?>/ConsultaInicialModal-inter";

              $(".loader-opacidad").addClass("loader-block");
              $(".loader-opacidad").removeClass("loader-none");

              $(".loading").addClass("loader-block");
              $(".loading").removeClass("loader-none");

              $("#close").click();

              if (status!=3) {
                $("#contenedor").load(url, {id_instalacion: id, status: status})
              } else{

                var fecha1 = document.getElementById('myDatepicker').value;
                var fecha2 = document.getElementById('myDatepicker2').value;

                $("#contenedor").load(url, {id_instalacion: id,fecha_inicio: fecha1, fecha_fin: fecha2, status: status})

              }

        }


    </script>



    <script src="js/main.js">></script>

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
