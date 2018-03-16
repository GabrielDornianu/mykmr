@extends('layouts.frontend')

@section('content')
<div class="se-header">
  <div class="container">
    <h1 class="text-center shadowed-text">Implementare Software KMR</h1>
  </div>
</div>
<div class="se-presentation">
  <div class="row">
    <div class="col-md-4 first-col">
      <p>Determinăm împreună necesitățile specifice, stabilim și evaluăm pașii ce urmează să fie efectuați: personalizare, implementare, post-implementare.</p>
      <p>Asigurăm suport tehnic, precum și training specializat pentru utilizarea aplicației KMR, pentru ca folosirea acesteia să nu fie în nici un moment limitată și să servească în permanență scopului propus.</p>
      <p>Serviciile pot include administrarea aplicației, customizări ale acesteia sau training complex de utilizare.</p>
    </div>
    <div class="col-md-4 second-col">
      <h1>Livrarea sistemului KMR</h1>
      <ul>
        <li><i class="fa fa-check"></i> <p>Instalare sistem - Oferim licență de utilizare și documentația pentru utilizarea softului; </p></li>
        <li><i class="fa fa-check"></i> <p>Instruire utilizatori finali - Instruim utilizatorii pentru o exploatare eficientă a aplicației. </p></li>
        <li><i class="fa fa-check"></i> <p>Acordăm consultanță tehnică pentru crearea cadrului necesar instalării; </p></li>
        <li><i class="fa fa-check"></i> <p>Instalăm aplicația în versiunea curentă (ultima versiune a aplicației); </p></li>
        <li><i class="fa fa-check"></i> <p>Configurăm sistemul conform specificului activității firmei; </p></li>
        <li><i class="fa fa-check"></i> <p>Testare sistem și revizuire </p></li>
      </ul>
    </div>
    <div class="col-md-4 third-col">
      <img src="{{ asset('/images/mob3.png') }}" class="img-responsive">
    </div>
  </div>
</div>
<div class="se-brief">
  <p class="max-500">Aplicația KMR este dezvoltată integral de către Departamentul de Cercetare-Dezvoltare al companiei Quartz Matrix, astfel aplicația poate fi personalizată pe specificațiile identificate la sediul clientului în conformitate cu nevoile și așteptările acestuia.</p>
</div>
<div class="se-title">
  <h1 class="text-center">WORKSHOP</h1>
</div>
<div class="se-cols">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="col-content">
          <img src="{{ asset('/images/sei2.jpg') }}" class="custom-responsive-image">
          <h1>Workshop Sistem KMR</h1>
          <p>Workshope in-house pentru utilizarea sistemului KMR, dedicat noilor utilizatori, pentru împrospătarea cunoștințelor sau familiarizarea cu noi caracteristici ale aplicației. Scopul este familiarizarea rapidă a utilizatorului cu programul precum și câștigul important de timp și bani rezultat în urma exploatării eficiente a aplicației.</p>
          <button class="custom-button">Solicită workshope in-house + Voucher 3 luni gratuit</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-content">
          <img src="{{ asset('/images/sei1.png') }}" class="custom-responsive-image">
          <h1>Curs Managementul Mentenanței – Partener Best Smart</h1>
          <p>Prin parteneriatul cu BestSmart oferim cursuri și traininguri ce au la bază cercetări, analize și studii de caz culese din realitatea de business, din mediul de afaceri și din experiența experților noștri. Cursul de Managementul Mentenanței este destinat înțelegerii, rolurilor, instrumentelor, metodelor și a celor mai bune practici ce pot fi utilizate în procesul de management mentenanța a echipamentelor și utilajelor.</p>
          <button class="custom-button">Aflați mai multe</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
