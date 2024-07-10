<!-- resources/views/emails/reservation-confirmation.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de réservation</title>
</head>
<body>
    <h1>Confirmation de réservation</h1>
    <p>Bonjour {{ $utilisateur->name }},</p>
    <p>Votre réservation pour l'événement {{ $evenement->nom }} a été confirmée.</p>
    <p>Détails de l'événement:</p>
    <ul>
        <li>Date: {{ $evenement->date_evenement }}</li>
        <li>Lieu: {{ $evenement->lieu }}</li>
    </ul>
</body>
</html>
