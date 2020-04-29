@extends('layouts.admin')
  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 mt-4">
          <div class="card">
              <div class="card-body">
                  <h4 class="header-title">Listado de Usuarios</h4>
                  <div class="single-table">
                      <div class="table-responsive">
                          <table id="DataTable" class="table text-center">
                              <thead class="text-uppercase bg-dark">
                                  <tr class="text-white">
                                      <th>Nombre</th>
                                      <th>Apellido</th>
                                      <th>Correo</th>
                                      <th>Opciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                              @foreach($users as $user)
                              <tr>
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->lastname }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td class="text-center">
                                    <a href="{{ url('edit_user', encrypt($user->id)) }}"><i class="menu-icon fa fa-edit" title="Editar"></i></a>
                                    <a href="{{ url('user_delete', encrypt($user->id)) }}"><i class="menu-icon fa fa-dash" title="Eliminar"></i></a>
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
