@extends('back/template/main2')

@section('content')
<section class="m-5"style="border: green 3px solid">
    <div class="container">
        <p>Modifier:</p>
             {{-- validate --}}
             <div>
                @if ($errors->homet3->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->homet3->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>
        <form action="/homet3/{{$edit->id}}" method="POST" class="d-flex">
            @csrf
            @method('PATCH')
            <div class="mr-3">
                <label for="nom">Titre: </label>
                <input type="text" name="titre" id="nom" value="{{old('titre') ? old('titre') : $edit->titre}}">
            </div>
            <button type="submit" class="btn btn-info  ml-5">Ajouter</button>
            <a  class="btn btn-warning ml-3" href="/backoffice">Retour</a>
        </form>
    </div>
</section>
    
@endsection