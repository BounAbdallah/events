<div class="container">
    <h1>Edit Reservation</h1>
    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="statut">Status</label>
            <div class="status-buttons">
                <input type="radio" name="statut" id="pending" value="{{ \App\Models\Reservation::STATUS_PENDING }}" {{ $reservation->statut == \App\Models\Reservation::STATUS_PENDING ? 'checked' : '' }}>
                <label for="pending" class="btn btn-status {{ $reservation->statut == \App\Models\Reservation::STATUS_PENDING ? 'active' : '' }}">En attente</label>

                <input type="radio" name="statut" id="confirmed" value="{{ \App\Models\Reservation::STATUS_CONFIRMED }}" {{ $reservation->statut == \App\Models\Reservation::STATUS_CONFIRMED ? 'checked' : '' }}>
                <label for="confirmed" class="btn btn-status {{ $reservation->statut == \App\Models\Reservation::STATUS_CONFIRMED ? 'active' : '' }}">Confirmée</label>

                <input type="radio" name="statut" id="canceled" value="{{ \App\Models\Reservation::STATUS_CANCELED }}" {{ $reservation->statut == \App\Models\Reservation::STATUS_CANCELED ? 'checked' : '' }}>
                <label for="canceled" class="btn btn-status {{ $reservation->statut == \App\Models\Reservation::STATUS_CANCELED ? 'active' : '' }}">Annulée</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
