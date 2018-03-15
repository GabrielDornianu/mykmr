    <footer>
      <div class="footer-flex-row text-center">
        <div class="flex-card">
          <div class="card-icon"><i class="fa fa-laptop"></i></div>
          <h1>Start KMR</h1>
          <p>Vedeți cum sistemul KMR vă ajută să realizați managementul echipamentelor, utilajelor și a stocului, să reduceți downtime-ul și să economisiți timp și bani.</p>
          <button>Solicitati oferta</button>
        </div>
        <div class="flex-card">
          <div class="card-icon"><i class="fa fa-universal-access"></i></div>
          <h1>Ușor de implementat</h1>
          <p>Vizitați ghidul de implementare cu tutoriale video pas cu pas. Acesta vă va ghida în utilizarea sistemului KMR - Keep the Machine Running</p>
          <button>Ghid KMR</button>
        </div>
        <div class="flex-card">
          <div class="card-icon"><i class="fa fa-mobile-phone"></i></div>
          <h1>Contact</h1>
          <p>Pentru mai multe informații suntem la dispoziția dvs.în intervalul 09:00 - 17:30</p>
          <p class="diff-p">Telefon: +(40)232-217.248</p>
          <p class="diff-p">Mobil: +(40)726-767.890</p>
          <p class="diff-p">E-mail: office@quartzmatrix.ro</p>
        </div>
      </div>
      <div class="subscription-form text-center">
        <img src="{{ asset($settings->logo) }}" class="footer-logo" height="50">
        <p class="text-muted footer-about">{{ $settings->about }}</p>
        <h3 class="subscribe-heading">Pentru o prezentare personalizată, vă putem contacta!</h3>
        <form class="subscription-newsletter" action="" method="post">
          <input type="email" name="subscriber-email" class="newsletter-input" placeholder="Telefon sau email" required>
          <button type="submit" class="newsletter-button">
            <i class="fa fa-plane"></i>
          </button>
        </form>
      </div>
      <div class="sub-footer text-center">
        <p class="text-muted">Copyright &copy; {{ date("Y") }} Quartz Matrix | All rights reserved</p>
      </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
