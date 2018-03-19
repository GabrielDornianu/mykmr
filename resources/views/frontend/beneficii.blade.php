@extends('layouts.frontend')

@section('content')
  <div class="b-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6" data-aos="fade-right">
          <h1> Beneficii </h1>
          <p>Analizați impactul măsurilor implementate</p>
          <button class="custom-button">Solicitați prezentare personalizată</button>
        </div>
        <div class="col-md-6 text-center">
          <img src="{{ asset('/images/comp.png') }}" data-aos="fade-down">
        </div>
      </div>
    </div>
  </div>
  <div class="b-presentation">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center p-r-50" data-aos="fade-right">
          <img src="{{ asset('/images/b-p.png') }}" class="img-responsive">
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h1>Raportare specifică</h1>
          <p class="p-highlighted">Realizați analize și luați decizii pe baza rapoartelor specifice generate de aplicație, informații extrem de utile pentru: management, departamentul economic și departamentul de mentenanță.</p>
          <p>Validați calitatea activităților de lucru. Puteți detecta rapid echipamentele cu defecțiuni frecvente, pot fi identificate acțiuni abuzive sau irelevante, zonele ce dau cele mai bune rezultate și care sunt zonele în care se înregistrează pierderi.</p>
          <p>Gestionați inventarul și raportarea bugetului în funcție de necesități.</p>
          <p>Puteți afla informații legate de echipamentele mai eficiente sau mai slabe în funcție de cele care produc cele mai multe cheltuieli de întreținere (top cheltuieli, top utilizări, top revizii etc.).</p>
          <p>Optimizați activitatea angajaților și producția utilizând previzionate.</p>
          <p>Analizați impactul măsurilor implementate.</p>
          <p>Dovediți eficiența în management și producție a companiei pentru atragerea de noi contracte.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="b-text">
    <div class="container">
      <div class="row">
        <div class="col-md-4" data-aos="fade-up">
          <h1>Mentenanță preventivă și predictivă</h1>
          <p>Asigurați funcționarea continuă a echipamentelor și reduceți downtime-ul. Preveniți apariția defecțiunilor accidentale, reduceți uzura componentelor dinamice și statice. Reduceți costurile totale de mentenanță prin monitorizarea stării tehnice a echipamentelor și comportării acestora în timp, în vederea stabilirii necesarului de lucrări de la prima reparație planificată.</p>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <h1>Planificare, monitorizare și implementare eficientă</h1>
          <p>Adio hârtii, dosare stufoase sau fișiere cu planificarea lucrărilor de mentenanță sau intervenții! Sistemul de mentenanță a utilajelor KMR - Keep the Machine Running, face acest lucru extrem de simplu, rapid și eficient. Aveți acces la informațiile care vă interesează în orice moment pentru a lua eficient decizii rapide.</p>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <h1>Control asupra activității</h1>
          <p>Aveți o imagine de ansamblu asupra activității de mentenanță, precum și informații specifice fiecărei acțiuni implementate sau planificate. Aveți control deplin asupra întregii activități (echipamente, materiale, responsabili) și asupra costurilor implicate.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="b-emb-row">
    <div class="container">
      <h1 class="text-center">Modul de ticketing</h1>
      <div class="row">
        <div class="col-md-4" data-aos="fade-up">
          <p>Reduceți timpul de răspuns prin alocarea sarcinilor de lucru către tehnicieni (tichete / solicitări), evaluați personalul și întocmiți rapoarte de activitate. Distribuiți în mod echilibrat sarcinile și monitorizați eficient activitățile și productivitatea angajaților.</p>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <p>Utilajele înregistrate în sistemul KMR sunt asociate unui QR Code unic care odată scanat permite tehnicienilor logați în sistem să înceapă rezolvarea tichetelor atribuite pe fiecare utilaj. Astfel, este înregistrată activitatea angajaților și statusul tichetelor.</p>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <p>Pe lângă gestionarea tichetelor, simpla scanare a QR codului QR oferă angajaților autorizați acces instant la informații despre utilaj: specificațiile tehnice, istoricul mentenanței, ore de funcționare, status revizie, manuale de utilizare și orice alt material necesar pentru desfășurarea activității.</p>
        </div>
      </div>
      <div clas="overflow-hidden">
        <iframe src="https://www.youtube.com/embed/dH6hxti2yvg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="b-last-row">
    <div class="container">
      <div class="row text-row">
        <div class="col-md-4" data-aos="fade-up">
          <h1>Arhivare și istoric al activității</h1>
          <p>Arhivați în sistemul de mentenanță utilaje KMR orice material pe care îl considerați util pentru activitatea de mentenanță - manuale de utilizare a echipamentelor, manuale de service, procese verbale etc. Aveți acces rapid și facil la istoricul reviziilor și intervențiilor pentru fiecare echipament. Astfel, vă puteți stabili cu ușurință necesarul de materiale și lucrări în funcție de situațiile de la reparațiile anterioare.</p>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <h1>Mobilitate</h1>
          <p>Tot timpul informat în timp util cu privire la activitatea desfășurată. Intervenții rapide pentru corectarea neregularităților. Aplicația dispune de interfață web ce vă permite acces la informații în permanență atât local, cât și de oriunde este internet, indiferent dacă utilizați calculator, tabletă sau telefon mobil.</p>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <h1>Notificări și alerte E-MAIL + SMS</h1>
          <p>Simplificați procesul și creșteți rapiditatea efectuării intervențiilor de lucru. Aveți acces în timp real la informații / decizii, aveți siguranța că informațiile exacte și detaliate sunt transmise către persoanele potrivite, la momentul potrivit.</p>
        </div>
      </div>
      <div class="row images-row">
        <div class="col-md-4 small-col-md overflow-hidden" data-aos="fade-up">
          <img src="{{ asset('/images/mob1.png') }}" class="img-responsive">
        </div>
        <div class="col-md-4 small-col-md overflow-hidden" data-aos="fade-up">
          <img src="{{ asset('/images/mob2.png') }}" class="img-responsive">
        </div>
        <div class="col-md-4 small-col-md overflow-hidden" data-aos="fade-up">
          <img src="{{ asset('/images/mob3.png') }}" class="img-responsive">
        </div>
      </div>
    </div>
  </div>
@endsection
