@extends('layouts.admin')
  @section('content')
  <div class="container">
    <div class="row">
    <form class="container" action="{{ url('update_about') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
          <input id="id" type="hidden" name="id" value="{{ $about->id }}" readonly="readonly">
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Titulo</label>
            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $about->title }}">
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
            <input id="subtitle" type="text" class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }}" name="subtitle" value="{{ $about->subtitle }}">
            @if ($errors->has('subtitle'))
                <div class="text-danger">
                    <strong>{{ $errors->first('subtitle') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Nombre</label>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $about->name }}">
            @if ($errors->has('name'))
                <div class="text-danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12">
            <label class="col-form-label">Cuerpo</label>
            <textarea name="body" id="body" rows="4" placeholder="" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}">{{ $about->body }}</textarea>
            @if ($errors->has('body'))
                <div class="text-danger">
                    <strong>{{ $errors->first('body') }}</strong>
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
