<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad Virtual</title>
    
    <style>
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header >
        <div class="container">
            <div>UNIVERSIDAD VIRTUAL UTM</div>
            <div>La educacion del mañana es hoy</div>
        </div>
    </header>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Oferta academica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contactanos') }}">Contactanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <main class="container my-4">
        @yield('contenido')
    </main>

    <!-- Pie de Página -->
   <footer>
    <div class="container">
        <div class="row">
            <div>
                <div>Horarios de atención</div>
                <div>9:00 a.m.-2:00 p.m.</div>
                <div>4:00 a.m.-7:00 p.m</div>
            </div>
           
            <div>
                <div>Av. Dr. Modesto Seara Vázquez, <br>
                No.1, Acatlima.CP. 69004 <br>
                Huajuapan de León, Oaxaca.</div>
                
            </div>
            <div>
                <div>Aviso de Privacidad</div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
