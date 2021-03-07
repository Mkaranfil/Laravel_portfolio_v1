{{-- start section bo-navbar --}}
<section class="mt-5" id="bo-home" style="border: green 3px solid ">
    {{-- preview --}}
    <div class="container">
        <div>
            <h1 style="text-decoration: underline">Bo-Home:</h1>
            <h4 style="text-decoration: underline">Preview:</h4>
        </div>
        @include('front/partials/homePartial')
        {{-- end preview --}}
        {{-- start modifier titre1 --}}
        <div class="mt-4">
            <div id="titre">
                <h4  class="bg-success" style="text-decoration: underline">Titre 1:</h4>
                <p>Content:</p>
                {{-- tableau titre --}}
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">titre</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homet1 as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->titre }}</td>
                                <td>
                                    <a href="homet1/{{ $item->id }}/edit" class="btn btn-info mb-2">EDIT</a>
                                <td>
                                <td>
                                    <form action="homet1/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                <td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{-- ajouter titre --}}
                    <p>Ajouter:</p>
                    {{-- validate --}}
                    <div>
                        @if ($errors->homet1->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->homet1->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div> {{-- end validate --}}
                    <form action="/homet1" method="POST" class="d-flex">
                        @csrf
                        <div class="mr-3">
                            <label for="nom">Titre: </label>
                            <input type="text" name="titre" id="nom" value={{ old('titre') }}>
                        </div>
                        <button type="submit" class="btn btn-info  ml-5">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>{{-- end homeTitre1 --}}
        {{-- start modifier titre2 --}}
        <div class="mt-4">
            <div id="titre">
                <h4  class="bg-success" style="text-decoration: underline">Titre 2:</h4>
                <p>Content:</p>
                {{-- tableau titre --}}
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">titre</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homet2 as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->titre }}</td>
                                <td>
                                    <a href="homet2/{{ $item->id }}/edit" class="btn btn-info mb-2">EDIT</a>
                                <td>
                                <td>
                                    <form action="homet2/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                <td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{-- ajouter titre --}}
                    <p>Ajouter:</p>
                    {{-- validate --}}
                    <div>
                        @if ($errors->homet2->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->homet2->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div> {{-- end validate --}}
                    <form action="/homet2" method="POST" class="d-flex">
                        @csrf
                        <div class="mr-3">
                            <label for="nom">Titre: </label>
                            <input type="text" name="titre" id="nom" value={{ old('titre') }}>
                        </div>
                        <button type="submit" class="btn btn-info  ml-5">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>{{-- end homeTitre1 --}}
        {{-- start modifier titre3 --}}
        <div class="mt-4">
            <div id="titre">
                <h4  class="bg-success" style="text-decoration: underline">Titre 3:</h4>
                <p>Content:</p>
                {{-- tableau titre --}}
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">titre</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homet3 as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->titre }}</td>
                                <td>
                                    <a href="homet3/{{ $item->id }}/edit" class="btn btn-info mb-2">EDIT</a>
                                <td>
                                <td>
                                    <form action="homet3/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                <td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{-- ajouter titre --}}
                    <p>Ajouter:</p>
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
                    </div> {{-- end validate --}}
                    <form action="/homet3" method="POST" class="d-flex">
                        @csrf
                        <div class="mr-3">
                            <label for="nom">Titre: </label>
                            <input type="text" name="titre" id="nom" value={{ old('titre') }}>
                        </div>
                        <button type="submit" class="btn btn-info  ml-5">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>{{-- end homeTitre1 --}}
    </div>




</section>
