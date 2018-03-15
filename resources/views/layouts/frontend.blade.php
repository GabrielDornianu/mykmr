@include('includes.head')
@include('includes.navbar')

<div class="container">
  <div class="row">
    <h1>@yield('content')</h1>    
  </div>
</div>

@include('includes.footer')
