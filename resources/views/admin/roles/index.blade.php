<div class="container">
    <div class="add-role-form">
        <h2>Ajouter Rôle</h2>
        <form action="{{ route('admin.roles.store') }}" method="POST">
            @csrf
            <div class="p1">
                <label for="name">Nom du rôle :</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <button type="submit">Ajouter</button>
        </form>
    </div>

   
    <div class="add-role-form2">
        <h2>Liste des rôles</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom du rôle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            @if(!in_array($role->name, ['admin', 'user', 'association']))
                                <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
   .add-role-form {
    margin-top: 160px;
    width: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    flex-direction: column;
    border-radius: 10px;
}

.add-role-form2 {
    margin-top: 10px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    flex-direction: column;
    border-radius: 10px;
}

.add-role-form form, .add-role-form2 form {
    display: flex;
    flex-direction: row;
    width: 80%;
}

.add-role-form label, .add-role-form2 label {
    display: block;
    margin-bottom: 5px;
}

.add-role-form input, .add-role-form2 input {
    width: 400px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.add-role-form button, .add-role-form2 button {
    width: 130px;
    height: 40px;
    background-color: #4CAF50;
    color: white;
    padding: 5px 20px;
    border: none;
    cursor: pointer;
    margin-top: 20px;
    margin-left: 20px;
    border-radius: 12px;
}

.add-role-form2 table {
    width: 80%;
    border-collapse: collapse;
    margin-top: 20px;
}

.add-role-form2 table th, .add-role-form2 table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.add-role-form2 table th {
    background-color: #4CAF50;
    color: white;
}


</style>