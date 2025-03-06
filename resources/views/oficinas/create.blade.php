<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Oficina</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        main {
            padding: 20px;
        }
        button {
            background-color: #0066cc;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>

<header>
    <h1>Crear Oficina</h1>
</header>

<main>
    <h2>Formulario para Crear Oficina</h2>

    <form action="{{ route('oficinas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre de la oficina</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion"><br><br>

        <button type="submit">Guardar Oficina</button>
    </form>
</main>
<a href="/..">Volver</a>

</body>
</html>
