@extends('back/template/main2')

@section('content')

    <section class="m-5" style="border: green 3px solid">
        <div class="container">
        <div class="card mb-3">
            <iframe src="{{$show->src}}" frameborder="0"></iframe>
            <div class="card-body">
              <p class="card-title">Nom du document: {{$show->nom}}</p>
              <p class="card-text"><small class="text-muted">last update: {{$show->updated_at}}</small></p>
            </div>
        </div> 
        <a  class="btn btn-warning" href="/backoffice">Retour</a>
        </div>     
    </section>


@endsection
