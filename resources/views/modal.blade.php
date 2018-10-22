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
</style>
              

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-custom">
    <div class="modal-content">
        <div class="row custom-header">
          <div class="col-md-2">
            <h4>Difusor y Fosa 5</h4>
          </div>
          <div class="col-md-4">
            <h4>Ultima medicion: 18 Octubre 5:12pm </h4>
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
              <p>Datos en rango de fecha</p>
              <div class="table-responsive">
                 <table class="table table-striped jambo_table bulk_action">
                   <thead>
                     <tr class="headings">
                       <th class="column-title">Fecha/Hora</th>
                       <th class="column-title">PH</th>
                       <th class="bulk-actions" colspan="7">
                         <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                       </th>
                     </tr>
                   </thead>
                   <tbody>
                     @for ($i = 0; $i < 4; $i++)
                       <tr class="even pointer">
                       <td class=" ">20 Agosto 2018 9:00 pm</td>
                       <td class=" ">4682</td>
                     </tr>
                     @endfor
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
                    <td>Ultimo PH</td>
                    <td>400</td>
                  </tr>
                  <tr>
                    <td>Max PH</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <td>Min PH</td>
                    <td>200</td>
                  </tr>
              </table>
            </div>
          </div>
          <div class="col-md-3">
            <div class="x_content">
              <p>Datos en rango de fecha</p>
              <div class="table-responsive">
                 <table class="table table-striped jambo_table bulk_action">
                   <thead>
                     <tr class="headings">
                       <th class="column-title">Fecha/Hora</th>
                       <th class="column-title">PH</th>
                       <th class="bulk-actions" colspan="7">
                         <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                       </th>
                     </tr>
                   </thead>
                   <tbody>
                     @for ($i = 0; $i < 4; $i++)
                       <tr class="even pointer">
                       <td class=" ">20 Agosto 2018 9:00 pm</td>
                       <td class=" ">8572</td>
                     </tr>
                     @endfor
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
                    <td>Ultimo PH</td>
                    <td>400</td>
                  </tr>
                  <tr>
                    <td>Max PH</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <td>Min PH</td>
                    <td>200</td>
                  </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6"><canvas id="myChart" width="100%" height="30%"></canvas></div>
          <div class="col-md-6"><canvas id="myChart2" width="100%" height="30%"></canvas></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>