@extends('layouts.frontend')

@section('content')
<div class="co-header">
  <h1 class="text-center">Contact</h1>
</div>
<div class="co-title">
  <h1 class="text-center max-500">Vă mulțumim pentru interesul acordat soluțiilor noastre!</br>
Vă alocăm un consultant pregătit să vă ofere suport în luarea deciziilor de business.</h1>
</div>
<div class="contact-form-row">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>Date de contact</h4>
        <p>QUARTZ MATRIX</p>
        <p>Adresa: {{ $settings->address }}</p>
        <p>Fix: {{ $settings->phone }}</p>
        <p>Mobil: {{ $settings->mobile }}</p>
        <p>Fax: {{ $settings->fax }}</p>
        <p>E-mail: {{ $settings->email }}</p>
        <p>www.quartzmatrix.ro</p>
        <h5>S.C. Quartz Matrix S.R.L.; Sediul social: B-dul Carol I, nr. 5, etaj 1, Iași, cod poștal 700506; Înregistrat la ORC: J22/30/1994; CUI: RO 5150840; Capital social: 580.000 lei</h5  >
      </div>
      <div class="col-md-6">
        <form action="">
          <input placeholder="Nume">
          <input placeholder="Email">
          <input placeholder="Telefon">
          <input placeholder="Firma">
          <textarea rows="4" placeholder="Mesaj"></textarea>
          <button class="square-button"><i class="fa fa-plane"></i> Trimiteti</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
