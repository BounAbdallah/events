<!-- resources/views/auth/register-admin.blade.php -->
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

    <div>
        <button type="submit">Register</button>
    </div>
</form>
