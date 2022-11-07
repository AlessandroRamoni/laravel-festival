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

    <div class="contenitore">
        <table>
            <thead>
                <tr>
                    <th>nome evento</th>
                    <th>label</th>
                    <th>outdoor</th>
                    <th>quando</th>
                </tr>
            </thead>

            @foreach ($festival as $event)
                <tr>
                    <td>{{ $event['nome_evento'] }}</td>
                    <td>{{ $event['label'] }}</td>
                    <td>{{ $event['outdoor'] }}</td>
                    <td>{{ $event['quando'] }}</td>
                </tr>
            @endforeach

        </table>
    </div>

</body>

</html>
