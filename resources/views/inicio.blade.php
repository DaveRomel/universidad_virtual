@extends('layout')

@section('contenido')
    <div class="tituloInicio">Bienvenidos a nuestro Portal Educativo en Línea</div>
    <div class="novedadesContenedor">
        <div class="subtituloInicio">Novedades</div>
        <div class="textoInicio">Revisa las fechas importantes del próximo ciclo escolar, como entrega de documentos, inicio
            de clases y curso propedéutico..</div>
        <div class="cardNovedadesContenedor">
            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Admisión</div>
                    <div class="cardNovedadesSubtitulo">Mastría en Ciencia de Datos</div>
                    <img src="imagen1.jpg" alt="Imagen 1">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Admisión</div>
                    <div class="cardNovedadesSubtitulo">Licenciatura en Estudios Mexicanos</div>
                    <img src="imagen2.jpg" alt="Imagen 2">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Calendario</div>
                    <div class="cardNovedadesSubtitulo">Calendario escolar 2025-B</div>
                    <img src="imagen3.jpg" alt="Imagen 3">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Calendario</div>
                    <div class="cardNovedadesSubtitulo">Curso de verano y propedéutico</div>
                    <img src="imagen4.jpg" alt="Imagen 4">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Rescripción</div>
                    <div class="cardNovedadesSubtitulo">Licenciatura en Estudios Mexicanos 2025-B</div>
                    <img src="imagen5.jpg" alt="Imagen 5">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Rescripción</div>
                    <div class="cardNovedadesSubtitulo">Mastría en Ciencia de Datos 2025-B</div>
                    <img src="imagen6.jpg" alt="Imagen 6">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>
            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Fechas Importanrtes</div>
                    <img src="imagen7.jpg" alt="Imagen 7">
                    <a href="#" class="boton">Ver más</a>

                </div>
            </div>

            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Horarios</div>
                    <div class="cardNovedadesSubtitulo">LEM Y MCD</div>
                    <img src="imagen8.jpg" alt="Imagen 8">
                    <a href="#" class="boton">Ver más</a>

                </div>
            </div>


        </div>
    </div>
    <div class="quienesSomosContenedor">
        <div class="subtituloInicio">¿Quienes somos?</div>
        <div class="textoInicio"> El <b>SUNEO</b> es un sistema que descentraliza la educación superior en Oaxaca
            y promueve la excelencia en docencia, investigación y desarrollo. La UTM,
            como parte del sistema, impulsa conocimiento e innovación para fortalecer
            el entorno y por medio de su Universidad Virtual ofrece la Licenciatura en
            Estudios Mexicanos y la Maestría en Análisis de Datos</div>
    </div>
    <div class="ofertaEducativaContenedor">
        <div class="subtituloInicio">Oferta educativa</div>
        <div class="cardOfertaContenedor">
            <div class="OfertacardContenido">
                <img src="imagen1.jpg" alt="Imagen 1">
                <div class="CardOferta">
                    <div class="CardTituloOferta">Licenciatura de estudios mexicanos</div>
                    <a href="{{ url('/Licenciatura-en-Estudios-Mexicanos') }}" class="boton">Visitar</a>
                </div>
            </div>
            <div class="OfertacardContenido">
                <img src="imagen2.jpg" alt="Imagen 2">
                <div class="CardOferta">
                    <div class="CardTituloOferta">Maestría en
                        Ciencias de Datos </div>
                    <a href="{{ url('/Maestria-En-Ciencia-De-Datos') }}" class="boton">Visitar</a>
                </div>
            </div>
        </div>

    </div>
    <div class="recursosAcademicosContenedor">
        <div class="subtituloInicio">Recursos académicos</div>
        <div class="textoInicio"> Este apartado ofrece un repositorio con tutoriales y recursos académicos
            útiles para la elaboración de tesis.</div>
        <div class="cardRacursosContenedor">
            <div class="cardRecursosContenido">
                <img src="logo-utm.jpg" alt="Repositorio UTM">
                <a href="#">
                    <p>Repositorio UTM</p>
                </a>
            </div>


            <div class="cardRecursosContenido">
                <video controls>
                    <source src="video1.mp4" type="video/mp4">
                    Tu navegador no soporta el formato de video.
                </video>
                <a href="">
                    <p>Como grabar con AES</p>
                </a>

            </div>


            <div class="cardRecursosContenido">
                <video controls>
                    <source src="video2.mp4" type="video/mp4">
                    Tu navegador no soporta el formato de video.
                </video>
                <a href="">
                    <p>Uso de la tableta gráfica</p>
                </a>

            </div>


            <div class="cardRecursosContenido">
                <img src="imagen3.jpg" alt="Apoyo para tesis">
                <a href="{{ url('/Recursos-Academicos') }}">
                    <p>Apoyo para tesis</p>
                </a>

            </div>


            <div class="cardRecursosContenido">
                <img src="imagen4.jpg" alt="Buscadores académicos">
                <a href="{{ url('/Recursos-Academicos') }}">
                    <p>Buscadores académicos</p>
                </a>

            </div>
        </div>

    </div>

@endsection