<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Ciao Admin, hai appena ricevuto un messaggio!</h1>
    <p>Ti ha scritto questo utente: </br><strong>{{ $data['firstname'] . ' ' . $data['lastname'] }}</strong></p>
    <p>Testo del messaggio: </br>{{ $data['message'] }}</p>
</body>

</html>
