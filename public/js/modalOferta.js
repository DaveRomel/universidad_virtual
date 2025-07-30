// Contenidos centralizados en un objeto
const contenidosModal = {
  "plan-estudios-maestria": `
    <div class="contenedor-dos-columnas">
    <div class="columna">
      <h3>Semestre 1</h3>
      
        <a href="#">Proyecto Aplicado I.</a> <br>
        <a href="#">Base de Datos.</a><br>
        <a href="#">Probabilidad y Estadística para Ciencia de Datos.</a><br>
        <a href="#">Limpieza y Manipulación de Datos.</a><br>
      
      <h3>Semestre 2</h3>

        <a href="#">Proyecto Aplicado II.</a><br>
        <a href="#">Programación para Ciencia de Datos.</a><br>
        <a href="#">Visualización de Datos.</a><br>
        <a href="#">Introducción a Aprendizaje Máquina.</a>
     
      <h3>Semestre 3</h3>
    
        <a href="#">Proyecto Aplicado III.</a><br>
        <a href="#">Datos Masivos.</a><br>
        <a href="#">Análisis Multivariante de Datos.</a><br>
        <a href="#">Optativa I.</a>
   
    </div>

    <div class="columna">
      <h3>Semestre 4</h3>
     
        <a href="#">Taller de Tesis.</a><br>
        <a href="#">Optativa II.</a><br>
     
      <h3>Optativa I: Analista de Datos</h3>
      
        <a href="#">Narración de Historias.</a><br>
        <a href="#">Tópicos Avanzados de Aprendizaje Máquina.</a>
     
      <h3>Optativa II: Científico Analista</h3>
     
        <a href="#">Temas de Análisis Multivariante Aplicado.</a><br>
        <a href="#">Servicios en la Nube para Aprendizaje Máquina.</a>
      
    </div>
  </div>

  `,
  "requisitos-maestria": `
  <h3>Costos y becas</h3>
  <p>No hay pagos por ficha, inscripción, reinscripción ni colegiatura mensual.</p>
  <p>Pregunta por las becas disponibles con el departamento de servicios escolares.</p>

  <h3>Requisitos para el curso propedéutico</h3>
  <ul>
    <li>Solicitud de admisión completa <a href="/documentos/SolicitudMCD.docx" download>(aquí)</a></li>
    <li>Formato examen y entrevista <a href="/documentos/formatoExamen.docx" download> (aquí)</a></li>
    <li>Acta de nacimiento *</li>
    <li>CURP *</li>
    <li>Certificado de Licenciatura *</li>
    <li>Título profesional *</li>
    <li>Currículum Vitae actualizado</a></li>
    <li>Dos cartas de referencia</li>
    <li>Carta de exposición de motivos (de 3 a 5 cuartillas, dirigida al Comité de admisión de la Maestría en Ciencia de Datos)</li>
    <li>Fotografía infantil digital (color o b/n)</li>
    <li>Convocatoria 2025 <a href="#">(aquí)</a></li>
  </ul>

  <p>Los documentos deben ser enviados en formato PDF (escaneo fiel del documento original) al correo electrónico <strong>univirtual@gs.utm.mx</strong>.</p>
  <p><strong>No se aceptarán copias, capturas de pantalla ni fotografías.</strong></p>
  <p>Para inscripción al primer semestre, se le solicitará la documentación en original. *</p>
`,

  modal3: `
    <h3>Calendario Escolar</h3>
    <p>Inicio de curso propedéutico: 5 de agosto</p>
    <p>Inicio de semestre: 14 de octubre</p>
  `
};

// Función para abrir el modal con contenido según el id
function abrirModal(id) {
  const contenido = contenidosModal[id];
  if (contenido) {
    document.getElementById("modalContenido").innerHTML = contenido;
    document.getElementById("modalGeneral").style.display = "flex";
  }
}

// Función para cerrar el modal
function cerrarModal() {
  document.getElementById("modalGeneral").style.display = "none";
}
