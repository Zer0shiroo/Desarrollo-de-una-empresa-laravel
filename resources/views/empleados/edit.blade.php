<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input:focus, select:focus {
            border-color: #0066cc;
            outline: none;
        }

        button {
            background-color: #0066cc;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #005bb5;
            transform: scale(1.05);
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-size: 1rem;
            color: #0066cc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #004d99;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .error ul {
            list-style-type: none;
        }

        .error li {
            font-size: 14px;
        }
    </style>
</head>
<body>
    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('oficinas.empleados.update', ['oficina' => $oficina->id, 'empleado' => $empleado->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre', $empleado->nombre) }}">

        <label for="primer_apellido">Primer Apellido</label>
        <input type="text" name="primer_apellido" value="{{ old('primer_apellido', $empleado->primer_apellido) }}">

        <label for="segundo_apellido">Segundo Apellido</label>
        <input type="text" name="segundo_apellido" value="{{ old('segundo_apellido', $empleado->segundo_apellido) }}">

        <label for="dni">DNI</label>
        <input type="text" name="dni" value="{{ old('dni', $empleado->dni) }}">

        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email', $empleado->email) }}">

        <label for="rol">Rol</label>
        <input type="text" name="rol" value="{{ old('rol', $empleado->rol) }}">

        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="text" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $empleado->fecha_nacimiento) }}">

        <label for="office_id">Oficina</label>
        <select name="office_id" id="office_id">
            <option value="{{ $oficina->id }}" selected>{{ $oficina->nombre }}</option>
        </select>

        <button type="submit">Guardar cambios</button>
    </form>

    <a href="../">Volver</a>
</body>
</html>
