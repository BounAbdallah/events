
<!-- resources/views/auth/register-association.blade.php -->
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
        .form-group{
            display: flex;
            flex-direction: column;
        }

    </style>
</head>
<body>
    <div class="body">
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class="container">

        <h1 class="titre">Inscription !</h1>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

                <form method="POST" action="{{  route('register.association') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="name" :value="__('Nom complet')" />
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Entrez votre prénom et nom"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="name" placeholder="Entrez l'email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Entrez votre mot de passe" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password-confirmation" :value="__('Confirmer mot de passe')" />

            <input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation"
                            placeholder="Entrez votre mot de passe" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="form-group">
        <div>
            <x-input-label for="association_nom" :value="__('Nom de l\'association')" />
            <input id="association_nom" class="block mt-1 w-full" type="text" name="association_nom" :value="old('association_nom')" required placeholder="Entrez le nom de l'association"/>
            <x-input-error :messages="$errors->get('association_nom')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="association_description" :value="__('Description')" />
            <input id="email" class="block mt-1 w-full" type="text" name="association_description" :value="old('association_description')" required autofocus autocomplete="username" placeholder="Entrez la description"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        </div>


        <div>
            <x-input-label for="association_logo" :value="__('Logo')" />
            <input id="association_logo" class="block mt-1 w-full" type="file" name="association_logo" :value="old('association_logo')" required autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="association_localisation" :value="__('Adresse')" />
            <input id="association_localisation" class="block mt-1 w-full" type="text" name="association_localisation" :value="old('association_localisation')" required autofocus autocomplete="username" placeholder="Entrez l'adresse"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="association_numero" :value="__('Numéro')" />
            <input id="association_numero" class="block mt-1 w-full" type="text" name="association_numero" :value="old('association_numero')" required autofocus autocomplete="username" placeholder="33 XXX XX XX"/>
            <x-input-error :messages="$errors->get('association_numero')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="association_secteur_activite" :value="__('Secteur d\'activité')" />
            <input id="association_numero" class="block mt-1 w-full" type="text" name="association_secteur_activite" :value="old('association_secteur_activite')" required autofocus autocomplete="username" placeholder="Entrez le secteur d'activité"/>
            <x-input-error :messages="$errors->get('association_secteur_activite')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="association_ninea" :value="__('Ninéa')" />
            <input id="association_ninea" class="block mt-1 w-full" type="text" name="association_ninea" :value="old('association_ninea')" required autofocus autocomplete="username" placeholder="Ninéa"/>
            <x-input-error :messages="$errors->get('association_ninea')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="association_date_creation" :value="__('Datte de création de l\'association')" />
            <input id="association_date_creation" class="block mt-1 w-full" type="date" name="association_date_creation" :value="old('association_date_creation')" required autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('association_date_creation')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="association_statut" :value="__('Statut')" />
            <input id="association_statut" class="block mt-1 w-full" type="hidden" name="association_statut" :value="old('association_statut')" required autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('association_statut')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4 text">

            <button type="submit" class="btn btn-login" name="submit">Créer l'association</button>

            <div class="bouton"><a href="{{route('login') }} ">Vous avez déjà un compte ? <span>Se connecter</span> </a> </div>
        </div>
    </form>

        <div class="mt-3 text-center">
        </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

</x-guest-layout>

