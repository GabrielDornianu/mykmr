@extends('layouts.frontend')

@section('content')
  <div class="b-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1> Beneficii </h1>
          <p>Analizați impactul măsurilor implementate</p>
          <button class="custom-button">Solicitați prezentare personalizată</button>
        </div>
        <div class="col-md-6 text-center">
          <img src="{{ asset('/images/comp.png') }}">
        </div>
      </div>
    </div>
  </div>
@endsection
