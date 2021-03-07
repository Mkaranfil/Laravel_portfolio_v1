@extends('back/template/main2')

@section('content')
<section class="m-5"style="border: green 3px solid">
    <div class="container">
        <p>Modifier:</p>
        {{-- validate --}}
        <div>
            @if ($errors->navbarLien->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->navbarLien->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          </div>
        <form action="/navbarLien/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
            <label for="nom">Nom: </label>
            <input type="text" name="nom" id="nom" value="{{old('nom') ? old('nom') : $edit->nom}}">
            <label for="titre">Href: </label>
            <input type="text" name="href" id="href" value="{{old('href') ? old('href') : $edit->href}}">
            <button type="submit" class="btn btn-info">Submit</button>
            <a  class="btn btn-warning ml-3" href="/backoffice">Retour</a>
        </form>
    </div>
</section>
    
@endsection