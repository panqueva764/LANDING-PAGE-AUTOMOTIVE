<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Registrados</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css\admin\app.css')}}" />
</head>

<body>
    <div class="container">
        <h1>Clientes Registrados</h1>
        @if ($message = Session::get('success'))
        <div class="winner-message">
            {{ $message }}
        </div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Ciudad</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Es Ganador</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->identification }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <span class="winner-indicator {{ $client->is_winner ? 'winner-true' : 'winner-false' }}"></span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form method="POST" action="{{ route('select.winner') }}">
            @csrf
            <button type="submit" class="select-winner-button">Seleccionar Ganador Aleatorio</button>
        </form>
        <form method="GET" class="excel" action="{{ route('clients.export') }}">
            <button type="submit">Descargar clientes en Excel</button>
        </form>
        <br>
        <section class="back">
            <a href="{{ url('/') }}">Volver a la página de inicio</a>
        </section>
    </div>
</body>

</html>