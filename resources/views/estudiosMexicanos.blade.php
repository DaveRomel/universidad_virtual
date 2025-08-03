@extends('layout')

@section('contenido')

    <div class="videoContenedor">
        <video controls autoplay muted playsinline>
            <source src="\videos\Cortinilla de Licenciatura en Estudios Mexicanos.mp4" type="video/mp4">
            Tu navegador no soporta el formato de video.
        </video>
    </div>

    <div class="ContenedorSeccion">

        <div id="modalGeneral" class="modal" style="display: none;">
            <div class="modal-contenido">
             <span class="modal-cerrar" onclick="cerrarModal()">&times;</span>
              <div id="modalContenido"></div>
            </div>
        </div>
        <div class="tituloOferta">Licenciatura en Estudios Mexicanos</div>
        <div class="descripcion"> La <strong>Universidad Virtual</strong> (UV) a través de su modalidad en línea, ofrece la
            Licenciatura en Estudios Mexicanos, orientada al fortalecimiento cultural,
            la identidad nacional y la proyección profesional de sus egresados</div>
        <div class="botonesContenedor">

            <div class="fila-botones">
                <button class="boton2" onclick="toggleContenido('perfil-aspirante-licenciatura')">Perfil del Aspirante</button>
                <button class="boton2" onclick="toggleContenido('perfil-egreso-licenciatura')">Perfil de Egreso</button>
                <button class="boton2" onclick="toggleContenido('campo-laboral-licenciatura')">Campo Laboral</button>
                <button class="boton2" onclick="toggleContenido('ventajas-carrera-licenciatura')">Ventajas de estudiar esta carrera</button>
                <button class="boton2" onclick="abrirModal('plan-estudios-licenciatura')">Plan de estudios</button>
            </div>

            <div class="linea-divisoria" id="lineaDivisoria"></div>
          
            <div id="contenidoOferta" class="contenidoOferta" style="display: none;">
            
            </div>

            <div class="fila-botones">
                <button class="boton2" onclick="abrirModal('requisitos-licenciatura')">Requisitos para nuevo ingreso</button>
                <button class="boton2" onclick="toggleContenido('formatos-licenciatura')">Formatos para inscripción y
                    reinscripción</button>
                <button class="boton2" onclick="toggleContenido('becas-licenciatura')">Titulación</button>
                <button class="boton2" onclick="toggleContenido('profesores-licenciatura')">Profesores</button>
                <button class="boton2" onclick="toggleContenido('ciclo-escolar-licenciatura')">Ciclo escolar</button>
            </div>
        </div>

    </div>

    <div id="modalProfesor" class="modal-Profesor">
        <div class="modal-contenido-Profesor">
        <span class="modal-cerrar" onclick="cerrarModalProfesor()">&times;</span>
        <h3 id="modalTitulo"></h3>
        <img id="modalImagen" src="" alt="Imagen informativa">
        <p id="modalTexto"></p>
    </div>
</div>
@endsection