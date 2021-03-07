

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          @foreach ($homet1 as $item)
            <h2>{{$item->titre}}</h2>    
          @endforeach
          @foreach ($homet2 as $item)
            <h1>{{$item->titre}}</h1>    
          @endforeach
          @foreach ($homet3 as $item)
            <h2>{{$item->titre}}</h2>    
          @endforeach 
       {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
        </div>
      </div>
    </div>
  </section><!-- End Hero -->