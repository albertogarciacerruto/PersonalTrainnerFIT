@extends('layouts.admin')
  @section('content')
  <div class="container">
    <div class="container d-flex justify-content-left">
        <a href="{{url('register_offer')}}"><button class="btn btn-primary d-flex justify-content-center" type="submit">Nuevo</button></a>
    </div>
    <div class="row">
      <div class="col-12 mt-4">
          <div class="card">
              <div class="card-body">
                  <h4 class="header-title">Listado</h4>
                  <div class="single-table">
                      <div class="table-responsive">
                          <table id="DataTable" class="table text-center">
                              <thead class="text-uppercase bg-dark">
                                  <tr class="text-white">
                                      <th>Titulo</th>
                                      <th>Opciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                              @foreach($offers as $offer)
                              <tr>
                                  <td>{{ $offer->title }}</td>
                                  <td class="text-center">
                                      <a href="{{ url('offer_delete', encrypt($offer->id)) }}"><i class="menu-icon fa fa-trash" title="Eliminar"></i></a>
                                  </td>
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

  @endsection
