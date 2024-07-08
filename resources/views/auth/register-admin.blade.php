<!-- resources/views/auth/register-admin.blade.php -->

</style>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .conatainer{
            background-image: url('');
        }
        .form-container {
            max-width: 900px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 6px;
            color: #1E4C72;
            font-size: 20px;
            font-weight: 600;
        }
        .form-label {
            color: #343a40;
            font-weight: 500;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #fff;
            border: 2 solid #0148AD;
            border-radius: 10px;
            padding: 10px 20px;
            margin-left: 0px;
            margin-top: 20px;
            width: 100%;
            color: #0148AD;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0148AD;
        }
        .text-center a {
            text-decoration: none;
        }
        textarea{
            height: 60px;
        }
        .btn-login{
            background-color: #fff;
            color: #1E4C72;
            width: 400px;
            border: 2px solid #1E4C72;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        span{
            color: #1E4C72;
        }
        .text{
            display: flex;
            flex-direction: column;
        }
        input{
            background-color: #D9E1E7;
        }
        label{
            color: #fff;
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            margin-bottom: 8px;
        }
        .titre{
            font-size: 22px;
            text-align: center;
            color: #1E4C72;
            font-weight: 600;
        }

    </style>
</head>
<body>
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class="container">

        <h1 class="titre">Connexion !</h1>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

                <form method="POST" action="{{ route('register.admin') }}">
        @csrf

        <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" required autofocus>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <div>
        <label for="admin_prenom">Prénom</label>
        <input id="admin_prenom" type="text" name="admin_prenom" required>
    </div>

    <div>
        <label for="admin_nom">Nom</label>
        <input id="admin_nom" type="text" name="admin_nom" required>
    </div>

    <div>
        <label for="admin_telephone">Téléphone</label>
        <input id="admin_telephone" type="text" name="admin_telephone">
    </div>

            <button type="submit" class="btn btn-login" name="submit">Connexion</button>

            <div class="bouton"><a href="{{route('register.user') }} ">Vous n'avez pas de compte ? <span>S'inscrire</span> </a> </div>
        </div>
    </form>

        <div class="mt-3 text-center">
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

</x-guest-layout>






















