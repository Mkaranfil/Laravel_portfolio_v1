{{-- start section bo-about --}}
<section class="mt-5" id="bo-about" style="border: green 3px solid ">
    <div class="container">
        {{-- preview --}}
        <div>
            <h1 style="text-decoration: underline">Bo-About:</h1>
            <h4 style="text-decoration: underline">Preview:</h4>
        </div>
        <div class="container" style="border: green 3px solid ">
            <div class="section-title">
                @foreach ($about1section as $item)
                    <h2>{{ $item->titre }}</h2>
                    <p>{{ $item->paragraphe }}</p>
                @endforeach
            </div>
        </div>
        {{-- end preview --}}
        {{-- start modifier section1 --}}
        <div class="mt-4">
            <div id="titre">
                <h4 class="bg-success" style="text-decoration: underline">Titre :</h4>
                <p>Content:</p>
                {{-- tableau --}}
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">titre</th>
                            <th scope="col">paragraphe</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($about1section as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->titre }}</td>
                                <td>{{ $item->paragraphe }}</td>
                                <td>
                                    <a href="about1section/{{ $item->id }}/edit" class="btn btn-info mb-2">EDIT</a>
                                <td>
                                <td>
                                    <form action="about1section/{{ $item->id }}" method="POST">
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
                    {{-- ajouter section1 --}}
                    <p>Ajouter:</p>
                    {{-- validate --}}
                    <div>
                        @if ($errors->about1section->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->about1section->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div> {{-- end validate --}}
                    <form action="/about1section" method="POST" class="d-flex">
                        @csrf
                        <div class="mr-3">
                            <label for="nom">Titre: </label>
                            <input type="text" name="titre" id="nom" value={{ old('titre') }}>
                        </div>
                        <div>
                            <label for="titre">paragraphe: </label>
                            <input type="text" name="paragraphe" id="href" value={{ old('paragraphe') }}>
                        </div>
                        <button type="submit" class="btn btn-info  ml-5">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>{{-- end section1 --}}
        {{-- debut Section2 Liste --}}
        <div class="mt-4 ">
            {{-- preview --}}
            <div>
                <h4 style="text-decoration: underline">Preview:</h4>
            </div>
            <!-- ======= Features Section ======= -->
            <div id="features" class=" features container" style="border: green 3px solid ">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                        @foreach ($about2sectionListe as $item)
                            <div class="icon-box mt-5 mt-lg-0">
                                <i class="{{ $item->icon }}"></i>
                                <h4>{{ $item->titre }}</h4>
                                <p>{{ $item->paragraphe }}</p>
                            </div>
                        @endforeach
                    </div>
                    @foreach ($about2sectionImage as $item)
                    <div class="image col-lg-6 order-1 order-lg-2">
                        <img height="400px" src="{{ $item->src }}" alt="">
                        <img height="400px" src="{{asset('storage/img/'.$item->src)}}"  alt="">  
                    </div>
                @endforeach
                </div>

            </div>
            <!-- End Features Section -->
            {{-- end preview --}}
            <h4 id="about2sectionListe" class="bg-success mt-4" style="text-decoration: underline">Liste:</h4>
            <p>Content:</p>
            {{-- tableau btn --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Titre</th>
                        <th scope="col">paragraphe</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($about2sectionListe as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->icon }}</td>
                            <td>{{ $item->titre }}</td>
                            <td>{{ $item->paragraphe }}</td>
                            <td>
                                <a href="about2sectionListe/{{ $item->id }}/edit"
                                    class="btn btn-info mb-2">EDIT</a>
                            <td>
                            <td>
                                <form action="about2sectionListe/{{$item->id}}" method="POST">
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
                {{-- ajouter btn --}}
                <p>Ajouter:</p>
                {{-- validate --}}
                <div>
                    @if ($errors->about2sectionListe->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->about2sectionListe->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div> {{-- end validate --}}
                <form action="/about2sectionListe" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="titre">Icon:</label>
                        <input type="text" name="icon" id="titre" value={{ old('icon') }}>
                    </div>
                    <div class="form-group">
                        <label for="titre">Titre:</label>
                        <input type="text" name="titre" id="titre" value={{ old('titre') }}>
                    </div>
                    <div class="form-group">
                        <label for="para">paragraphe:</label>
                        <textarea class="form-control" rows="3" name="paragraphe" id="href" value={{ old('paragraphe') }}></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Ajouer</button>
                </form>
            </div>
        </div>
        {{-- debut section2 image --}}
        {{-- START navbarBtn --}}
    <div class="mt-4">
        <h4 id="about2sectionImage"class="bg-success" style="text-decoration: underline">Image:</h4>
        <p>Content:</p>
        {{-- tableau btn --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Src</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($about2sectionImage as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->src }}</td>
                        <td>
                            <form action="about2sectionImage/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        <td>
                        <td>
                            <a class="btn btn-warning" href="/about2sectionImage/{{$item->id}}">SHOW</a>
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
                @if ($errors->about2sectionImage->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->about2sectionImage->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div> {{-- end validate --}}
            <form action="/about2sectionImage" method="POST" class="d-flex" enctype="multipart/form-data">
                @csrf
                <div class="d-flex">
                    <input type="file" class="form-control-file" name='src'>
                </div>
                <button type="submit" class="btn btn-info  ml-5">Ajouter</button>

            </form>
        </div>
    </div>



    </div>
</section>
