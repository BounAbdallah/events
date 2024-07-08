<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateurs</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFF; /* Couleur de fond */
            color: #1E4C72; /* Couleur du texte principal */
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #ccc;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
            color: #1E4C72; /* Couleur du titre */
        }

        .table-container {
            overflow-x: auto;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #1E4C72; /* Couleur des bordures */
            text-align: left;
        }

        th {
            background-color: #D9D9D9; /* Couleur d'arrière-plan de l'en-tête */
            color: #ffffff; /* Couleur du texte de l'en-tête */
        }

        tbody tr:nth-child(even) {
            background-color: #f3f3f3; /* Couleur de fond des lignes paires */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1E4C72; /* Couleur de fond du bouton */
            color: #FFF; /* Couleur du texte du bouton */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 600;
            line-height: normal;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #068632; /* Couleur de fond au survol */
        }

        .btn-primary {
            background-color: #007bff; /* Couleur de fond du bouton primaire */
            border-color: #007bff; /* Couleur de la bordure du bouton primaire */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Couleur de fond du bouton primaire au survol */
            border-color: #004085; /* Couleur de la bordure du bouton primaire au survol */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Gestion des utilisateurs</h1>
          
        </div>

        <div class="table-container">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Modifier</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="#" class="btn btn-primary btn-page">Page suivante</a>
    </div>
</body>
</html>
