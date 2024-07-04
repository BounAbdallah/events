<div class="container">
    <h1>Modifier le rôle de l'utilisateur</h1>
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="role">Rôle</label>
            <select name="role" id="role" class="form-control">
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                <option value="association" {{ $user->role == 'association' ? 'selected' : '' }}>Association</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
</div>