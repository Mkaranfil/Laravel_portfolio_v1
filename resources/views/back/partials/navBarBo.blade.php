{{-- start section bo-navbar --}}
<section class="mt-5" id="bo-navbar" style="border: green 3px solid ">
    {{-- preview --}}
    <div class="container">
        <div>
            <h1 style="text-decoration: underline">Bo-Navbar:</h1>
            <h4 style="text-decoration: underline">Preview:</h4>
        </div>
        <div class="container bg-dark">
            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-between">
                    @foreach ($navbarTitre as $item)   
                    <h1 class="logo"><a href="{{$item->href}}">{{$item->titre}}</a></h1>
                    @endforeach
                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            @foreach ($navbarLien as $item)
                                <li><a href="{{ $item->href }}">{{ $item->nom }}</a></li>
                            @endforeach
                        </ul>
                    </nav><!-- end nav-menu -->
                    @foreach ($navbarBtn as $item)    
                    <a class="get-started-btn scrollto">{{$item->nom}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>{{-- end preview --}}
    {{-- start modifier titre --}}
    <div class="mt-4">
        <div id="titre" class="container">
            <h4 id="navbarTitre" class="bg-success" style="text-decoration: underline">Titre:</h4>
            <p>Content:</p>
            {{-- tableau titre --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">titre</th>
                        <th scope="col">Href</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($navbarTitre as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->titre }}</td>
                            <td>{{ $item->href }}</td>
                            <td>
                                <a href="navbarTitre/{{ $item->id }}/edit" class="btn btn-info mb-2">EDIT</a>
                            <td>
                            <td>
                                <form action="navbarTitre/{{ $item->id }}" method="POST">
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
                    @if ($errors->navbarTitre->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->navbarTitre->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div> {{-- end validate --}}
                <form action="/navbarTitre" method="POST" class="d-flex">
                    @csrf
                    <div class="mr-3">
                        <label for="nom">Titre: </label>
                        <input type="text" name="titre" id="nom" value={{ old('titre') }}>
                    </div>
                    <div>
                        <label for="titre">Href: </label>
                        <input type="text" name="href" id="href" value={{ old('href') }}>
                    </div>
                    <button type="submit" class="btn btn-info  ml-5">Ajouter</button>
                </form>
            </div>
        </div>
    </div>{{-- end navbarTitre --}}
    {{-- start modifier lien --}}
    <div class="mt-4">
        <div id="titre" class="container">
            <h4 class="bg-success" style="text-decoration: underline">Lien:</h4>
            <p>Content:</p>
            {{-- tableau lein --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">nom</th>
                        <th scope="col">Href</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($navbarLien as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->href }}</td>
                            <td>
                                <a href="navbarLien/{{ $item->id }}/edit" class="btn btn-info mb-2">EDIT</a>
                            <td>
                            <td>
                                <form action="navbarLien/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            <td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="m-3 d-flex justify-content-center">
                <form action="/delet-all" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete All</button>
                </form>
            </div>
            <div>
                {{-- ajouter lien --}}
                <p>Ajouter:</p>
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
                </div> {{-- end validate --}}
                <form action="/navbarLien" method="POST" class="d-flex">
                    @csrf
                    <div class="mr-3">
                        <label for="nom">Nom: </label>
                        <input type="text" name="nom" id="nom" value={{ old('nom') }}>
                    </div>
                    <div>
                        <label for="titre">Href: </label>
                        <input type="text" name="href" id="href" value={{ old('href') }}>
                    </div>
                    <button type="submit" class="btn btn-info  ml-5">Ajouter</button>

                </form>
            </div>
        </div>
    </div>{{-- end navbarlien --}}
    {{-- START navbarBtn --}}
    <div class="mt-4 container">
        <h4 id="navbarBoBtn"class="bg-success" style="text-decoration: underline">Boutton:</h4>
        <p>Content:</p>
        {{-- tableau btn --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Fichier</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($navbarBtn as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->src }}</td>
                        <td>
                            <a href="navbarBtn/{{ $item->id }}/edit" class="btn btn-info mb-2">EDIT</a>
                        <td>
                        <td>
                            <form action="navbarBtn/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        <td>
                        <td>
                            <a class="btn btn-warning" href="/navbarBtn/{{$item->id}}">SHOW</a>
                        </td>
                           </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{-- ajouter btn --}}
            <p>Ajouter:</p>
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
            <form action="/navbarBtn" method="POST" class="d-flex" enctype="multipart/form-data">
                @csrf
                <div class="mr-3">
                    <label for="nom">Nom: </label>
                    <input type="text" name="nom" id="nom" value={{ old('nom')}}>
                </div>
                <div class="d-flex">
                    <input type="file" class="form-control-file" name='src'>
                </div>
                <button type="submit" class="btn btn-info  ml-5">Ajouter</button>

            </form>
        </div>
    </div>



</section>
