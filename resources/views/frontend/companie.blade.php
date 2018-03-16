@extends('layouts.frontend')

@section('content')
<div class="c-header">
  <div class="container">
    <h1>Despre noi</h1>
  </div>
</div>
<div class="c-about">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <p>Quartz Matrix este o companie de inginerie de nivel național care urmărește permanent ca performanțele sale să se reflecte în succesul clienților și partenerilor săi. </p>
        <p>Prezentă de 24 de ani în piața de business-to-business, Quartz Matrix răspunde la provocări cu inovație, la cerințe cu performanță, la exigențe cu soluții eficiente în domeniile IT, electric și electronic. De aceea, parteneriatele încheiate de Quartz Matrix sunt mereu de lungă durată și se bazează pe încredere mutuală și respectarea minuțioasă a contractelor încheiate.
Quartz Matrix investește permanent în cercetare-dezvoltare, urmărind ca soluțiile oferite să fie mereu personalizate pe specificul fiecărui client în parte, astfel încât acestea să se reflecte direct în creșterea productivității. </p>
        <p>Quartz Matrix susține instruirea permanentă a fiecărui angajat și se implică în procesul de învățare continuă prin alocarea de resurse considerabile pentru certificarea experților săi în toate domeniile în care activează. </p>
        <p>Suntem pionieri în IoT și Industry 4.0, în România, implementând încă de acum 8 ani proiecte și soluții inovative în domenii de tehnologie avansată.</p>
        <p>Astfel, o echipă competentă și entuziastă este gata să găsească, alături de dumneavoastră, soluțiile cele mai bune în folosul fiecăruia și în beneficiul tuturor.</p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset('/images/qmarix.png') }}" class="img-responsive">
      </div>
    </div>
  </div>
</div>
<div class="c-others">
  <div class="container">
    <h1>Recomandări: Artifex</h1>
    <p>„Prin utilizarea KMR la Artifex, am reușit să ne atingem obiectivele propuse: un registru detalitat al tuturor echipamentelor noastre, un plan de întreținere preventivă și reducerea costurilor cu mentenanța. Pe tot parcursul procesului de consultanță, am avut parte de suport atât din partea echipei de vânzări, cât și pe parte tehnică, beneficiind în final de instruirea necesară pentru utilizarea eficientă a aplicației.”</p>
  </div>
</div>
<div class="c-partners">
  <h1 class="text-center">Parteneri</h1>
    <div class="container">
      <div class="row">
      <div class="col-md-3">
        <img src="{{ asset('/images/discosp.png') }}" class="img-responsive">
      </div>
      <div class="col-md-3">
        <img src="{{ asset('/images/azure.png') }}" class="img-responsive">
      </div>
      <div class="col-md-3">
        <img src="{{ asset('/images/academia.png') }}" class="img-responsive">
      </div>
      <div class="col-md-3">
        <img src="{{ asset('/images/kontron.jpg') }}" class="img-responsive">
      </div>
    </div>
  </div>
</div>
@endsection
