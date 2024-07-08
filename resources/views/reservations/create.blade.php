<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .form-row {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #343a40;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #495057;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">{{ $evenement->nom }}</h1>
        <p class="text-center text-muted">Le {{ $evenement->date_evenement }} au {{ $evenement->lieu }} </p>
        <p class="text-center text-danger">Nombre de places restantes : 12</p>

        <form action="{{ route('reservations.store', $evenement->id) }}" method="POST" class="mt-4">
            @csrf
            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $user->name }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">Numéro de téléphone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value= " {{ $user->association_numero }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $user->association_localisation }}">
                </div> 
                <button type="submit" class="btn btn-primary">Confirmer réservation</button>

                <p>Confirmez votre réservation et recevez votre ticket d’entrée pour le grand jour !</p>
            </div>
            <a href="{{ route('events.index') }}" class="btn btn-danger ml-2">Annuler</a>

        </form>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
