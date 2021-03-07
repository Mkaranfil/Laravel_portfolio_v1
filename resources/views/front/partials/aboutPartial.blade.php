<!-- ======= About Us Section ======= -->

<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>{{$about1section[0]->titre}}</h2>
            <p>{{$about1section[0]->paragraphe}}</p>
        </div>
    </div>
    <!-- ======= Features Section ======= -->
    <div id="features" class=" features container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
              @foreach ($about2sectionListe as $item)
              <div class="icon-box mt-5 mt-lg-0">
                  <i class="{{$item->icon}}"></i>
                  <h4>{{$item->titre}}</h4>
                  <p>{{$item->paragraphe}}</p>
              </div>     
              @endforeach
            </div>
            <div class="image col-lg-6 order-1 order-lg-2">
              <img height="400px" src="{{$about2sectionImage[0]->src}}" alt="">
            </div>
        </div>

    </div>
    <!-- End Features Section -->
</section>
<!-- End About Us Section -->


<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
    <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Clients Section -->
