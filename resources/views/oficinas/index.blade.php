<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Oficinas</title>
    <style>
      body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5em;
            margin: 0;
        }

        main {
            padding: 30px;
            max-width: 1200px;
            margin: 20px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        main h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #0066cc;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #004c99;
        }

        button {
            background-color: #0066cc;
            color: white;
            padding: 12px 24px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #005bb5;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            background-color: #f9f9f9;
            margin-bottom: 12px;
            padding: 10px;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        ul li:hover {
            background-color: #e9eff5;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

<header>
    <h1>Gestión de Oficinas</h1>
</header>

<main>
    <h2>Listado de Oficinas</h2>

    <a href="{{ route('oficinas.create') }}">
        <button>Añadir Oficina</button>
    </a>

    <ul>
        @foreach($oficinas as $oficina)
            <li>
                <a href="{{ route('oficinas.empleados.store', $oficina) }}">{{ $oficina->nombre }}</a>
            </li>
        @endforeach
    </ul>
</main>

</body>
</html>
