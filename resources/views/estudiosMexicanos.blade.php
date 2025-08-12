@extends('layout')

@section('contenido')

<div class="videoContenedor">
    <video controls autoplay muted playsinline>
        <source src="\videos\Cortinilla de Licenciatura en Estudios Mexicanos.mp4" type="video/mp4">
        Tu navegador no soporta el formato de video.
    </video>
</div>

<div class="ContenedorSeccion">

    {{-- Modal general --}}
    <div id="modalGeneral" class="modal" style="display: none;">
        <div class="modal-contenido">
            <span class="modal-cerrar" onclick="cerrarModal()">&times;</span>
            <div id="modalContenido"></div>
        </div>
    </div>

    <div class="tituloOferta">Licenciatura en Estudios Mexicanos</div>
    <div class="descripcion">
        La <strong>Universidad Virtual</strong> (UV) a través de su modalidad en línea, ofrece la
        Licenciatura en Estudios Mexicanos, orientada al fortalecimiento cultural,
        la identidad nacional y la proyección profesional de sus egresados.
    </div>

    <div class="botonesContenedor">

        {{-- Fila 1 --}}
        <div class="fila-botones">
            <div class="boton-wrapper">
                <button class="boton2" onclick="toggleContenido('perfil-aspirante-licenciatura')">Perfil del Aspirante</button>
                <div class="recuadro"></div>
            </div>
            <div class="boton-wrapper">
                <button class="boton2" onclick="toggleContenido('perfil-egreso-licenciatura')">Perfil de Egreso</button>
                <div class="recuadro"></div>
            </div>
            <div class="boton-wrapper">
                <button class="boton2" onclick="toggleContenido('campo-laboral-licenciatura')">Campo Laboral</button>
                <div class="recuadro"></div>
            </div>
            <div class="boton-wrapper">
                <button class="boton2" onclick="toggleContenido('ventajas-carrera-licenciatura')">Ventajas de estudiar esta carrera</button>
                <div class="recuadro"></div>
            </div>
            <div class="boton-wrapper">
                <button class="boton2" onclick="abrirModal('plan-estudios-licenciatura')">Plan de estudios</button>
                <div class="recuadro"></div>
            </div>
        </div>

        {{-- Línea divisoria visible solo en escritorio --}}
        <div class="linea-divisoria" id="lineaDivisoria" style="display: none;"></div>

        {{-- Icono visible solo en móvil --}}
        <div class="icono-movil">
            <i class="fa fa-chevron-down"></i>
        </div>

        <div id="contenidoOferta" class="contenidoOferta" style="display: block;"></div>

        {{-- Fila 2 --}}
        <div class="fila-botones">
            <div class="boton-wrapper">
                <button class="boton2" onclick="abrirModal('requisitos-licenciatura')">Requisitos para nuevo ingreso</button>
                <div class="recuadro"></div>
            </div>
            <div class="boton-wrapper">
                <button class="boton2" onclick="toggleContenido('formatos-licenciatura')">Formatos para inscripción y reinscripción</button>
                <div class="recuadro"></div>
            </div>
            <div class="boton-wrapper">
                <button class="boton2" onclick="toggleContenido('becas-licenciatura')">Titulación</button>
                <div class="recuadro"></div>
            </div>
            <div class="boton-wrapper">
                <button class="boton2" onclick="toggleContenido('profesores-licenciatura')">Profesores</button>
                <div class="recuadro"></div>
            </div>
            <div class="boton-wrapper">
                <button class="boton2" onclick="toggleContenido('ciclo-escolar-licenciatura')">Ciclo escolar</button>
                <div class="recuadro"></div>
            </div>
        </div>
    </div>
</div>

{{-- Modal profesor --}}
<div id="modalProfesor" class="modal-Profesor">
    <div class="modal-contenido-Profesor">
        <span class="modal-cerrar" onclick="cerrarModalProfesor()">&times;</span>
        <h3 id="modalTitulo"></h3>
        <img id="modalImagen" src="" alt="Imagen informativa">
        <p id="modalTexto"></p>
    </div>
</div>

<script>
  var idInicial = 'perfil-aspirante-licenciatura';
</script>
<script src="/js/oferta.js"></script>

@endsection
