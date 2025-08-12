// Información dinámica
const datosModalInformativo = {
admisionMaestria: {
  titulo: "Fechas importantes",
  imagen: "/imagenes/posterCienciasDatos.jpg",
  texto: `
    Documentos MCD: <a href="/Maestria-En-Ciencia-De-Datos" target="_blank">Aquí</a><br>
    Inscripción a curso propedéutico: 07 al 11 de julio de 2025<br>
    Inicio del curso propedéutico: 28 de julio de 2025<br>
    Fin de curso propedéutico: 20 de agosto de 2025
  `
},
admisionLicenciatura: {
  titulo: "Fechas importantes",
  imagen: "",
  texto: `
   Documentos LEM: <a href="/Licenciatura-en-Estudios-Mexicanos" target="_blank">Aquí</a><br>
   Recepción de documentación: 14 de febrero al 25 de junio de 2025<br> 
   Inscripción a curso propedéutico: 24 al 25 de julio de 2025<br>
   Inicio del curso propedéutico: 28 de julio de 2025<br>
   Fin de curso propedéutico: 20 de agosto de 2025<br>
   Los documentos pueden ser en formato digital para los trámites del curso propedéutico y puede enviarlos a los siguientes correos: info@virtual.utm.mx o univirtual@gs.utm.mx
  `
},
calendarioEscolar: {
  titulo: "Calendario Escolar de Actividades 2025-B",
  imagen: "/imagenes/calendarioEscolar.png",
  texto: `
  `
},
calendarioVerano: {
  titulo: "Calendario Escolar de Actividades 2024",
  imagen: "/imagenes/calendarioVerano.png",
  texto: `
  `
},
rescripcionLicenciatura: {
  titulo: "Fechas importantes",
  imagen: "",
  texto: `
    Documentos LEM: <a href="/Licenciatura-en-Estudios-Mexicanos" target="_blank">Aquí</a><br>
    Inscripción al curso propedéutico: 15 al 26 de julio de 2024<br>
    Curso propedéutico: 29 de julio al 20 de septiembre de 2024<br>
    Los documentos pueden ser en formato digital para los trámites del curso propedéutico y puede enviarlos a los siguientes correos: info@virtual.utm.mx o univirtual@gs.utm.mx
  `
},
rescripcionMaestria: {
  titulo: "Fechas importantes",
  imagen: "",
  texto: `
    Documentos MCD: <a href="/Maestria-En-Ciencia-De-Datos" target="_blank">Aquí</a><br>
    Recepción de documentación: 15 al 18 de julio de 2024.<br>
    Entrevista en línea: 15 al 19 de julio de 2024.<br>
    Examen de ubicación: 19 de julio 2024.<br>
    Inscripción al curso propedéutico: 22 al 29 de julio de 2024.<br>
    Curso propedéutico: 29 de julio al 20 de septiembre de 2024.<br>
    Los documentos pueden ser en formato digital para los trámites del curso propedéutico y puede enviarlos a los siguientes correos: jcvirtual@gs.utm.mx o univirtual@gs.utm.mx
  `
},
fechasImportantes: {
  titulo: "Fechas importantes",
  imagen: "",
  texto: `
  `
},
horarios: {
  titulo: "Fechas importantes",
  imagen: "/imagenes/horarios.png",
  texto: `
  `
},
};

// Función para abrir el modal
function abrirModalInformativo(id) {
  const info = datosModalInformativo[id];
  if (!info) return;

  const titulo = document.getElementById("modalTitulo");
  const imagen = document.getElementById("modalImagen");
  const texto = document.getElementById("modalTexto");
  const modal = document.getElementById("modalInformativo");

  titulo.innerText = info.titulo;
  texto.innerHTML = info.texto;

  // Muestra u oculta la imagen según si existe
  if (info.imagen && info.imagen.trim() !== "") {
    imagen.src = info.imagen;
    imagen.style.display = "block";
  } else {
    imagen.style.display = "none";
  }

  modal.style.display = "flex"; // Mostrar el modal SIEMPRE
}


// Función para cerrar
function cerrarModalInformativo() {
  document.getElementById("modalInformativo").style.display = "none";
}

document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        cerrarModalInformativo();
    }
});
