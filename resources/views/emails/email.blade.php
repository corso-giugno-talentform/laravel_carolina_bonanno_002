<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Ciao {{ $data['firstname'] }}, grazie per averci contattato!</h1>
    @if (isset($data['nome_articolo']))
        <p>L'articolo su cui hai espresso il tuo parere é: <strong>{{ $data['nome_articolo'] }}</strong></p>
    @endif
    <p>Ti ricontatteremo al più presto.</p>
</body>

</html>
