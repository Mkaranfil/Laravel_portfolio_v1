{{-- start section bo-navbar --}}
<section class="bo-navbar" style="border: green 3px solid ">
    {{-- preview --}}
    <div class="container">
        <div>
            <h1 style="text-decoration: underline">Bo-Navbar:</h1>
            <h4 style="text-decoration: underline">Preview:</h4>
        </div>
        <div class="container bg-dark">
            <div class="row justify-content-center">
            <div class="col-xl-9 d-flex align-items-center justify-content-between">
                <h1 class="logo"><a href="{{$navbarTitre[0]->href}}">{{$navbarTitre[0]->titre}}</a></h1>
                <nav class="nav-menu d-none d-lg-block">
                <ul>
                    @foreach ( $navbarLien as $item)
                    <li><a href="{{$item->href}}">{{$item->nom}}</a></li>
                    @endforeach
                </ul>
                </nav><!-- end nav-menu -->
                <a class="get-started-btn scrollto">{{$navbarBtn[0]->nom}}</a>
            </div>
            </div>
        </div>
    </div>{{-- end preview --}}
    {{-- modifier_titre --}}
    <div class="mt-4">
        <div id="titre" class="container">
            <h4 class="bg-success"style="text-decoration: underline">Titre:</h4>
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
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->titre}}</td>
                                <td>{{$item->href}}</td>
                                <td>
                                    <a href="navbarTitre/{{$item->id}}/edit" class="btn btn-info mb-2">EDIT</a>
                                <td>
                                <td>
                                    <form action="navbarTitre/{{$item->id}}" method="POST">
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
                <p>Ajouter:</p>
                <form action="/navbarTitre" method="POST" class="d-flex">
                    @csrf
                    <div class="mr-3">
                        <label for="nom">Nom: </label>
                        <input type="text" name="titre" id="nom">
                    </div>
                    <div>
                        <label for="titre">Href: </label>
                        <input type="text" name="href" id="href">
                    </div>
                    <button type="submit" class="btn btn-info  ml-5">Ajouter</button>
                </form>
            </div>  
        </div>
    </div>
    {{-- modifier lien --}}
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
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->nom}}</td>
                                <td>{{$item->href}}</td>
                                <td>
                                    <a href="navbarLien/{{$item->id}}/edit" class="btn btn-info mb-2">EDIT</a>
                                <td>
                                <td>
                                    <form action="navbarLien/{{$item->id}}" method="POST">
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
                <p>Ajouter:</p>
                <form action="/navbarLien" method="POST" class="d-flex">
                    @csrf
                    <div class="mr-3">
                        <label for="nom">Nom: </label>
                        <input type="text" name="nom" id="nom">
                    </div>
                    <div>
                        <label for="titre">Href: </label>
                        <input type="text" name="href" id="href">
                    </div>
                    <button type="submit" class="btn btn-info  ml-5">Ajouter</button>
                  
                </form>
            </div>  
        </div>
    </div>
   
    
</section>