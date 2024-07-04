<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD IN LARAVEL 11</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <hr>
            <h2>Modifier un événement</h2>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('events.update', $evenement->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $evenement->nom }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $evenement->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="lieu">Lieu</label>
                    <input type="text" class="form-control" id="lieu" name="lieu" value="{{ $evenement->lieu }}" required>
                </div>
                <div class="form-group">
                    <label for="date_evenement">Date de l'événement</label>
                    <input type="date" class="form-control" id="date_evenement" name="date_evenement" value="{{ $evenement->date_evenement }}" required>
                </div>
                <div class="form-group">
                    <label for="heure_debut">Heure de début</label>
                    <input type="text" class="form-control" id="heure_debut" name="heure_debut" value="{{ $evenement->heure_debut }}" required>
                </div>
                <div class="form-group">
                    <label for="heure_fin">Heure de fin</label>
                    <input type="text" class="form-control" id="heure_fin" name="heure_fin" value="{{ $evenement->heure_fin }}" required>
                </div>
                <div class="form-group">
                    <label for="date_cloture_inscription">Date de clôture des inscriptions</label>
                    <input type="date" class="form-control" id="date_cloture_inscription" name="date_cloture_inscription" value="{{ $evenement->date_cloture_inscription }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="nombre_places">Nombre de places</label>
                    <input type="number" class="form-control" id="nombre_places" name="nombre_places" value="{{ $evenement->nombre_places }}" required>
                </div>
                <div class="form-group">
                    <label for="categorie">Catégorie</label>
                    <select class="form-select" id="categorie" name="categorie" required>
    @foreach($categories as $categorie)
        <option value="{{ $categorie }}" @if($evenement->categorie == $categorie) selected @endif>{{ $categorie }}</option>
    @endforeach
</select>

                </div>
                <div class="form-group">
    <label for="statut">Statut</label>
    <select class="form-select" id="statut" name="statut" required>
        @foreach($statuts as $statut)
            <option value="{{ $statut }}" @if($evenement->statut == $statut) selected @endif>{{ ucfirst($statut) }}</option>
        @endforeach
    </select>
</div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
