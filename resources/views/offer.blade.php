@extends('layouts.admin')
  @section('content')
  <div class="container">
    <div class="row">
    <form class="container" action="{{ url('register_offer') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Titulo</label>
            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title">
            @if ($errors->has('title'))
                <div class="text-danger">
                    <strong>{{ $errors->first('title') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Cuerpo</label>
            <textarea name="body" id="body" rows="4" placeholder="" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}">{{ old('body') }}</textarea>
            @if ($errors->has('body'))
                <div class="text-danger">
                    <strong>{{ $errors->first('body') }}</strong>
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
        <button class="btn btn-primary d-flex justify-content-center" type="submit">Agregar</button>
        </form>
      </div>

    </div>
  </div>

  @endsection
