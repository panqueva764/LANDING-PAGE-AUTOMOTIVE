<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .alert {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Registro de Clientes</h1>
        <h3>Si deseas participar en el concurso, debes registrar lo siguiente:</h3>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="/register">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Apellido</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="identification">Cédula</label>
                <input type="text" id="identification" name="identification" required>
            </div>
            <div class="form-group">
                <label for="department">Departamento</label>
                <select id="department" name="department" required>
                    <option value="" disabled selected>Seleccione un departamento</option>
                    <option value="Antioquia">Antioquia</option>
                    <option value="Bogotá">Bogotá</option>
                    <option value="Valle del Cauca">Valle del Cauca</option>
                    <!-- Agrega más opciones aquí según tus necesidades -->
                </select>
            </div>
            <div class="form-group">
                <label for="city">Ciudad</label>
                <select id="city" name="city" required>
                    <option value="" disabled selected>Seleccione una ciudad</option>
                    <option value="Antioquia">Medellin</option>
                    <option value="Bogotá">Bogotá</option>
                    <option value="Valle del Cauca">Cali</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Celular</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" id="accept_terms" name="accept_terms" required value="1">
                    Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales.
                </label>
            </div>
            <div class="form-group">
                <button type="submit">Registrarse</button>
            </div>
        </form>
    </div>
</body>

</html>
