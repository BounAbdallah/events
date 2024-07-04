<h1>Gestion des associations</h1>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Statut</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($associations as $association)
                <tr>
                    <td>{{ $association->name }}</td>
                    <td>{{ $association->email }}</td>
                    <td>{{ $association->association_statut }}</td>
                    <td>
                        <form action="{{ route('admin.associations.updateStatus', $association->id) }}" method="POST">
                            @csrf
                            <select name="status" onchange="this.form.submit()">
                                <option value="active" {{ $association->association_statut === 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $association->association_statut === 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>