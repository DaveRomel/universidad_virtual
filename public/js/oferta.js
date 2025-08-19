document.addEventListener(
  "click",
  function (e) {
    const btn = e.target.closest(".boton2");
    if (btn) window.__ultimoBotonClicado = btn;
  },
  true
);

window.contenidoActual = window.contenidoActual || null;


function esMovil() {
  return window.matchMedia("(max-width: 480px)").matches;
}

function toggleContenido(id, boton = null) {

  if (!boton && window.__ultimoBotonClicado) {
    boton = window.__ultimoBotonClicado;
  }

 
  if (
    id === "plan-estudios-maestria" ||
    id === "plan-estudios-licenciatura" ||
    id === "requisitos-maestria" ||
    id === "requisitos-licenciatura"
  ) {
    return;
  }

  if (esMovil() && boton) {
   
    const wrapper = boton.closest(".boton-wrapper");
    if (!wrapper) return;

    const recuadro = wrapper.querySelector(".recuadro");
    if (!recuadro) return;

    const estabaVisible = recuadro.style.display === "block";

  
    document.querySelectorAll(".recuadro").forEach((r) => (r.style.display = "none"));
    document.querySelectorAll(".boton2.activo").forEach((b) => b.classList.remove("activo"));

    if (estabaVisible) {
  
      recuadro.style.display = "none";
      boton.classList.remove("activo");
      return;
    }


    recuadro.innerHTML = obtenerContenido(id);
    recuadro.style.display = "block";
    recuadro.style.animation = "slideDown 0.5s ease-out";
    boton.classList.add("activo");


    const contenidoCentral = document.getElementById("contenidoOferta");
    const lineaDivisoria = document.getElementById("lineaDivisoria");
    if (contenidoCentral) contenidoCentral.style.display = "none";
    if (lineaDivisoria) lineaDivisoria.style.display = "none";

    window.contenidoActual = id;
    return;
  }


  const contenido = document.getElementById("contenidoOferta");
  const lineaDivisoria = document.getElementById("lineaDivisoria");
  if (!contenido || !lineaDivisoria) return;

  const isVisible = contenido.style.display === "block";
  if (isVisible && window.contenidoActual === id) {
   
    contenido.style.display = "none";
    lineaDivisoria.style.display = "block";
    window.contenidoActual = null;
    document.querySelectorAll(".boton2.activo").forEach((b) => b.classList.remove("activo"));
    return;
  }


  document.querySelectorAll(".recuadro").forEach((r) => (r.style.display = "none"));
  document.querySelectorAll(".boton2.activo").forEach((b) => b.classList.remove("activo"));

 
  contenido.style.display = "block";
  lineaDivisoria.style.display = "none";
  contenido.style.animation = "slideDown 0.5s ease-out";
  contenido.innerHTML = obtenerContenido(id);
  window.contenidoActual = id;

  if (boton) boton.classList.add("activo");
}

function obtenerContenido(id) {
  switch (id) {
    // ====== LICENCIATURA ======
    case "perfil-aspirante-licenciatura":
      return `
        <p><ul>
          <li>Interés por la cultura mexicana.</li><br>
          <li>Interés por los procesos sociales, funcionamiento de la economía, sistema jurídico y político de México.</li><br>
          <li>Buena expresión o disposición para desarrollar expresión verbal y escrita.</li><br>
          <li>Interés por investigación y lectura de textos literarios, históricos, de arte, económicos y políticos.</li><br>
          <li>Colaboración en el desarrollo de actividades grupales.</li>
        </ul></p>
      `;
    case "perfil-egreso-licenciatura":
      return `
        <p><ul> 
          <li>Amplio conocimiento de México desde una perspectiva multidisciplinaria.</li><br>
          <li>Capacidad de integrarse al trabajo y/o dirección de organizaciones y empresas, especialmente en relaciones México–EE.UU.</li><br>
          <li>Desempeño en investigación y docencia en instituciones educativas y organismos de cultura mexicana y chicana.</li>
        </ul></p>
      `;
    case "campo-laboral-licenciatura":
      return `
        <p><ul> 
          <li>Organizaciones civiles y empresas con enfoque en relaciones económicas México–EE.UU.</li><br>
          <li>Investigación y docencia en nivel medio superior y superior; organismos dedicados a cultura mexicana y chicana.</li><br>
          <li>Instituciones y centros relacionados con ciencias sociales/humanidades, turismo y promoción cultural.</li>
        </ul></p>
      `;
    case "ventajas-carrera-licenciatura":
      return `
        <p><ul> 
          <li>Flexibilidad de horario (sin horarios fijos).</li>
          <li>Material disponible 24/7 en la plataforma e-learning.</li><br>
          <li>Reducción de distancias (estudia desde casa).</li>
          <li>Compromiso directo del estudiante con su aprendizaje.</li><br>
          <li>Mismas oportunidades de formación que la modalidad presencial.</li>
          <li>Ventajas de modalidad a distancia: tiempo, lugar, actividades simultáneas, etc.</li>
        </ul></p>
      `;
    case "formatos-licenciatura":
      return `
        <p><ul>
          <li>Solicitud Inscripción a curso propedéutico (Aspirantes aceptados) <a href="/documentos/SIPROPE.pdf" target="_blank">(aquí)</a></li><br>
          <li>Solicitud Inscripción a primer semestre <a href="/documentos/SI.pdf" target="_blank">(aquí)</a></li><br>
          <li>Solicitud Reinscripción <a href="/documentos/SR.pdf" target="_blank">(aquí)</a></li><br>
          <li>Solicitud Reinscipción por materias <a href="/documentos/SIRM.pdf" target="_blank">(aquí)</a></li><br>
          <li>Solicitud Inscripción a verano <a href="/documentos/SCVERANO.pdf" target="_blank">(aquí)</a></li>
        </ul></p>
      `;
    case "becas-licenciatura":
      return `
        <p>
          En el marco de la gratuidad de la educación no se realizan pagos por ningún concepto (ficha, inscripción, reinscripción, colegiaturas).<br><br>
          Para titularse se requiere:<br><br>
          1) Aprobar el total de asignaturas del PEP.<br>
          2) Realizar Estancias profesionales y Servicio Social <a href="">(documentación)</a>.<br>
          3) Elaborar la tesis y aprobar el examen profesional.<br>
          4) Cumplir con los trámites administrativos del Departamento de Servicios Escolares.
        </p>
      `;
    case "profesores-licenciatura":
      return `
        <p><ul>
          <li><a onclick="abrirModalProfesor('NadiaRuiz')">Dra. Nadia Ruiz Muñoz</a></li>
          <li><a onclick="abrirModalProfesor('RamonAmadeo')">Dr. Ramón Amadeo Castillo Ponce</a></li>
          <li><a onclick="abrirModalProfesor('AnaMaria')">Mtra. Ana María Romero Valle</a></li>
          <li><a onclick="abrirModalProfesor('OfeliaPineda')">Lic. Ofelia Pineda Ortiz</a></li>
          <li><a onclick="abrirModalProfesor('CynthiaTorralba')">Lic. Cynthia Torralba Velasco</a></li>
          <li><a onclick="abrirModalProfesor('DiegoMartinez')">Lic. Diego Martínez Lozada</a></li>
          <li><a onclick="abrirModalProfesor('MarcosGerman')">Ing. Marcos German Corro Ortiz</a></li>
        </ul></p>
      `;
    case "ciclo-escolar-licenciatura":
      return `
        <p><ul>
          <br><li>Curso propedéutico: 3 semanas (julio–agosto).</li><br><br>
          <li>Carrera: 4 años, 2 semestres al año: agosto–diciembre y febrero–mayo.</li>
        </ul></p>
      `;

    // ====== MAESTRÍA ======
    case "perfil-aspirante-maestria":
      return `
        <p>La maestría está dirigida a profesionales interesados en extracción, gestión y análisis de grandes volúmenes de datos…
        <ul>
          <li>Computación e informática.</li><li>Ciencias exactas.</li><li>Económico-administrativas.</li><li>Sociales y humanidades.</li>
        </ul></p>
      `;
    case "perfil-egreso-maestria":
      return `
        <p><ul>
          <li>Analizar grandes volúmenes de datos con metodología científica.</li>
          <li>Gestión de bases de datos y servicios en la nube.</li>
          <li>Estrategias basadas en modelos de ciencia de datos.</li>
          <li>Modelado matemático para detección/predicción de patrones.</li>
          <li>Implicaciones éticas en manejo de datos.</li>
        </ul></p>
      `;
    case "campo-laboral-maestria":
      return `
        <p>Capacidades técnicas para:<ul>
          <li>Prevención/solución de problemas con ML/DL y big data.</li>
          <li>Impacto en resultados mediante estrategias de datos.</li>
        </ul></p>
      `;
    case "ventajas-carrera-maestria":
      return `
        <p><ul>
          <li>Flexibilidad (sin horarios fijos).</li><li>Material 24/7.</li><li>Estudio a distancia.</li>
          <li>Autogestión del aprendizaje.</li><li>Ventajas de modalidad a distancia.</li>
        </ul></p>
      `;
    case "formatos-maestria":
      return `
        <p><ul>
          <li>Solicitud de Inscripción <a href="/documentos/SIMCD.pdf" target="_blank">(aquí)</a></li><br>
          <li>Solicitud de Reinscripción <a href="/documentos/FORMATORP.pdf" target="_blank">(aquí)</a></li>
        </ul></p>
      `;
    case "becas-maestria":
      return `<p>Contenido no disponible</p>`;
    case "profesores-maestria":
      return `
        <p><ul>
          <li><a onclick ="abrirModalProfesor('PedroAlberto')">Dr. Pedro Alberto Antonio Soto</a></li>
          <li><a onclick ="abrirModalProfesor('ChristianEduardo')">Dr. Christian Eduardo Millán Hernández</a></li>
          <li><a onclick ="abrirModalProfesor('AnaDelia')">M.C. Ana Delia Olvera Cervantes</a></li>
          <li><a onclick ="abrirModalProfesor('TomasPerez')">Dr. Tomás Pérez Becerra</a></li>
          <li><a onclick ="abrirModalProfesor('ErikGerman')">M.T.C.A. Erik Germán Ramos Pérez</a></li>
          <li><a onclick ="abrirModalProfesor('EduardoSanchez')">Dr. Eduardo Sánchez Soto</a></li>
        </ul></p>
      `;
    case "ciclo-escolar-maestria":
      return `
        <p><ul>
          <br><li>Propedéutico: 7 semanas (agosto–septiembre).</li><br>
          <li>2 años: octubre–febrero y marzo–julio.</li>
        </ul></p>
      `;

    default:
      return ``;
  }
}

window.onload = function () {
  if (typeof idInicial !== "undefined" && !esMovil()) {
    toggleContenido(idInicial);
  }
};
