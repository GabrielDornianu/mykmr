<nav class="navbar navbar-default v-padding-20 no-border">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand height-auto" href="{{ route('index') }}"><img src="{{ asset($settings->logo) }}" height="52"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right custom-navbar-links" id="custom-navbar-links">
        <li><a href="{{ route('index') }}">Acasa</a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Software <span class="caret"></span></a>
          <ul class="dropdown-menu submenu">
            <li><a href="{{ route('functionalitati') }}">Functionalitati</a></li>
            <li><a href="{{ route('beneficii') }}">Beneficii</a></li>
            <li><a href="{{ route('pret') }}">Pret</a></li>
          </ul>
        </li>
        <li><a href="{{ route('servicii') }}">Servicii</a></li>
        <li><a href="{{ route('companie') }}">Companie</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('demo') }}" class="demo-button">Acces Demo</a></li>
        <li><a href="{{ route('login') }}" class="login-button">Intrati in cont</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
