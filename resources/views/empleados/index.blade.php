<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina: {{ $oficina->nombre }}</title>
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

        h1 {
            text-align: center;
            color: #0066cc;
            font-size: 2rem;
            margin-bottom: 20px;
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
            text-decoration: none;
            color: #0066cc;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #004d99;
        }

        ul {
            list-style: none;
            padding-left: 0;
            margin-top: 20px;
        }

        li {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        li a {
            color: #ff7043;
            font-size: 0.9rem;
        }

        .volver {
            display: block;
            margin-top: 30px;
            text-align: center;
            font-size: 1rem;
            color: #0066cc;
        }
    </style>
</head>
<body>

<h1>Detalles de la Oficina: {{ $oficina->nombre }}</h1>

<p><strong>Dirección:</strong> {{ $oficina->direccion }}</p>

<h2>Empleados</h2>

<a href="{{ route('oficinas.empleados.create', $oficina) }}">
    <button>Añadir Empleado</button>
</a>

<ul>
    @foreach ($empleados as $empleado)
        <li>{{ $empleado->nombre }} - {{ $empleado->dni }}
        <a href="{{ route('oficinas.empleados.edit', ['oficina' => $oficina->id, 'empleado' => $empleado->id]) }}">Editar</a>
      
        </li>
    @endforeach
</ul>
<a href="/..">Volver</a>
</body>
</html>
