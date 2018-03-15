@extends('layouts.frontend')

@section('content')
<div class="f-header">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-1 text-collumn">
        <h1>Mobilitate totală în managementul mentenanței</h1>
        <p><strong>Mobilitate</strong></br> Adio hârtii, planificați lucrările de mentenanță și intervențiile direct din sistemul KMR - Keep the Machine Running.</p>
        <p><strong>Acces la date în timp real</strong></br> Acces la informații în permanență, local și de oriunde este internet, indiferent dacă utilizați calculator, tabletă sau telefon mobil.</p>
        <p><strong>Modul de ticketing</strong></br> Alocare sarcini de lucru pentru tehnicieni (tichete/solicitări).</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('/images/f-header-image.png') }}">
      </div>
    </div>
  </div>
</div>
<div class="f-presentation">
  <div class="container">
    <div class="row">
      <div class="col-md-6 odd">
        <h1>Utilaje și echipamente</h1>
        <p>Reducerea downtime-ului </br> Mentenanță corectivă </br> Mentenanță preventivă și predictivă </br> Planificarea activității de mentenanță </br> Înregistrarea orelor de funcționare</p>
      </div>
      <div class="col-md-6 even">
        <h1>Rapoarte</h1>
        <p>Rapoarte sarcini de lucru alocate tehnicieni (tichete / solicitări) </br> Rapoarte materiale: top costuri, top utilizări </br> Rapoarte utilaje: costuri revizii, număr revizii </br> Rapoarte revizii / intervenții: top costuri, întârziate, planificate</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 odd">
        <h1>Materiale mentenanță și intervenții</h1>
        <p>Controlul costurilor </br> Controlul stocurilor </br> Planificarea materialelor necesare</p>
      </div>
      <div class="col-md-6 even">
        <h1>Tehnicieni</h1>
        <p>Alocare sarcini de lucru pentru tehnicieni (tichete, solicitări) </br> Acces la resurse: manual service, istoric intervenții, situații similare </br> Alerte, notificări și informații în timp real </br> Mobilitate - interfață web (laptop / tabletă / telefon)</p>
      </div>
    </div>
  </div>
</div>
<div class="f-emb-rows">
  <div class="container">
    <div class="row space-20">
      <div class="col-md-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/lXvIpVpHq58" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="col-md-6 col-background">
        <h1>Raportare</h1>
        <p>Pot fi generate 10 tipuri de rapoarte pentru: materiale: top utilizări, top costuri, detalii utilizare material echipamente: top număr revizii, top costuri revizii, detalii revizii echipament;</p>
        <p>revizii/intervenții: top costuri, revizii/intervenții întârziate, revizii ce urmează conform contorului de funcționare, situații similare;</p>
        <p>sarcini de lucru alocate tehnicienilor: tichete și solicitări, manuale de utilizare a echipamentelor, manuale de service, procese verbale, istoricul reviziilor și intervențiilor pentru fiecare echipament.</p>
      </div>
    </div>
    <div class="row space-20">
      <div class="col-md-6">
        <img src="{{ asset('/images/m1.png') }}" class="img-responsive">
      </div>
      <div class="col-md-6 col-background">
        <h1>Managementul reviziilor/ intervențiilor utilajelor/ echipamentelor</h1>
        <p>Planificarea și managementul mentenanței/intervențiilor pentru fiecare utilaj/echipament: tip revizie/mentenanță, tehnician/furnizor responsabil, dată, alertare, status, diagnostic, sarcini, materiale folosite, documente asociate, costuri. </p>
      </div>
    </div>
    <div class="row space-20">
      <div class="col-md-6">
        <img src="{{ asset('/images/m2.png') }}" class="img-responsive">
      </div>
      <div class="col-md-6 col-background">
        <h1>Managementul mentenanței preventive și predictive</h1>
        <p>Aplicația are capabilitatea de a te atenționa înainte ca un utilaj să se defecteze. Totul se realizează conform unui plan de lucru configurat în prealabil în aplicație. </p>
      </div>
    </div>
    <div class="row space-20">
      <div class="col-md-6">
        <img src="{{ asset('/images/m3.png') }}" class="img-responsive">
      </div>
      <div class="col-md-6 col-background">
        <h1>Managementul mentenanței utilajelor/ echipamentelor</h1>
        <p>Bază de date completă cu toate utilajele/echipamentele supuse activității de mentenanță/reparații. Adăugați aici toate utilajele/echipamentele cu informații: denumire, număr inventar, locație, perioadă de garanție, data punerii în funcțiune, contor de funcționare, imagini, date suplimentare de interes. </p>
      </div>
    </div>
    <div class="row space-20">
      <div class="col-md-6">
        <img src="{{ asset('/images/m4.png') }}" class="img-responsive">
      </div>
      <div class="col-md-6 col-background">
        <h1>Managementul materialelor</h1>
        <p>Acces în timp real la informații actualizate despre materialele necesare pentru mentenanță/reparații: denumire, producător, stoc existent, preț, manuale. Listele de materiale se pot importa și exporta din fișiere Excel.</p>
      </div>
    </div>
  </div>
</div>
@endsection
