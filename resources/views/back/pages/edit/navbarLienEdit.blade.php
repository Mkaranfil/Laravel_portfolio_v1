@extends('back/template/main2')

@section('content')
<section class="m-5"style="border: green 3px solid">
    <div class="container">
        <p>Modifier:</p>
        <form action="/navbarLien/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
            <label for="nom">Nom: </label>
            <input type="text" name="nom" id="nom">
            <label for="titre">Href: </label>
            <input type="text" name="href" id="href">
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</section>
    
@endsection