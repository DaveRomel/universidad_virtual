let contenidoActual = null; // Variable global para llevar el control

function toggleContenido(id) {
    // Excepciones: estos ids no cargan contenido, abren modales
    if (id === "plan-estudios-maestria" || id === "plan-estudios-licenciatura" || id === "requisitos-maestria" || id === "requisitos-licenciatura") return;

    const contenido = document.getElementById("contenidoOferta");
    const lineaDivisoria = document.getElementById("lineaDivisoria");
    const isVisible = contenido.style.display === "block";

    if (isVisible && contenidoActual === id) {
        contenido.style.display = "none";
        lineaDivisoria.style.display = "block";
        contenidoActual = null;
        return;
    }

    contenido.style.display = "block";
    lineaDivisoria.style.display = "none";
    contenido.style.animation = "slideDown 0.5s ease-out";
    contenidoActual = id;

    switch (id) {
        case "perfil-aspirante-licenciatura":
            contenido.innerHTML = `
                    <p><ul>
                    <li>Interés por la cultura mexicana.</li><br>
                    <li>Interés por los procesos sociales, funcionamiento de la economía, sistema jurídico y político de México.</li><br>
                    <li>Buena expresión o bien disposición para desarrollar expresarse de manera verbal y escrita.</li><br>
                    <li>Interés para la investigación y lectura de textos relacionados temas literarios, históricos, de arte, económicos y políticos.</li><br>
                    <li>Colaboración en el desarrollo de actividades grupales.</li>
                    </ul></p>
                `;
            break;
        case "perfil-egreso-licenciatura":
            contenido.innerHTML = `
                    <p><ul> 
                    <li>El egresado es un profesional con un amplio conocimiento de México, desde una perspectiva multidisciplinaria, que le permite comprender bien su historia y su cultura, además comprender el funcionamiento de su economía, su sistema jurídico y político.</li>
                    <br>
                    <li>El egresado será capaz de integrarse al trabajo y/o dirección de organizaciones civiles y de empresas, particularmente las que se desenvuelven en el campo de las relaciones económicas entre México y Estados Unidos.</li>
                    <br>
                    <li>El egresado podrá desenvolverse profesionalmente en la investigación y la docencia dentro de instituciones educativas del Nivel Medio Superior y Superior, así como en aquellos organismos dedicados al estudio, la investigación y promoción de la cultura mexicana y chicana.</li>
                    </p>                `;
            break;
        case "campo-laboral-licenciatura":
            contenido.innerHTML = `
                    <p><ul> 
                    <li>El egresado será capaz de: Integrarse al trabajo y/o dirección de organizaciones civiles y de empresas, particularmente las que se desenvuelven en el campo de las relaciones económicas entre México y Estados Unidos. </li>
                    <br>
                    <li>Desenvolverse profesionalmente en la investigación y la docencia dentro de instituciones educativas del Nivel Medio Superior y Superior, así como en aquellos organismos dedicados al estudio, la investigación y promoción de la cultura mexicana y chicana.</li>
                    <br>
                    <li>Otro tipo de instituciones académicas y organismos que realizan investigación en el área de ciencias sociales y humanidades que requieren información sobre la cultura mexicana o que atienden diversos problemas sociales y de desarrollo de comunidades urbanas y rurales, incluso de índole diplomático. Organismos o centros relacionados con el turismo para promoción y difusión promoción de la cultura mexicana y chicana.</li>
                    </p>                `;
            break;
        case "ventajas-carrera-licenciatura":
            contenido.innerHTML = `
                    <p><ul> 
                    <li>Flexibilidad de horario (puede combinarse con actividades laborares, familiares, no hay horarios fijos).</li>
                    <li>Disponibilidad de material las 24 horas, durante 7 días a la semana (puede accesar a la plataforma e-larning en cualquier momento y hacer uso o descarga de los recursos de las materias que curse).</li>
                    <br>
                    <li>Reduce distancia (favorece la comunicación sin la necesidad del traslado físico, puede estar estudiando desde la comodidad de su casa).</li>
                    <li>Compromiso directo del estudiante (es el propio administrador y controla por lo tanto su aprendizaje y uso de tiempo).</li>
                    <br>
                    <li>Misma oportunidad de estudiar un Programa Educativo de formación profesional como el de modalidad presencial.</li>
                    <li>Ventajas propias de la modalidad contra el sistema tradicional presencial de edad, tiempo, lugar, actividades simultáneas, etc.</li>
                    </p>                `;
            break;
        case "formatos-licenciatura":
            contenido.innerHTML = `
                   <p><ul>
                    <li>Solicitud Inscripción a curso propedéutico (Aspirantes que han sido aceptados al curso propedeutico)<a href="/documentos/SIPROPE.pdf" target="_blank">(aquí)</a> <br>
                    <br>
                    <li>Solicitud Inscripción a primer semestre <a href="/documentos/SI.pdf" target="_blank">(aquí)</a>  <br>
                    <br>
                    <li>Solicitud Reinscripción <a href="/documentos/SR.pdf" target="_blank">(aquí)</a>  <br>
                    <br>
                    <li>Solicitud Reinscipción por materias <a href="/documentos/SIRM.pdf" target="_blank">(aquí)  </a>  <br>
                    <br>
                    <li>Solicitud Inscripción a primer semestre <a href="/documentos/SCVERANO.pdf" target="_blank">(aquí)</a> </ul></p> 
                `;
            break;
        case "becas-licenciatura":
            contenido.innerHTML = `
                    <p>En el marco de la gratuidad de la educación no se realizan pagos por ningun concepto (pago de ficha, insripción, reinscripción y colegiaturas mensuales)<br>
                 
                    Para poder titularse de la licenciatura debera cubrir con los siguiente puntos:<br>
                    
                    1.-Aprobar el total de asignaturas del PEP.<br>
                   <br>
                    2.-Realizar Estancias profesionales y Servicio Social <a href="">( documentación)</a>   <br>
                    <br>
                    3.-Elaborar la tesis y aprobar el examen profesional.<br>
                   <br>
                    4.-Cumplir con los trámites administrativos que establezca el Departamento de Servicios Escolares de la Universidad.</p>
                `;
            break;
        case "profesores-licenciatura":
            contenido.innerHTML = `
                     <p><ul>
                        <li><a onclick="abrirModalProfesor('NadiaRuiz')">Dra. Nadia Ruiz Muñoz</a></li>
                        <li><a onclick="abrirModalProfesor('RamonAmadeo')">Dr. Ramón Amadeo Castillo Ponce</a></li>
                        <li><a onclick="abrirModalProfesor('AnaMaria')">Mtra. Ana María Romero Valle</a></li>
                        <li><a onclick="abrirModalProfesor('OfeliaPineda')">Lic. Ofelia Pineda Ortiz</a></li>
                        <li><a onclick="abrirModalProfesor('CynthiaTorralba')">Lic. Cynthia Torralba Velasco</a></li>
                        <li><a onclick="abrirModalProfesor('DiegoMartinez')">Lic. Diego Martínez Lozada</a></li>
                        <li><a onclick="abrirModalProfesor('MarcosGerman')">Ing. Marcos German Corro Ortiz</a></li>
                      </ul>

                     </p>
                `;
            break;
        case "ciclo-escolar-licenciatura":
            contenido.innerHTML = `
                    <p>
                    <ul> 
                    <br>
                    <br>
                    <li> El curso propedeutico tiene una duración de 3 semanas, este se cursa en el periodo julio - agosto.</li>
                    <br>
                    <br>
                    <br>
                    <li> La carrera tiene una duración de 4 años, son 2 semestres anuales, el primer periodo es de agosto - diciembre y el segundo periodo de febrero - mayo.</li>
                    </ul>
                   </p>
                `;
            break;

/*/////////////////////////////////////maestria ///////////////////////////////////// */

        case "perfil-aspirante-maestria":
            contenido.innerHTML = `
                    <p>La maestría está dirigida a profesionales interesados en profundizar sus conocimientos para la extracción, gestión y análisis de grandes volúmenes de datos que coadyuven a la solución de problemáticas y toma de decisiones, y que han estudiado alguna de las siguientes áreas:
                    <ul>
                    <li>Áreas afines a computación (informática, ingeniería en software, ingeniería en computación o sistemas computacionales y ciencias de la computación).</li>
                    <br>
                    <li>Áreas afines a ciencias naturales y exactas (matemáticas, física, actuaría, biología y química).</li>
                    <br>
                    <li>Áreas afines a económico-administrativa (administración, economía y mercadotecnia).</li>
                    <br>
                    <li>Áreas afines a sociales y humanidades (psicología y trabajo social).</li>
                    </ul></p>
                `;
            break;
        case "perfil-egreso-maestria":
            contenido.innerHTML = `
                    <p><ul>
                    <li>El egresado tendrá la capacidad de analizar grandes volúmenes de datos de acuerdo a una metodología científica.</li>
                    <li>El egresado tendrá la habilidad de realizar gestión de base de datos y servicios en la nube.</li>
                    <li>El egresado podrá crear estrategias para la prevención y solución de problemas específicos con el apoyo de grandes volúmenes de datos y modelos de la ciencia de datos.</li>
                    <li>El egresado tendrá la capacidad de proponer soluciones que impacten positivamente en los resultados de las organizaciones al aplicar los conocimientos de ciencia de datos para dar soluciones innovadoras y crear estrategias sobre productos, procesos, operaciones y mercados.</li>
                    <li>El egresado conocerá metodologías para la interpretación de datos con base en la formulación de modelos matemáticos para la detección y predicción de patrones.</li>
                    <li>El egresado conocerá las implicaciones éticas y responsabilidades en el manejo de grandes volúmenes de datos.</li>
                    </ul></p>
                `;
            break;
        case "campo-laboral-maestria":
            contenido.innerHTML = `
                    <p>
                    El egresado de la Maestría en Ciencia de Datos tendrá las capacidades técnicas para: <br>
                    <ul>
                    <br>
                    <li>Crear estrategias para la prevención y solución de problemas específicos con el apoyo de grandes volúmenes de datos y modelos de aprendizaje máquina y profundo.</li>
                   <br><br>
                    <li>Ofrecer soluciones que impacten positivamente en los resultados de las organizaciones al aplicar los conocimientos de ciencia de datos para proponer estrategias y soluciones innovadoras.</li>
                    </ul></p>
                `;
            break;
        case "ventajas-carrera-maestria":
            contenido.innerHTML = `
                    <p>
                    <ul>
                    <li>Flexibilidad de horario (puede combinarse con actividades laborales, familiares), ya que no hay horarios fijos.</li>
                    <br>
                    <li>Disponibilidad de material (clases grabadas, material, lecturas, tareas, etcétera) los 7 días a la semana, durante las 24 horas (puede acceder a la plataforma e-larning en cualquier momento y hacer uso o descarga de los recursos de las materias que curse).</li>
                    <br>
                    <li>Reduce distancia (favorece la comunicación sin la necesidad del traslado físico, puede estar estudiando desde la comodidad de su hogar).</li>
                    <br>
                    <li>Compromiso directo del alumno (es el propio administrador y controla por lo tanto su aprendizaje y uso de tiempo).</li>
                    <br>
                    <li>Ventajas propias de la modalidad a distancia contra el sistema tradicional (presencial), tiempo, lugar, actividades simultáneas, etc.</li>
                    </ul></p>
                `;
            break;
        case "formatos-maestria":
            contenido.innerHTML = `
                   <p>
                    <ul>
                    <br><br>
                    <li>Solicitud de Inscripción <a href="/documentos/SIMCD.pdf" target="_blank">(aquí)</a></li>
                    <br><br>
                    <li>Solicitud de Reinscripción <a href="/documentos/FORMATORP.pdf" target="_blank">(aquí)</a></li>
                    </ul>
                </p> 
                `;
            break;
        case "becas-maestria":
            contenido.innerHTML = `
                    <p>Contenido no disponible</p>
                `;
            break;
        case "profesores-maestria":
            contenido.innerHTML = `
                    <p>
                    <ul>
                        <li><a onclick ="abrirModalProfesor('PedroAlberto')">Dr. Pedro Alberto Antonio Soto</a></li>
                        <li><a onclick ="abrirModalProfesor('ChristianEduardo')">Dr. Christian Eduardo Millán Hernández</a></li>
                        <li><a onclick ="abrirModalProfesor('AnaDelia')">M.C. Ana Delia Olvera Cervantes</a></li>
                        <li><a onclick ="abrirModalProfesor('TomasPerez')">Dr. Tomás Pérez Becerra</a></li>
                        <li><a onclick ="abrirModalProfesor('ErikGerman')">M.T.C.A. Erik Germán Ramos Pérez</a></li>
                        <li><a onclick ="abrirModalProfesor('EduardoSanchez')">Dr. Eduardo Sánchez Soto</a></li>
                    </ul>
                    </p>
                `;
            
            break;
        case "ciclo-escolar-maestria":
            contenido.innerHTML = `
                    <p>
                    <ul>
                    <br><br>
                    <li> El Curso Propedéutico tiene una duración de 7 semanas, este se cursa en el periodo de agosto-septiembre.</li>
                    <br><br>
                    <li>La Maestría en Ciencia de Datos tiene una duración de 2 años (dos periodos semestrales al año), el primer periodo es de octubre-febrero y el segundo periodo de marzo-julio.</p></li>
                    </ul>
                   
                `;
            break;
        default:
            contenido.innerHTML = ``;
    }
}

window.onload = function() {
    if (typeof idInicial !== 'undefined') {
        toggleContenido(idInicial);
    }
};


