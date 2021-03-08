@extends('back/template/main2')

@section('content')

    <section class="m-5" style="border: green 3px solid">
        <div class="container">
        <div class="card mb-3">
            <div class="image col-lg-6 order-1 order-lg-2">
                <img height="400px" src="{{ $show->src }}" alt="">
                <img height="400px" src="{{asset('storage/img/'.$show->src)}}"  alt="">  
            </div>
            <div class="card-body">
              <p class="card-text"><small class="text-muted">last update: {{$show->updated_at}}</small></p>
            </div>
        </div> 
        <a  class="btn btn-warning" href="/backoffice">Retour</a>
        </div>     
    </section>


@endsection
