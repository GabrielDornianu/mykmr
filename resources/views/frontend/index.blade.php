@extends('layouts.frontend')

@section('content')
<div class="index-header">
  <div id="jssor_1" style="position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
    <div data-u="slides" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
        <div>
          <img data-u="image" src="{{ asset('images/banner1.jpg') }}" class="jssor-image"/>
          <div class="header-content">
            <h1>Control asupra activitatii de management, mententanta</h1>
            <p>Mententanta predictiva si preventiva. Managementul reviziilor, interventiilor, utilajelor, echipamentelor</p>
          </div>
        </div>
        <div>
          <img data-u="image" src="{{ asset('images/banner2.jpg') }}" class="jssor-image"/>
          <div class="header-content">
            <h1>Mobilitate</h1>
            <p>Acces la informatii in permanenta local, si oriunde este internet, indiferent daca utilizati un calculator, tableta, sau un telefon mobil</p>
            <button class="custom-button">Video</button>
          </div>
        </div>
    </div>

    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
  </div>
</div>
<div class="index-presentation">
  <div class="container">
    <h1 class="text-center">Sistemul KMR - Keep the Machine Running</h1>
    <div class="flex-row">
      <div class="feature">
        <i class="fa fa-cogs"></i>
        <p>Configurabil pe roluri și permisiuni pentru personalul participant la mentenanță</p>
      </div>
      <div class="feature">
        <i class="fa fa-user"></i>
        <p>Modul de ticketing – alocare sarcini de lucru tehnicieni (tichete / solicitări)</p>
      </div>
      <div class="feature">
        <i class="fa fa-cog"></i>
        <p>Mentenanță preventivă și predictivă</p>
      </div>
    </div>
    <div class="flex-row last-flex-row">
      <div class="feature">
        <i class="fa fa-industry"></i>
        <p>Rapoarte diversificate revizii, intervenții, utilaje, materiale, sarcini de lucru alocate</p>
      </div>
      <div class="feature">
        <i class="fa fa-laptop"></i>
        <p>Alerte, notificări și informații în timp real</p>
      </div>
      <div class="feature">
        <i class="fa fa-mobile"></i>
        <p>Mobilitate interfață web (laptop, tabletă, telefon)</p>
      </div>
    </div>
  </div>
</div>
<div class="index-prices">
  <h1 class="prices-h1">Cum poți să achiziționezi Softul KMR</h1>
  <div class="flex-row offers-row">
    <div class="offer-collumn">
      <h1>CLOUD Basic</h1>
      <p>Specificații</p>
      <span> Spațiu de stocare: <strong> 20 GB </strong></span>
      <span> Instalare aplicație: <strong> Cloud </strong></span>
      <span> Back-up: <strong> Săptămânal </strong></span>
      <span> Număr echipamente: <strong> 100 </strong></span>
      <span> Număr utilizatori: <strong> 15 </strong></span>
      <span> Training inițial utilizare KMR: <strong> DA (4 ore) </strong></span>
      <span> Suport tehnic (e-mail și telefonic): <strong> 4 ore/lună (*suplimentar 30€/ora) </strong></span>
      <span> Personalizare funcționalități KMR: <strong> La cerere** </strong></span>
      <span> Alertare SMS: <strong> Opțional*** </strong></span>
      <span> Update-uri KMR: <strong> NU </strong></span>
      <span> Alertare e-mail: <strong> DA </strong></span>
      <span> Software KMR: <strong> DA </strong></span>
      <span> Angajament: <strong> Minim 2 ani </strong></span>
      <button class="custom-button">Pret 259 &euro;</button>
    </div>
    <div class="offer-collumn">
      <h1>CLOUD Premium</h1>
      <p>Specificații</p>
      <span> Spațiu de stocare: <strong> 50 GB </strong></span>
      <span> Instalare aplicație: <strong> Cloud </strong></span>
      <span> Back-up: <strong> Zilnic </strong></span>
      <span> Număr echipamente: <strong> Nelimitat </strong></span>
      <span> Număr utilizatori: <strong> Nelimitat </strong></span>
      <span> Training inițial utilizare KMR: <strong> DA (8 ore) </strong></span>
      <span> Suport tehnic (e-mail și telefonic): <strong> 4 ore/lună (suportul este nelimitat conform SLA) </strong></span>
      <span> Personalizare funcționalități KMR: <strong> La cerere** </strong></span>
      <span> Alertare SMS: <strong> Opțional*** </strong></span>
      <span> Update-uri KMR: <strong> DA (tot timpul) </strong></span>
      <span> Alertare e-mail: <strong> DA </strong></span>
      <span> Software KMR: <strong> DA </strong></span>
      <span> Angajament: <strong> Minim 2 ani </strong></span>
      <button class="custom-button">Pret 359 &euro;</button>
    </div>
    <div class="offer-collumn">
      <h1>ON - PREMISE</h1>
      <p>Specificații</p>
      <span> Spațiu de stocare: <strong> Minim 10 GB (conform specificațiilor tehnice) </strong></span>
      <span> Instalare aplicație: <strong> Preț licentă perpetuă, instalare pe infrastructura clientului </strong></span>
      <span> Back-up: <strong> NU (revine în sarcina beneficiarului) </strong></span>
      <span> Număr echipamente: <strong> Nelimitat </strong></span>
      <span> Număr utilizatori: <strong> Nelimitat* (conform specificațiilor tehnice) </strong></span>
      <span> Training inițial utilizare KMR: <strong> DA (8 ore) </strong></span>
      <span> Suport tehnic (e-mail și telefonic): <strong> 4 ore / lună (suportul este nelimitat conform SLA) </strong></span>
      <span> Personalizare funcționalități KMR: <strong> La cerere** </strong></span>
      <span> Alertare SMS: <strong> Opțional*** </strong></span>
      <span> Update-uri KMR: <strong> DA </strong></span>
      <span> Alertare e-mail: <strong> DA </strong></span>
      <span> Software KMR: <strong> DA </strong></span>
      <span> Angajament: <strong><i> La plata integrală suportul și actualizările sunt incluse pentru primul an începând cu semnarea contractului. După primul an prețul suportului este de 15% din valoarea contractului și include: suport tehnic 40 ore anual, upgrade gratuit la versiuni superioare, 10% reducere la alte aplicații Quartz Matrix </i></strong></span>
      <button class="custom-button">Pret 5980 &euro;</button>
    </div>
  </div>
</div>
@endsection
