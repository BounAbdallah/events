<!-- resources/views/association/reservations/show.blade.php -->

<div class="container">
    <h1>Gestion des réservations pour {{ $evenement->nom }}</h1>
    <p>{{ $evenement->places_disponibles }} / {{ $evenement->nombre_places }} places disponibles</p>

    <table class="table">
        <thead>
            <tr>
                <th>Nom de l'utilisateur</th>
                <th>Email</th>
                <th>Statut</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evenement->reservations as $reservation)
                <tr>
                    <td>{{ $reservation->user->name }}</td>
                    <td>{{ $reservation->user->email }}</td>
                    <td>{{ $reservation->statut }}</td>
                    <td>
                        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <select name="statut" required>
                                <option value="{{ App\Models\Reservation::STATUS_PENDING }}" {{ $reservation->statut == App\Models\Reservation::STATUS_PENDING ? 'selected' : '' }}>En attente</option>
                                <option value="{{ App\Models\Reservation::STATUS_CONFIRMED }}" {{ $reservation->statut == App\Models\Reservation::STATUS_CONFIRMED ? 'selected' : '' }}>Confirmée</option>
                                <option value="{{ App\Models\Reservation::STATUS_CANCELED }}" {{ $reservation->statut == App\Models\Reservation::STATUS_CANCELED ? 'selected' : '' }}>Annulée</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

