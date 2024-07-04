<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> details {{ $evenement->nom }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <hr>
            <h2>Détails de l'événement {{ $evenement->nom }}</h2>
            <hr>
            <div class="card">
                <img src="{{ asset('images/' . $evenement->image) }}" class="card-img-top" alt="{{ $evenement->nom }}" height="300">
                <div class="card-body">
                    <h5 class="card-title">{{ $evenement->nom }}</h5>
                    <p class="card-text"><small class="text-muted">Créé le: {{ $evenement->created_at }}</small></p>
                    <p class="card-text"><strong>Description:</strong> {{ $evenement->description }}</p>
                    <p class="card-text"><strong>Lieu:</strong> {{ $evenement->lieu }}</p>
                    <p class="card-text"><strong>Date de l'événement:</strong> {{ $evenement->date_evenement }}</p>
                    <p class="card-text"><strong>Heure de début:</strong> {{ $evenement->heure_debut }}</p>
                    <p class="card-text"><strong>Heure de fin:</strong> {{ $evenement->heure_fin }}</p>
                    <p class="card-text"><strong>Date de clôture des inscriptions:</strong> {{ $evenement->date_cloture_inscription }}</p>
                    <p class="card-text"><strong>Nombre de places:</strong> {{ $evenement->nombre_places }}</p>
                    <p class="card-text"><strong>Catégorie:</strong> {{ $evenement->categorie }}</p>
                    <p class="card-text"><strong>Statut:</strong> {{ $evenement->statut }}</p>
                    <a href="{{ route('events.edit', $evenement->id) }}" class="btn btn-info">Modifier</a>
                    <form action="{{ route('events.destroy', $evenement->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">Supprimer</button>
                    </form>
                    <a href="{{ route('events.index') }}" class="btn btn-primary">Retour à la liste</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
