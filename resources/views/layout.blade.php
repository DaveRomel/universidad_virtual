<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad Virtual</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/oferta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactanos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recursosAcademicos.css') }}">

</head>

<body>

    <header>
        <div class="encabezadoContenedor">
    <div class="logoContenedor">
        <img src="\imagenes\logo UTM fondo blanco.png" alt="LogoUtm">
    </div>

    <div class="tituloSubtituloContenedor">
        <div class="tituloLayout">UNIVERSIDAD VIRTUAL UTM</div>
        <div class="subtituloLayout">La educación del mañana es hoy</div>
    </div>

    <div class="logoContenedor">
        <img src="\imagenes\logo UTM fondo blanco.png" alt="LogoVirtual">
    </div>
</div>

    </header>

    <nav class="nav">
    <div class="nav-container">
        <a class="nav-logo" href="#">Inicio</a>
        <div class="nav-links">
            <a class="nav-link" href="#">Oferta académica</a>
            <a class="nav-link" href="{{ url('/contactanos') }}">Contáctanos</a>
        </div>
    </div>
</nav>



    <main class="container my-4">
        @yield('contenido')
    </main>

    <!-- Pie de Página -->
    <footer class="footer">
    <div class="footer-container">
        <div class="footer-item">
            <div>Horarios de atención</div>
            <div>9:00 a.m.–2:00 p.m.</div>
            <div>4:00 p.m.–7:00 p.m.</div>
        </div>
        <div class="footer-item">
            <div>Av. Dr. Modesto Seara Vázquez,<br>
                No.1, Acatlima. CP 69004<br>
                Huajuapan de León, Oaxaca.</div>
        </div>
        <div class="footer-item">
            <div>Aviso de Privacidad</div>
        </div>
    </div>
</footer>


</body>
<script src="{{ asset('js/oferta.js') }}"></script>


</html>