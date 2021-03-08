
@extends('back/template/main2')

@section('content')
<section class="m-5"style="border: green 3px solid">
    <div class="container">
        <p>Modifier:</p>
             {{-- validate --}}
             <div>
                @if ($errors->about2sectionListe->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->about2sectionListe-->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              </div>
              <form action="/about2sectionListe/{{$edit->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                  <label for="titre">Icon:</label>
                  <input type="text" name="icon" id="icon" value="{{old('icon') ? old('icon') : $edit->icon}}">
                </div>
                <div class="form-group">
                  <label for="titre">Titre:</label>
                  <input type="text" name="titre" id="titre" value="{{old('titre') ? old('titre') : $edit->titre}}">
                </div>
                <div class="form-group">
                  <label for="para">paragraphe</label>
                  <textarea class="form-control" rows="3" name="paragraphe" id="href">{{$edit->paragraphe}}</textarea>
                </div>
                <button type="submit" class="btn btn-info">Confirmer</button>
                <a  class="btn btn-warning ml-3" href="/backoffice">Retour</a>
              </form>
    </div>
</section>
    
@endsection