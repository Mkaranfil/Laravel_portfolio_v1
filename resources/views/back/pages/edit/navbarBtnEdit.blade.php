@extends('back/template/main2')

@section('content')
    <section class="m-5" style="border: green 3px solid">
        <div class="container">
            <p>Modifier:</p>
            {{-- validate --}}
            <div>
                @if ($errors->navbarBtn->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->navbarBtn->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div> {{-- end validate --}}
            <form action="/navbarBtn/{{$edit->id}}" method="POST" class="d-flex" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mr-3">
                    <label for="nom">Nom: </label>
                    <input type="text" name="nom" id="nom" value="{{old('nom') ? old('nom') : $edit->nom}}">
                </div>
                <div class="d-flex">
                    <input type="file" class="form-control-file" name='src' value="{{old('src') ? old('src') : $edit->src}}">
                </div>
                <button type="submit" class="btn btn-info  ml-5">Confirmer</button>
                <a  class="btn btn-warning ml-3" href="/backoffice">Retour</a>
            </form>
        </div>
    </section>

@endsection
