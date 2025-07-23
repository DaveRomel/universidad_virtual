@extends('layout')

@section('contenido')

    <div class="videoContenedor">
        <video controls autoplay muted playsinline>
            <source src="\videos\Cortinilla de Ciencia de datos.mp4" type="video/mp4">
            Tu navegador no soporta el formato de video.
        </video>
    </div>

    <div class="ContenedorSeccion">
        <!-- <div class="rectanguloRosa"></div> -->
        <div class="tituloOferta">Maestria en Ciencia de Datos</div>
        <div class="descripcion"> La <strong>Universidad Virtual</strong> (UV) ofrece esta maestría en línea para formar 
especialistas en el análisis de grandes volúmenes de datos, capaces
 de apoyar la toma de decisiones en sectores públicos y privados.</div>
        <div class="botonesContenedor">
            <div class="fila-botones">
                <button class="boton2" onclick="toggleContenido('perfil-aspirante-maestria')">Perfil del Aspirante</button>
                <button class="boton2" onclick="toggleContenido('perfil-egreso-maestria')">Perfil de Egreso</button>
                <button class="boton2" onclick="toggleContenido('campo-laboral-maestria')">Campo Laboral</button>
                <button class="boton2" onclick="toggleContenido('ventajas-carrera-maestria')">Ventajas de estudiar esta
                    carrera</button>
                <button class="boton2" onclick="toggleContenido('plan-estudios-maestria')">Plan de estudios</button>
            </div>

            <div class="linea-divisoria" id="lineaDivisoria"></div>
            <!-- Contenido dinámico -->
            <div id="contenidoOferta" class="contenidoOferta" style="display: none;">
                <!-- Aquí se inyectará el texto -->
            </div>

            <div class="fila-botones">
                <button class="boton2" onclick="toggleContenido('requisitos-maestria')">Requisitos para nuevo ingreso</button>
                <button class="boton2" onclick="toggleContenido('formatos-maestria')">Formatos para inscripción y
                    reinscripción</button>
                <button class="boton2" onclick="toggleContenido('becas-maestria')">Becas/Titulación</button>
                <button class="boton2" onclick="toggleContenido('profesores-maestria')">Profesores</button>
                <button class="boton2" onclick="toggleContenido('ciclo-escolar-maestria')">Ciclo escolar</button>
            </div>
        </div>




    </div>

@endsection