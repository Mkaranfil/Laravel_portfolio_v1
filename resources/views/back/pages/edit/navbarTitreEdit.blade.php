
@extends('back/template/main2')

@section('content')
<section class="m-5"style="border: green 3px solid">
    <div class="container">
        <p>Modifier:</p>
             {{-- validate --}}
             <div>
                @if ($errors->navbarTitre->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->navbarTitre->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              </div>
        <form action="/navbarTitre/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
            <label for="titre">Titre: </label>
            <input type="text" name="titre" id="titre" value="{{old('titre') ? old('titre') : $edit->titre}}">
            <label for="titre">Href: </label>
            <input type="text" name="href" id="href" value="{{old('href') ? old('href') : $edit->href}}">
            <button type="submit" class="btn btn-info">Confirmer</button>
            <a  class="btn btn-warning ml-3" href="/backoffice">Retour</a>
        </form>
    </div>
</section>
    
@endsection