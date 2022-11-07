<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Festivals</title>
</head>

<body>

    <h1>THUNDERDOME</h1>

    <div>
        <ul>
            @foreach ($festival as $event)
                <li>{{ $event['nome_evento'] }}</li>
                <li>{{ $event['label'] }}</li>
                <li>{{ $event['outdoor'] }}</li>
            @endforeach
        </ul>
    </div>

</body>

</html>
