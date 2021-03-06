@extends('back/template/main2')

@section('content')
<section class="m-5"style="border: green 3px solid">
    <div class="container">
        <p>Modifier:</p>
        <form action="/navbarTitre/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
            <label for="titre">Titre: </label>
            <input type="text" name="titre" id="titre">
            <label for="titre">Href: </label>
            <input type="text" name="href" id="href">
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</section>
    
@endsection