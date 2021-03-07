
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          @foreach ($navbarTitre as $item)   
          <h1 class="logo"><a href="{{$item->href}}">{{$item->titre}}</a></h1>
          @endforeach
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              @foreach ( $navbarLien as $item)
              <li><a href="{{$item->href}}">{{$item->nom}}</a></li>
              @endforeach

            </ul>
          </nav><!-- .nav-menu -->
          @foreach ($navbarBtn as $item)    
          <a class="get-started-btn scrollto">{{$item->nom}}</a>
          @endforeach
        </div>
      </div>

    </div>
  </header><!-- End Header -->