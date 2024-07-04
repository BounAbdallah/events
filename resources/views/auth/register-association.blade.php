<!-- resources/views/auth/register-association.blade.php -->
<form method="POST" action="{{ route('register.association') }}">
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
        <label for="association_nom">Nom de l'Association</label>
        <input id="association_nom" type="text" name="association_nom" required>
    </div>

    <div>
        <label for="association_description">Description</label>
        <textarea id="association_description" name="association_description"></textarea>
    </div>

    <div class="form-group">
        <label for="association_logo">Logo de l'association</label>
        <input type="file" class="form-control" id="association_logo" name="association_logo">
    </div>

    <div>
        <label for="association_localisation">Localisation</label>
        <input id="association_localisation" type="text" name="association_localisation">
    </div>

    <div>
        <label for="association_numero">Numéro</label>
        <input id="association_numero" type="text" name="association_numero">
    </div>

    <div>
        <label for="association_secteur_activite">Secteur d'Activité</label>
        <input id="association_secteur_activite" type="text" name="association_secteur_activite">
    </div>

    <div>
        <label for="association_ninea">NINEA</label>
        <input id="association_ninea" type="text" name="association_ninea">
    </div>

    <div>
        <label for="association_date_creation">Date de Création</label>
        <input id="association_date_creation" type="date" name="association_date_creation">
    </div>

    <div>
        <label for="association_statut">Statut</label>
        <input id="association_statut" type="text" name="association_statut">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
