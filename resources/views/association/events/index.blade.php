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
            <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Ajouter un événement</a>
            <hr>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
            @foreach($evenements as $evenement)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/' . $evenement->image) }}" class="card-img-top" alt="{{ $evenement->nom }}" height="300">
                            <div class="card-body">
                                <h5 class="card-title">{{ $evenement->nom }}</h5>
                                <p class="card-text"><small class="text-muted">date de l'evenement : </small></p>
                                <p class="card-text"><strong>Statut:</strong> {{ $evenement->categorie }}</p>
                                <a href="{{ route('events.edit', $evenement->id) }}" class="btn btn-info">Modifier</a>
                                <form action="{{ route('events.destroy', $evenement->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">Supprimer</button>
                                </form>
                                <a href="{{ route('events.show', $evenement->id) }}" class="btn btn-success">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

</body>
</html>
