@extends('layouts.app')

@section('content')
@include('includes.errors')
<div class="panel panel-default">
  <div class="panel-heading"> Editati setarile site-ului </div>
  <div class="panel-body">
    <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Titlu website</label>
        <input class="form-control" name="title" value="{{ $settings->title }}">
      </div>
      <div class="form-group">
        <label for="title">Logo</label>
        <input class="form-control" name="logo" value="{{ $settings->logo }}" type="file">
      </div>
      <div class="form-group">
        <label for="title">Email</label>
        <input class="form-control" name="email" value="{{ $settings->email }}">
      </div>
      <div class="form-group">
        <label for="title">Telefon fix</label>
        <input class="form-control" name="phone" value="{{ $settings->phone }}">
      </div>
      <div class="form-group">
        <label for="title">Telefon mobil</label>
        <input class="form-control" name="mobile" value="{{ $settings->mobile }}">
      </div>
      <div class="form-group">
        <label for="title">Adresa</label>
        <input class="form-control" name="address" value="{{ $settings->address }}">
      </div>
      <div class="form-group">
        <label for="title">Fax</label>
        <input class="form-control" name="fax" value="{{ $settings->fax }}">
      </div>
      <div class="form-group">
        <label for="title">Despre</label>
        <textarea class="form-control" name="about" value="{{ $settings->mobile }}" id="content">{{ $settings->about }}</textarea>
      </div>
      <div class="form-group text-center">
        <button class="btn btn-success">Salveaza</button>
      </div>
    </form>
  </div>
</div>
@endsection
