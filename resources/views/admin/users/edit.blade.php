<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le rôle de l'utilisateur</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: Montserrat, sans-serif;
            background-color: #FFF;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #1E4C72;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #1E4C72;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #1E4C72;
            border-radius: 4px;
            background-color: #f3f3f3;
            color: #1E4C72;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #068632;
            color: #FFF;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #046324;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Modifier le rôle de l'utilisateur</h1>
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="role">Rôle</label>
            <select name="role" id="role">
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                <option value="association" {{ $user->role == 'association' ? 'selected' : '' }}>Association</option>
            </select>
        </div>
        <button type="submit">Enregistrer</button>
    </form>
</div>
</body>
</html>
