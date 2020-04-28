@extends('layouts.admin')
  @section('content')
  <div class="container">
    <div class="row">
    <form class="container" action="{{ url('update_contact') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
          <input id="id" type="hidden" name="id" value="{{ $contact->id }}" readonly="readonly">
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Titulo</label>
            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $contact->title }}">
            @if ($errors->has('title'))
                <div class="text-danger">
                    <strong>{{ $errors->first('title') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Sub-Titulo</label>
            <input id="subtitle" type="text" class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }}" name="subtitle" value="{{ $contact->subtitle }}">
            @if ($errors->has('subtitle'))
                <div class="text-danger">
                    <strong>{{ $errors->first('subtitle') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Direccion</label>
            <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $contact->address }}">
            @if ($errors->has('address'))
                <div class="text-danger">
                    <strong>{{ $errors->first('address') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Telefono</label>
            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $contact->phone }}">
            @if ($errors->has('phone'))
                <div class="text-danger">
                    <strong>{{ $errors->first('phone') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Correo</label>
            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $contact->email }}">
            @if ($errors->has('email'))
                <div class="text-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Imagen</label>
            <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" accept="image/*">
            @if ($errors->has('image'))
                <div class="text-danger">
                    <strong>{{ $errors->first('image') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="container d-flex justify-content-center">
        <button class="btn btn-primary d-flex justify-content-center" type="submit">Subir Contenido</button>
        </form>
      </div>

    </div>
  </div>

  @endsection
