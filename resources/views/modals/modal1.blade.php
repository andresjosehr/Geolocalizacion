<style type="text/css">
  .modal .modal-custom{
        margin: 2% 16%;
        width: 82%;
  }
  .custom-header{
    margin-bottom: -20px;
    padding: 4px 10px 0px 12px;
  }
  .custom-date{
        height: 25px;
  }
  .custom-addon{
    padding: 3px 9px;
  }
  .col-md-6 .custom-inputgroup{
    margin-top: 7px;
    margin-bottom: 10px;
  }
  .btn-date{
    height: 25px;
    margin-top: 7px;
    padding-top: 2px;
  }

.beaker {
  position: absolute;
  height: 100px;
  width: 248px;
  background: #ddd;
  border-bottom-left-radius: 10%;
  border-bottom-right-radius: 10%;
  border-top-left-radius: 3%;
  border-top-right-radius: 3%;
  z-index: 101;
}
.beaker:before {
  content: "";
  position: absolute;
  background: #ccc;
  height: 100px;
  width: 246px;
  border-bottom-left-radius: 10%;
  border-bottom-right-radius: 10%;
  border-top-left-radius: 3%;
  border-top-right-radius: 3%;
}

.lip {
  position: absolute;
  width: 330px;
  height: 40px;
  background: #ddd;
  right: -15px;
  border-radius: 25%;
  top: -20px;
}
.lip:after {
  content: "";
  position: absolute;
  background: #ccc;
  width: 290px;
  height: 40px;
  border-radius: 25%;
  border-top-right-radius: 10%;
  border-bottom-right-radius: 0%;
}

.greengoo {
  position: absolute;
  width: 95%;
  left: 7px;
  height: 80px;
  opacity: 0.6;
  background: #a5abff;
  border-radius: 10%;
  bottom: 12px;
  animation: change 15s ease infinite;
  filter: url("#goo");
}

#one {
  position: absolute;
  height: 12px;
  width: 12px;
  border-radius: 100%;
  background: white;
  z-index: 200;
  box-shadow: 0px 0px 17px 12px #a5abff;
  transform: translate(70px, 0px);
  background: white;
  animation: float 1.3s ease-in infinite;
  box-shadow: 0 0 10px 4px #a5abff;
  opacity: 0;
}
@keyframes float {
  95% {
    transform: translate(80px, -40px);
    opacity: 1;
  }
  100% {
    transform: translate(80px, -40px);
  }
}
#two {
  position: absolute;
  height: 12px;
  width: 12px;
  border-radius: 100%;
  background: white;
  z-index: 200;
  box-shadow: 0px 0px 17px 12px #a5abff;
  transform: translate(40px, 10px);
  animation: float2 1.5s ease-in infinite;
  animation-delay: 0.8s;
  background: white;
  box-shadow: 0 0 10px 8px #a5abff;
  opacity: 0;
}
@keyframes float2 {
  95% {
    transform: translate(45px, -25px);
    opacity: 1;
  }
  100% {
    transform: translate(45px, -25px);
  }
}
#three {
  position: absolute;
  height: 12px;
  width: 12px;
  border-radius: 100%;
  background: white;
  z-index: 200;
  box-shadow: 0px 0px 17px 12px #a5abff;
  background: white;
  transform: translate(250px,20px);
  box-shadow: 0 0 10px 10px #a5abff;
  animation: float3 1.1s ease-in infinite;
  animation-delay: 0.2s;
  opacity: 0;
}
@keyframes float3 {
  95% {
    transform: translate(236px, -27px);
    opacity: 1;
  }
  100% {
    transform: translate(236px, -27px);
  }
}
#four {
  position: absolute;
  height: 12px;
  width: 12px;
  border-radius: 100%;
  background: white;
  z-index: 200;
  box-shadow: 0px 0px 17px 12px #a5abff;
  background: white;
  transform: translate(155px, 5px);
  box-shadow: 0 0 6px 10px #a5abff;
  opacity: 0;
  animation: float4 1.2s ease-in infinite;
}
@keyframes float4 {
  95% {
    transform: translate(180px, -30px);
    opacity: 1;
  }
  100% {
    transform: translate(180px, -30px);
  }
}
#five {
  position: absolute;
  height: 12px;
  width: 12px;
  border-radius: 100%;
  background: white;
  z-index: 200;
  box-shadow: 0px 0px 17px 12px #a5abff;
  background: white;
  transform: translate(90px, 15px);
  opacity: 0;
  animation: float5 1.3s ease-in infinite;
  animation-delay: 0.7s;
}
@keyframes float5 {
  95% {
    transform: translate(55px, -45px);
    opacity: 1;
  }
  100% {
    transform: translate(55px, -41px);
  }
}
#six {
  position: absolute;
  height: 12px;
  width: 12px;
  border-radius: 100%;
  background: white;
  z-index: 200;
  box-shadow: 0px 0px 17px 12px #a5abff;
  transform: translate(180px, 30px);
  opacity: 0;
  animation: float6 1.2s ease-in infinite;
  animation-delay: 0.3s;
}
@keyframes float6 {
  95% {
    opacity: 1;
    transform: translate(175px, -24px);
  }
  100% {
    transform: translate(175px, -24px);
  }
}
.smallball {
  position: absolute;
  height: 24px;
  width: 24px;
  border-radius: 100%;
  top: 24px;
  left: 24px;
  z-index: 0;
  background: rgba(237, 69, 0, 0.1);
  box-shadow: 0 0 14px 10px rgba(237, 67, 55, 0.1);
  z-index: 0;
}

.move1 {
  animation: move 0.4s ease infinite forwards;
  animation-delay: 0.2s;
}
@keyframes move {
  100% {
    transform: translate(35px, -40px);
  }
}
.move2 {
  animation: move2 0.7s ease infinite forwards;
}
@keyframes move2 {
  100% {
    transform: translate(35px, -40px);
  }
}
.move3 {
  animation: move3 0.6s ease infinite forwards;
  animation-delay: 0.5s;
}
@keyframes move3 {
  100% {
    transform: translate(35px, -40px);
  }
}
.move4 {
  animation: move4 0.7s ease infinite forwards;
}
@keyframes move4 {
  100% {
    transform: translate(35px, -40px);
  }
}
.move5 {
  animation: move5 0.6s ease infinite forwards;
  animation-delay: 0.4s;
}
@keyframes move5 {
  100% {
    transform: translate(35px, -40px);
  }
}
.move6 {
  animation: move6 0.7s ease infinite forwards;
}
@keyframes move6 {
  100% {
    transform: translate(-40px, 10px);
  }
}
.move7 {
  animation: move7 0.8s ease infinite forwards;
}
@keyframes move7 {
  100% {
    transform: translate(40px, -20px);
  }
}
.move8 {
  animation: move8 0.8s ease infinite forwards;
}
@keyframes move8 {
  100% {
    transform: translate(0, 30px);
  }
}
.greenball {
  position: absolute;
  height: 24px;
  width: 24px;
  border-radius: 100%;
  top: 24px;
  left: 24px;
  z-index: 0;
  background: rgba(242, 165, 0, 0.4);
  box-shadow: 0 0 20px 10px rgba(242, 165, 0, 0.4);
}

.move9 {
  height: 5px;
  width: 5px;
  animation: move9 0.8s ease infinite forwards;
}
@keyframes move9 {
  100% {
    transform: translate(-67px, -44px);
  }
}
.move10 {
  animation: move10 0.6s ease infinite forwards;
  animation-delay: 0.4s;
}
@keyframes move10 {
  100% {
    transform: translate(43px, 2px);
  }
}
.move11 {
  height: 4px;
  width: 4px;
  animation: move11 0.8s ease infinite forwards;
  animation-delay: 0.6s;
}
@keyframes move11 {
  100% {
    transform: translate(43px, -30px);
  }
}
.move12 {
  height: 5px;
  width: 5px;
  animation: move12 0.7s ease infinite forwards;
  animation-delay: 0.2s;
}
@keyframes move12 {
  100% {
    transform: translate(-10px, -45px);
  }
}
.move13 {
  height: 26px;
  width: 26px;
  animation: move13 2s ease infinite forwards;
  animation-delay: 0.1s;
}
@keyframes move13 {
  100% {
    transform: translate(-67px, -44px);
  }
}
.move14 {
  animation: move14 0.8s ease infinite forwards;
}
@keyframes move14 {
  100% {
    transform: translate(-67px, -44px);
  }
}
.move15 {
  animation: move15 0.8s ease infinite forwards;
  animation-delay: 0.5s;
}
@keyframes move15 {
  100% {
    transform: translate(-67px, -44px);
  }
}
.move16 {
  animation: move16 1s ease infinite forwards;
  animation-delay: 0.5s;
}
@keyframes move16 {
  100% {
    transform: translate(-67px, -44px);
  }
}
.blueball {
  position: absolute;
  height: 24px;
  width: 24px;
  border-radius: 100%;
  top: 24px;
  left: 24px;
  z-index: 0;
  background: rgba(247, 215, 8, 0.7);
  box-shadow: 0 0 14px 6px rgba(247, 215, 8, 0.8);
}

.move17 {
  animation: move16 1s ease infinite forwards;
  animation-delay: 0.1s;
}
@keyframes move16 {
  100% {
    transform: translate(-67px, -44px);
  }
}
.move18 {
  animation: move18 1s ease infinite forwards;
  animation-delay: 0.7s;
}
@keyframes move18 {
  100% {
    transform: translate(-47px, -49px);
  }
}
.move19 {
  animation: move19 1s ease infinite forwards;
}
@keyframes move19 {
  100% {
    transform: translate(-57px, -44px);
  }
}
.move20 {
  animation: move20 1s ease infinite forwards;
  animation-delay: 0;
}
@keyframes move20 {
  100% {
    transform: translate(7px, -40px);
  }
}
.move21 {
  animation: move21 1s ease infinite forwards;
  animation-delay: 0;
}
@keyframes move21 {
  100% {
    transform: translate(-67px, -44px);
  }
}
.move22 {
  animation: move22 1s ease infinite forwards;
  animation-delay: 0;
}
@keyframes move22 {
  100% {
    transform: translate(-47px, -44px);
  }
}
.move23 {
  animation: move23 1s ease infinite forwards;
  animation-delay: 0;
}
@keyframes move23 {
  100% {
    transform: translate(-27px, -44px);
  }
}
.yellowball {
  position: absolute;
  height: 24px;
  width: 24px;
  border-radius: 100%;
  top: 24px;
  left: 24px;
  z-index: 0;
  background: rgba(247, 215, 8, 0.7);
  box-shadow: 0 0 14px 6px rgba(247, 215, 8, 0.8);
}

.move24 {
  animation: move24 1s ease infinite forwards;
  animation-delay: 0.4s;
}
@keyframes move24 {
  100% {
    transform: translate(67px, -44px);
  }
}
.move25 {
  animation: move25 1s ease infinite forwards;
  animation-delay: 0.1s;
}
@keyframes move25 {
  100% {
    transform: translate(67px, -44px);
  }
}
.move26 {
  animation: move26 0.8s ease infinite forwards;
  animation-delay: 0.2s;
}
@keyframes move26 {
  100% {
    transform: translate(11px, -42px);
  }
}
.move27 {
  animation: move27 0.8s ease infinite forwards;
  animation-delay: 0.3s;
}
@keyframes move27 {
  100% {
    transform: translate(4px, -42px);
  }
}
.ball {
  filter: url(#goo);
  position: absolute;
  z-index: 100;
  width: 70px;
  height: 70px;
  background: rgba(255, 127, 0, 0.1);
  border-radius: 100%;
  box-shadow: 0 0 20px 10px rgba(255, 69, 0, 0.4);
  top: 340px;
  left: 100px;
}

.smallball {
  position: absolute;
  height: 6px;
  width: 6px;
  border-radius: 100%;
  top: 24px;
  left: 24px;
  background: rgba(237, 69, 0, 0.1);
  box-shadow: 0 0 14px 10px rgba(237, 67, 55, 0.1);
}

</style>
             

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-custom">
    <div class="modal-content">
        <div class="row custom-header">
          <div class="col-md-2">
            <h4>{{ $instalacion_info->nombre }}</h4>
          </div>
          <div class="col-md-4">
            <h4>Ultima medicion: {{ $ultima_medicion->mt_time}} </h4>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5">
                <div class='input-group date custom-inputgroup' id='myDatepicker'>
                  <input type='text' class="form-control custom-date" placeholder="Consultar Desde" />
                  <span class="input-group-addon custom-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="col-md-5">
                <div class='input-group date custom-inputgroup' id='myDatepicker2'>
                  <input type='text' class="form-control custom-date" placeholder="Hasta" />
                  <span class="input-group-addon custom-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="col-md-2">
                <button class="btn btn-primary btn-date btn-round">
                  <i class="fas fa-long-arrow-alt-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <hr>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
            <div class="x_content">
              <p>Flujos</p>
              <div class="table-responsive" style="max-height: 177px;">
                 <table class="table table-striped jambo_table bulk_action">
                   <thead>
                     <tr class="headings">
                       <th class="column-title">Fecha/Hora</th>
                       <th class="column-title">Litros</th>
                       <th class="bulk-actions" colspan="7">
                         <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                       </th>
                     </tr>
                   </thead>
                   <tbody>
                      @foreach ($datos as $datostabla)
                      <tr class="even pointer">
                       <td class=" ">{{ $datostabla->fecha}}</td>
                       <td class=" ">{{ $datostabla->valor}}</td>
                      </tr>
                      @endforeach
                   </tbody>
                 </table>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="x_content">
              <p>Indicadores clave</p>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Flujo promedio</td>
                    <td>400</td>
                  </tr>
                  <tr>
                    <td>Flujo Minimo</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <td>Flujo Maximo</td>
                    <td>200</td>
                  </tr>
              </table>
            </div>
          </div>
          <div class="col-md-3">
            <div class="x_content">
              <p>Flotadores</p>
              <div class="table-responsive" style="max-height: 177px;">
                 <table class="table table-striped jambo_table bulk_action">
                   <thead>
                     <tr class="headings">
                       <th class="column-title">Fecha/Hora</th>
                       <th class="column-title">Nivel</th>
                       <th class="bulk-actions" colspan="7">
                         <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                       </th>
                     </tr>
                   </thead>
                   <tbody>
                      @foreach ($datos as $datostabla)
                      <tr class="even pointer">
                       <td class=" ">{{ $datostabla->fecha}}</td>
                       <td class=" ">{{ $datostabla->valor}}</td>
                      </tr>
                      @endforeach
                   </tbody>
                 </table>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            @if ($instalacion_info->id=="2")
              <div style="padding-top: 30px">
                <button class="btn btn-success btn-block">Bomba 1</button>
              </div>
              <div class="container" style="padding-top: 36px;">
              <div class="beaker">
                <div class="clip"></div>
                <div class="greengoo">

                  <svg height="1500px" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                      <filter id="goo">
                        <fegaussianblur in="SourceGraphic" stddeviation="10" result="blur"></fegaussianblur>
                        <fecolormatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 9 0 0  0 0 0 18 -7" result="goo"></fecolormatrix>
                        <feblend in="SourceGraphic" in2="goo"></feblend>
                      </filter>
                    </defs>
                  </svg>
                </div>

              </div>
            </div>
            @endif
            @if ($instalacion_info->id!="2")
              <div class="x_content">
                <p>Indicadores clave</p>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Flujo promedio</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Flujo Minimo</td>
                      <td>500</td>
                    </tr>
                    <tr>
                      <td>Flujo Maximo</td>
                      <td>200</td>
                    </tr>
                </table>
              </div>
            @endif
          </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="overflow-x: scroll;">
              <div style="width: 6000px; height: 200px;">
                <canvas id="myChart"></canvas>
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="row">
          <div class="col-md-6" align="left">
            <button type="button" onclick="Graficar(0, 0, 0, '{{ $instalacion_info->id }}')" class="btn btn-default btn-primary">Dia</button>
            <button type="button" onclick="Graficar(1, 0, 0, '{{ $instalacion_info->id }}')" class="btn btn-default btn-primary">Semana</button>
            <button type="button" onclick="Graficar(2, 0, 0, '{{ $instalacion_info->id }}')" class="btn btn-default btn-primary">Mes</button>
          </div>
          <div class="col-md-6" align="right">
            <button id="close" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(".instalacion-info").click();

  var ctx = document.getElementById("myChart");
  ctx.height = 500;
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [@foreach ($datos as $DatosXF) "{{ $DatosXF->fecha }}", @endforeach],
        datasets: [{
            label: 'Litros por minuto',
            data: [@foreach ($datos as $DatosXV) {{ $DatosXV->valor }}, @endforeach],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderWidth: 1
        }]
    },
    options: {
      maintainAspectRatio: false,
      // title: {
      //       display: true,
      //       text: 'Litros',
      //       position: "left"
      //   },
      elements: { 
        point: { 
          radius: .5 
        } 
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

        $(".loader-opacidad").addClass("loader-none");
        $(".loader-opacidad").removeClass("loader-block");

        $(".loading").addClass("loader-none");
        $(".loading").removeClass("loader-block");

</script>
