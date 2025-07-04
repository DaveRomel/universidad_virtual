@extends('layout')

@section('contenido')
    <div class="tituloInicio">Bienvenidos a nuestro Portal Educativo en Línea</div>
   
    <div class="seccionContenedor">
        <div class="subtituloInicio">Novedades</div>
        <div class="textoInicio">Revisa las fechas importantes del próximo ciclo escolar, como entrega de documentos, inicio
            de clases y curso propedéutico..</div>
        <div class="cardNovedadesContenedor">
            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Admisión</div>
                    <div class="cardNovedadesSubtitulo">Mastría en Ciencia de Datos</div>
                    <img src="\imagenes\sinImagen.jpg" alt="Imagen 1">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Admisión</div>
                    <div class="cardNovedadesSubtitulo">Licenciatura en Estudios Mexicanos</div>
                    <img src="\imagenes\sinImagen.jpg" alt="Imagen 1">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Calendario</div>
                    <div class="cardNovedadesSubtitulo">Calendario escolar 2025-B</div>
                    <img src="\imagenes\sinImagen.jpg" alt="Imagen 1">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Calendario</div>
                    <div class="cardNovedadesSubtitulo">Curso de verano y propedéutico</div>
                   <img src="\imagenes\sinImagen.jpg" alt="Imagen 1">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Rescripción</div>
                    <div class="cardNovedadesSubtitulo">Licenciatura en Estudios Mexicanos 2025-B</div>
                    <img src="\imagenes\sinImagen.jpg" alt="Imagen 1">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Rescripción</div>
                    <div class="cardNovedadesSubtitulo">Mastría en Ciencia de Datos 2025-B</div>
                    <img src="\imagenes\sinImagen.jpg" alt="Imagen 1">
                    <a href="#" class="boton">Ver más</a>
                </div>
            </div>
            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Fechas Importanrtes</div>
                    <div class="cardNovedadesSubtitulo">LEM Y MCD</div>
                    <img src="\imagenes\sinImagen.jpg" alt="Imagen 1">
                    <a href="#" class="boton">Ver más</a>

                </div>
            </div>

            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Horarios</div>
                    <div class="cardNovedadesSubtitulo">LEM Y MCD</div>
                    <br>
                    <img src="\imagenes\sinImagen.jpg" alt="Imagen 1">
                    <a href="#" class="boton">Ver más</a>

                </div>
            </div>


        </div>
    </div>
   
    <div class="seccionContenedor">
        <div class="subtituloInicio">¿Quienes somos?</div>
        <div class="textoInicio"> El <b>SUNEO</b> es un sistema que descentraliza la educación superior en Oaxaca
            y promueve la excelencia en docencia, investigación y desarrollo. La UTM,
            como parte del sistema, impulsa conocimiento e innovación para fortalecer
            el entorno y por medio de su Universidad Virtual ofrece la Licenciatura en
            Estudios Mexicanos y la Maestría en Análisis de Datos</div>
    </div>
    <div id="ofertaEducativa"  style="height: 50px;"></div>
    <div class="seccionContenedor" >
        <div class="subtituloInicio">Oferta educativa</div>
        <div class="cardOfertaContenedor">
            <div class="OfertacardContenido">
                 <img src="\imagenes\escribiendo.jpg" alt="Imagen">
                <div class="CardOferta">
                    <div class="CardTituloOferta">Licenciatura de estudios mexicanos</div>
                    <a href="{{ url('/Licenciatura-en-Estudios-Mexicanos') }}" class="boton">Visitar</a>
                </div>
            </div>
            <div class="OfertacardContenido">
                 <img src="\imagenes\personaViendoComputador.jpg" alt="Imagen 1">
                <div class="CardOferta">
                    <div class="CardTituloOferta">Maestría en
                        Ciencias de Datos </div>
                    <a href="{{ url('/Maestria-En-Ciencia-De-Datos') }}" class="boton">Visitar</a>
                </div>
            </div>
        </div>

    </div>
    <div class="seccionContenedor">
        <div class="subtituloInicio">Recursos académicos</div>
        <div class="textoInicio"> Este apartado ofrece un repositorio con tutoriales y recursos académicos
            útiles para la elaboración de tesis.</div>
        <div class="cardRacursosContenedor">
            <div class="cardRecursosContenido">
                <img src="\imagenes\logo_rep.png" alt="logo_rep">
                <a href="http://repositorio.utm.mx:8080/">

                    <p>Repositorio UTM</p>
                </a>
            </div>


            <div class="cardRecursosContenido">
                <img src="\imagenes\play.png" alt="play">
                 <a href="">
                    <p>Como grabar con OBS</p>
                </a>

            </div>


            <div class="cardRecursosContenido">
              <img src="\imagenes\play.png" alt="play">
                <a href="">
                    <p>Uso de la tableta gráfica</p>
                </a>

            </div>


            <div class="cardRecursosContenido">
                <img src="\imagenes\sinImagen.jpg" alt="Imagen 1">
               <a href="{{ url('/Recursos-Academicos') . '#buscadoresAcademicos' }}">
                    <p>Apoyo para tesis</p>
                </a>

            </div>


            <div class="cardRecursosContenido">
                <img src="\imagenes\sinImagen.jpg" alt="Imagen 1">
                <a href="{{ url('/Recursos-Academicos') . '#apoyoTesis' }}">
                    <p>Buscadores académicos</p>
                </a>

            </div>
        </div>

    </div>

@endsection