<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página en Construcción</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .construccion-contenedor {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .construccion-contenedor img {
            width: 200px;
            margin-bottom: 20px;
        }

        .construccion-contenedor h1 {
            font-size: 2.2rem;
            margin-bottom: 15px;
        }

        .construccion-contenedor p {
            font-size: 1.2rem;
            margin-bottom: 25px;
        }

        .boton-volver {
            display: inline-block;
            padding: 10px 20px;
            background-color: #800000;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .boton-volver:hover {
            background-color: #a52a2a;
        }
    </style>
</head>
<body>
    <div class="construccion-contenedor">
        <img src="imagenes/construccion.png" alt="En construcción">
        <a href="/" class="boton-volver">Volver al inicio</a>
    </div>
</body>
</html>
