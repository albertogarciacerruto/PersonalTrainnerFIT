@extends('layouts.admin')
  @section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Dias", "Peso", { role: "style" } ],
                  <?php 
                    $data = \DB::table('data')->select('id', 'date', 'weight')->where('user_id', '=', $user->id)->orderBy('date', 'asc')->take(8)->get()->toArray();
                    foreach ($data as $row){
                      echo "['".$row->date."',".$row->weight.", '#00204a'],";
                    }
                    ?>
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                { calc: "stringify",
                                  sourceColumn: 1,
                                  type: "string",
                                  role: "annotation" },
                                2]);

                var options = {
                  title: "Progreso Personal",
                  width: 600,
                  height: 400,
                  bar: {groupWidth: "35%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                chart.draw(view, options);
              }
            </script>
        <div id="columnchart_values" style="width: 100%; height: 50%;"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 mt-4">
          <div class="card">
              <div class="card-body">
                  <h4 class="header-title">Rutina y Dieta</h4>
                  <div class="single-table">
                      <div class="table-responsive">
                          <table id="DataTable" class="table text-center">
                              <thead class="text-uppercase bg-dark">
                                  <tr class="text-white">
                                      <th>Tipo Archivo</th>
                                      <th>Descargar</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>Rutina</td>
                                  <td class="text-center">
                                      @if($file != null)
                                      <a href="{{ url('upload_file', encrypt($file->id)) }}"><button class="btn btn-primary d-flex justify-content-center" type="submit">Descargar</button></a>
                                      @endif
                                  </td>
                              </tr>
                              <tr>
                                  <td>Dieta</td>
                                  <td class="text-center">
                                      @if($contract != null)
                                      <a href="{{ url('upload_file', encrypt($contract->id)) }}"><button class="btn btn-primary d-flex justify-content-center" type="submit">Descargar</button></a>
                                      @endif
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <div class="col-12">
      <form class="container" action="{{ url('add_data') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <input id="id" type="hidden" name="id" value="{{ $user->id }}" readonly="readonly">
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Altura</label>
            <input id="weight" type="text" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" name="weight">
            @if ($errors->has('weight'))
                <div class="text-danger">
                    <strong>{{ $errors->first('weight') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Peso</label>
            <input id="height" type="text" class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}" name="height">
            @if ($errors->has('height'))
                <div class="text-danger">
                    <strong>{{ $errors->first('height') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Foto</label>
            <input id="photo" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo" accept="image/*">
            @if ($errors->has('photo'))
                <div class="text-danger">
                    <strong>{{ $errors->first('photo') }}</strong>
                </div>
            @endif
        </div>
      </div>
      @if(Auth::user()->role == 'Administrador')
      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Rutina</label>
            <input id="file" type="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" accept="application/pdf">
            @if ($errors->has('file'))
                <div class="text-danger">
                    <strong>{{ $errors->first('file') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Dieta</label>
            <input id="contract" type="file" class="form-control{{ $errors->has('contract') ? ' is-invalid' : '' }}" name="contract" accept="application/pdf">
            @if ($errors->has('contract'))
                <div class="text-danger">
                    <strong>{{ $errors->first('contract') }}</strong>
                </div>
            @endif
        </div>
      </div>
      @endif

      <div class="container d-flex justify-content-center">
        <button class="btn btn-primary d-flex justify-content-center" type="submit">Subir Contenido</button>
        </form>
      </div>

    </div>
  </div>
  
  @endsection
