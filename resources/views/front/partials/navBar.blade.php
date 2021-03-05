
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="{{$navbarTitre[0]->href}}">{{$navbarTitre[0]->titre}}</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              @foreach ( $navbarLien as $item)
              <li><a href="{{$item->href}}">{{$item->nom}}</a></li>
              @endforeach

            </ul>
          </nav><!-- .nav-menu -->

          <a class="get-started-btn scrollto">{{$navbarBtn[0]->nom}}</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->