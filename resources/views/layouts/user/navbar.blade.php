<nav class="navbar navbar-white">
  <div class="container-fluid">
    <div class="logo">
      <div class="sprout-logo hide-on-small-only">
        <!-- Note: Logo
        width: 180px
        height: 120px;
        -->
        <img src="{{ asset('images/logo.png') }}" alt="Sprout">
        <p>Connect &amp; Grow</p>
      </div>
      <div class="client-logo">
        <!-- Note: Logo
        width: 180px
        height: 120px;
        -->
        <!-- Untuk Keperluan demo Image nya diganti dummy dulu-->
        <img style="font-size: 26px; line-height: 100px; margin:10px" src="{{session()->get('companySession')[0]->logo_image}}" alt="Company Logo">
        <div class="client-identity">
          <span class="client-company">{{session()->get('companySession')[0]->name}}</span> <br>
          <!-- Note: Untuk Nama Person
          Dibagian ini yang mau di tampilkan nama depan dan nama belakang. Untuk nama belakang person nya diambil huruf pertama saja.-->
          @if(!empty(session()->get('userSession')[0]))
          <span class="client-person">{{session()->get('userSession')[0]->first_name}} {{session()->get('userSession')[0]->first_name}} - {{session()->get('userSession')[0]->role_name}}</span>
          @endif
        </div>
        <p class="client-tagline" style="margin-top: 15px">{{session()->get('companySession')[0]->tagline}}</p>
      </div>
    </div>
  </div>
</nav>
