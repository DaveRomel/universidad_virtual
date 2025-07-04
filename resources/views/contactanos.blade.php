@extends('layout')

@section('contenido')
    <div class="contactosContenedor">
        <div class="tituloContactanos">Contactos</div>
        <div class="descripcionContactanos">
            ¿Tienes dudas o necesitas apoyo? En este espacio encontrarás los medios para comunicarte con nosotros.
        </div>

        <div class="informacionContenedorContactanos">
            <div class="informacionItem" id="Telefonos">
                <div class="subtituloContactanos"><strong>Teléfonos:</strong></div>
                <div class="textoInformacionContactanos">
                    (953) 53 2 02 14 <br> (953) 53 2 03 99 <br> Extensión: 205
                </div>
            </div>

            <div class="informacionItem">
                <div class="subtituloContactanos">Correos electrónicos:</div>
                <div class="textoInformacionContactanos">
                    info@virtual.utm.mx <br> univirtual@gs.utm.mx
                </div>
            </div>

            <div class="informacionItem">
                <div class="subtituloContactanos" id="centrado">Dirección:</div>
                <div class="textoInformacionContactanos" id="centrado">
                    Av. Dr. Modesto Seara Vázquez, <br> No.1, Acatlima.CP. 69004 <br> Huajuapan de León, Oaxaca.
                </div>
            </div>
        </div>
    </div>


    <div class="directorioContenedor">
        <div class="tituloContactanos">Directorio</div>
        <div class="descripcionContactanos">Consulta aquí los datos de contacto del personal académico y administrativo para
            una comunicación directa y eficiente.</div>
        <div class="informacionContenedorDirectorio">
            <div class="informacionItemDirectorio">
                <div class="subtituloContactanos">Coordinador de la Universidad Virtual</div>
                <div class="textoInformacionContactanos">M.T.C.A Erik Germán Ramos Pérez<br> Instituto de Computación, Cubo
                    9<br>
                    coordinador@virtual.utm.mx</div>
            </div>

            <div class="informacionItemDirectorio">
                <div class="subtituloContactanos">Soporte administrativo</div>
                <div class="textoInformacionContactanos">Oficinas de la Universidad Virtual<br> Planta alta del Instituto de
                    Computación
                </div>
            </div>
            <div class="informacionItemDirectorio" id="telefono">
                <div class="subtituloContactanos">Teléfonos:</div>
                <div class="textoInformacionContactanos">(953) 53 2 02 14 <br> (953) 53 2 03 99 <br> Extensión: 781 o 205
                </div>
            </div>
        </div>

    </div>

    <div class="redesContenedor">
        <div class="tituloContactanos">Redes sociales</div>
        <div class="descripcionContactanos">Sigue nuestra página para mantenerte informado sobre convocatorias, fechas
            importantes, programas académicos y todo lo relacionado con la Universidad Virtual.</div>
        <div class="informacionRedesContenedor">
            <img src="\imagenes\logofacebook.png" alt="logofacebook">
            <div class="subtituloRedes">Universidad Virtual UTM</div>
        </div>
    </div>

    <div class="sitiosContenedor">
        <div class="tituloContactanos">Sitios de Interés</div>
        <div class="descripcionContactanos">Consulta enlaces directos a la Universidad Tecnológica de la Mixteca, el SUNEO y
            la
            oferta de posgrados UTM para ampliar tu información académica.</div>
        <div class="informacionSitiosContenedor">
            <div class="itemSitios">
                <img src="\imagenes\logo UTM fondo blanco.png" alt="logosuneo">
                <div class="subtituloSitios">SUNEO</div>
            </div>
            <div class="itemSitios">
                <img src="\imagenes\logo UTM fondo blanco.png" alt="logoutm">
                <div class="subtituloSitios">Universidad Tecnológica de la Mixteca</div>
            </div>

        </div>
    </div>
@endsection