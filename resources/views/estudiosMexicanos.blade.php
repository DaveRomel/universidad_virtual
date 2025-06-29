@extends('layout')

@section('contenido')

    <div class="VideoContenedor">
        <video controls>
            <source src="video1.mp4" type="video/mp4">
            Tu navegador no soporta el formato de video.
        </video>
    </div>
    <div class="rectanguloRosa"></div>
    <div class="ContenedorSeccion">
        <div class="titulo">Licenciatura en
            Estudios Mexicanos</div>
        <div class="descripcion"> La Universidad Virtual (UV) a través de su modalidad en línea, ofrece la
            Licenciatura en Estudios Mexicanos, orientada al fortalecimiento cultural,
            la identidad nacional y la proyección profesional de sus egresados</div>
        <div class="botonesContenedor">
            <div class="contenedor-botones">
                <!-- Botones -->
                <button class="boton2" onclick="mostrarContenido('perfil-aspirante')">Perfil del Aspirante</button>
                <button class="boton2" onclick="mostrarContenido('perfil-egreso')">Perfil de Egreso</button>
                <button class="boton2" onclick="mostrarContenido('campo-laboral')">Campo Laboral</button>
                <button class="boton2" onclick="mostrarContenido('ventajas-carrera')">Ventajas de estudiar esta
                    carrera</button>
                <button class="boton2" onclick="mostrarContenido('plan-estudios')">Plan de estudios</button>
                <button class="boton2" onclick="mostrarContenido('requisitos')">Requisitos para nuevo ingreso</button>
                <button class="boton2" onclick="mostrarContenido('formatos')">Formatos para inscripción y
                    reinscripción</button>
                <button class="boton2" onclick="mostrarContenido('becas')">Becas/Titulación</button>
                <button class="boton2" onclick="mostrarContenido('profesores')">Profesores</button>
                <button class="boton2" onclick="mostrarContenido('ciclo-escolar')">Ciclo escolar</button>
            </div>

            <!-- Área donde se mostrará el contenido -->
            <div class="contenido">
            </div>

        </div>
    </div>

@endsection