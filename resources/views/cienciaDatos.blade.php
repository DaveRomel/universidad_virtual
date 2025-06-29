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
        <div class="titulo">Maestría en
 Ciencia de Datos</div>
        <div class="descripcion"> La Universidad Virtual (UV), ofrece esta maestría en línea para formar 
especialistas en el análisis de grandes volúmenes de datos, capaces
 de apoyar la toma de decisiones en sectores públicos y privados.</div>
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