@extends('layout')

@section('contenido')
    <div class="tituloInicio">Bienvenidos a nuestro Portal Educativo en Línea</div>
   
    <div class="seccionContenedor">
        <div class="subtituloInicio">Novedades</div>
        <div class="textoInicio">Revisa las fechas importantes del próximo ciclo escolar, como entrega de documentos, inicio
            de clases y curso propedéutico.
        </div>
        <div class="cardNovedadesContenedor">
            
            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Admisión</div>
                    <div class="cardNovedadesSubtitulo">Mastría en Ciencia de Datos</div>
                    <br>
                    <img src="\imagenes\posterCienciasDatos.jpg" alt="Imagen 1" >
                    <a onclick="abrirModalInformativo('admisionMaestria')" class="botonCardNovedades">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Admisión</div>
                    <div class="cardNovedadesSubtitulo">Licenciatura en Estudios Mexicanos</div>
                    <br>
                    <img src="\imagenes\admisionLicenciatura.png" alt="Imagen 1">
                    <a onclick="abrirModalInformativo('admisionLicenciatura')" class="botonCardNovedades">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Calendario</div>
                    <div class="cardNovedadesSubtitulo">Calendario escolar 2025-2026</div>
                    <br>
                    <img src="\imagenes\calendarioEscolar.png" alt="Imagen 1">
                    <a href="https://www.utm.mx/web/node/613" class="botonCardNovedades">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Calendario</div>
                    <div class="cardNovedadesSubtitulo">Curso de verano y propedéutico</div>
                    <br>
                   <img src="\imagenes\calendarioVerano.png" alt="Imagen 1">
                    <a onclick="abrirModalInformativo('calendarioVerano')" class="botonCardNovedades">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Rescripción</div>
                    <div class="cardNovedadesSubtitulo">Licenciatura en Estudios Mexicanos 2025-B</div>
                    <img src="\imagenes\ReinscripcionLicenciatura.png" alt="Imagen 1">
                    <a onclick="abrirModalInformativo('rescripcionLicenciatura')" class="botonCardNovedades">Ver más</a>
                </div>
            </div>


            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Rescripción</div>
                    <div class="cardNovedadesSubtitulo">Mastría en Ciencia de Datos 2025-B</div>
                    <br>
                    <img src="\imagenes\ReinscripcionMaestria.png" alt="Imagen 1">
                    <a onclick="abrirModalInformativo('rescripcionMaestria')" class="botonCardNovedades">Ver más</a>
                </div>
            </div>
            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Fechas Importantes</div>
                    <div class="cardNovedadesSubtitulo">LEM Y MCD</div>
                    
                    <img src="\imagenes\LEMFechasImportantes.png" alt="Imagen 1">
                    <a onclick="abrirModalInformativo('fechasImportantes')" class="botonCardNovedades">Ver más</a>

                </div>
            </div>

            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Horarios</div>
                    <div class="cardNovedadesSubtitulo">LEM Y MCD</div>
                    <br>
                    <img src="\imagenes\horarios.png" alt="Imagen 1">
                    <!--<a onclick="abrirModalInformativo('horarios')" class="botonCardNovedades">Ver más</a>-->
                    <a href="https://www.utm.mx/~horarios" class="botonCardNovedades">Ver más</a>
                </div>
            </div>
            <div class="cardNovedades">

                <div class="cardNovedadesContenido">
                    <div class="cardNovedadesTitulo">Repositorio</div>
                    <br><br>
                    <img src="\imagenes\logo_rep.png" alt="logo_rep" >
                    <a href="http://repositorio.utm.mx:8080/" class="botonCardNovedades">Ver más</a>

                </div>
            </div>

        </div>
    </div>
   
    <div class="seccionContenedor">
        <div class="subtituloInicio">¿Quiénes somos?</div>
        <div class="textoInicio"> El <b>SUNEO</b> es un sistema que descentraliza la educación superior en Oaxaca
            y promueve la excelencia en docencia, investigación y desarrollo. La <b>UTM</b>,
            como parte del sistema, impulsa conocimiento e innovación para fortalecer
            el entorno y por medio de su <b>Universidad Virtual</b> ofrece la Licenciatura en
            Estudios Mexicanos y la Maestría en Ciencia de Datos.</div>
    </div>
    <div id="ofertaEducativa"  style="height: 50px;"></div>
    <div class="seccionContenedor" >
        <div class="subtituloInicio">Oferta educativa</div>
        <div class="cardOfertaContenedor">
            <div class="OfertacardContenido">
                 <img src="\imagenes\escribiendo.jpg" alt="Imagen">
                <div class="CardOferta">
                    <div class="CardTituloOferta">Licenciatura de <br> estudios mexicanos</div>
                    <a href="{{ url('/Licenciatura-en-Estudios-Mexicanos') }}" class="boton">Visitar</a>
                </div>
            </div>
            <div class="OfertacardContenido">
                 <img src="\imagenes\personaViendoComputador.jpg" alt="Imagen 1">
                <div class="CardOferta">
                    <div class="CardTituloOferta">Maestría en <br>
                        Ciencias de Datos </div>
                    <a href="{{ url('/Maestria-En-Ciencia-De-Datos') }}" class="boton">Visitar</a>
                </div>
            </div>
        </div>

    </div>

    <div id="modalInformativo" class="modal-informativo">
        <div class="modal-contenido-informativo">
            <span class="modal-cerrar" onclick="cerrarModalInformativo()">&times;</span>
            <h3 id="modalTitulo"></h3>
            <img id="modalImagen" src="" alt="Imagen informativa">
            <p id="modalTexto"></p>
        </div>
    </div>
  <!--   <div class="seccionContenedor">
        <div class="subtituloInicio">Recursos académicos</div>
        <div class="textoInicio"> Este apartado ofrece un repositorio con tutoriales y recursos académicos
            útiles para la elaboración de tesis.</div>
        <div class="cardRacursosContenedor">
            <div class="cardRecursosContenido">
                

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

    </div> -->

@endsection