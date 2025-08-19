@extends('layout')

@section('contenido')

    <div class="videoContenedor">
        <video controls autoplay muted playsinline>
            <source src="\videos\Universidad_Virtual_ Maestria_en_Ciencia_de_Datos.mp4" type="video/mp4">
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

        <div class="tituloOferta">Maestría en Ciencia de Datos</div>
        <div class="descripcion">
            La <strong>Universidad Virtual</strong> ofrece esta maestría en línea para formar
            especialistas en el análisis de grandes volúmenes de datos, capaces
            de apoyar la toma de decisiones en sectores públicos y privados.
        </div>

        <div class="botonesContenedor">

            {{-- Fila 1 --}}
            <div class="fila-botones">
                <div class="boton-wrapper">
                    <button class="boton2" onclick="toggleContenido('perfil-aspirante-maestria')">
                        Perfil del Aspirante
                    </button>
                    <div class="recuadro"></div>
                </div>

                <div class="boton-wrapper">
                    <button class="boton2" onclick="toggleContenido('perfil-egreso-maestria')">
                        Perfil de Egreso
                    </button>
                    <div class="recuadro"></div>
                </div>

                <div class="boton-wrapper">
                    <button class="boton2" onclick="toggleContenido('campo-laboral-maestria')">
                        Campo Laboral
                    </button>
                    <div class="recuadro"></div>
                </div>

                <div class="boton-wrapper">
                    <button class="boton2" onclick="toggleContenido('ventajas-carrera-maestria')">
                        Ventajas de estudiar esta carrera
                    </button>
                    <div class="recuadro"></div>
                </div>

                <div class="boton-wrapper">
                    <button class="boton2" onclick="abrirModal('plan-estudios-maestria')">
                        Plan de Estudios
                    </button>
                </div>
            </div>

            {{-- Línea divisoria (solo escritorio) --}}
            <div class="linea-divisoria" id="lineaDivisoria"></div>

            {{-- Contenedor central dinámico (escritorio) --}}
            <div id="contenidoOferta" class="contenidoOferta" style="display: none;"></div>

            {{-- Fila 2 --}}
            <div class="fila-botones">
                <div class="boton-wrapper">
                    <button class="boton2" onclick="abrirModal('requisitos-maestria')">
                        Requisitos para nuevo ingreso
                    </button>
                    <div class="recuadro"></div>
                </div>

                <div class="boton-wrapper">
                    <button class="boton2" onclick="toggleContenido('formatos-maestria')">
                        Formatos para inscripción y reinscripción
                    </button>
                    <div class="recuadro"></div>
                </div>

                <!--  becas, descomentar -->
                <!--
              <div class="boton-wrapper">
                <button class="boton2" onclick="toggleContenido('becas-maestria')">
                  Becas/Titulación
                </button>
                <div class="recuadro"></div>
              </div>
              -->

                <div class="boton-wrapper">
                    <button class="boton2" onclick="toggleContenido('profesores-maestria')">
                        Profesores
                    </button>
                    <div class="recuadro"></div>
                </div>

                <div class="boton-wrapper">
                    <button class="boton2" onclick="toggleContenido('ciclo-escolar-maestria')">
                        Ciclo escolar
                    </button>
                    <div class="recuadro"></div>
                </div>
            </div>

        </div>
    </div>

    {{-- Modal de profesores --}}
    <div id="modalProfesor" class="modal-Profesor">
        <div class="modal-contenido-Profesor">
            <span class="modal-cerrar" onclick="cerrarModalProfesor()">&times;</span>
            <h3 id="modalTitulo"></h3>
            <img id="modalImagen" src="" alt="Imagen informativa">
            <p id="modalTexto"></p>
        </div>
    </div>

    <script>
        var idInicial = 'perfil-aspirante-maestria';
    </script>
    <script src="/js/oferta.js"></script>

@endsection