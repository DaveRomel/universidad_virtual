// Información dinámica
const datosModalProfesor = {
PedroAlberto: {
  titulo: "Dr. Pedro Alberto Antonio Soto",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Doctor en Ciencias Matemáticas por la Universidad Nacional Autónoma de México en 2020, realizó sus estudios de Maestría en Ciencias Matemáticas en la Universidad Nacional Autónoma de México y sus estudios de Licenciatura en Matemáticas Aplicadas en la Universidad Tecnológica de la Mixteca (UTM). Actualmente es profesor-investigador de tiempo completo en la UTM adscrito al Instituto de Física y Matemáticas en Huajuapan de León, Oaxaca. Es miembro del cuerpo académico de Ciencia de Datos en la UTM. Sus principales líneas de investigación incluyen teoría de gráficas, teoría de matroides y ciencia de datos.
  `
},
ChristianEduardo: {
  titulo: "Dr. Christian Eduardo Millán Hernández",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  El Dr. Millán es Profesor Investigador del Instituto de Computación de la Universidad Tecnológica de la Mixteca. Sus áreas de interés son el Procesamiento de Lenguaje Natural, Lingüística Computacional, Reconocimiento de Patrones, Metaheurísticas, Aprendizaje Automático, Redes Neuronales y LLMs. Especialmente busca desarrollar soluciones a problemas del sector salud, agropecuario y educativo. Es Ingeniero en Sistemas Computacionales por el Instituto Tecnológico de Toluca, estudió la maestría y el doctorado en Ciencias de la Computación, ambos en la Universidad Autónoma del Estado de México (UAEMex). Galardonado dos veces con la presea “Ignacio Manuel Altamirano Basilio” versiones 2017 y 2020, otorgadas la UAEMex. Es miembro del Sistema Nacional de Investigadores e Investigadores (SNII) del CONACYT con nivel Candidato a Investigador Nacional. Cuenta con el Perfil Desable PRODEP. Es integrante del Cuerpo Académico PRODEP “Sistemas Inteligentes y Realidad Virtual”.
  `
},
AnaDelia: {
  titulo: "M.C. Ana Delia Olvera Cervantes",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Tiene el Diploma de Estudios Avanzados por la Universidad de Cádiz en 2006, realizó la Maestría en Ciencias en Estadística en The University of Texas at El Paso en 2002. La Lic. en Matemáticas por la Benemérita Universidad Autónoma de Puebla (2000). Actualmente, es profesora-investigadora de tiempo completo en la UTM adscrita a la Jefatura de la Lic. en Matemáticas Aplicadas y al Centro de Modelación Matemática Vinculación y Consultoría (CEMMVyC). Sus principales líneas de investigación incluyen la Estadística Multivariante, Ordenaciones Estocásticas y Conceptos de Dependencia.
  `
},
TomasPerez: {
  titulo: "Dr. Tomás Pérez Becerra",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Es PostDoctor en la Universidad Tecnológica de la Mixteca en Huajuapan de León, Oaxaca. Doctor y Maestro en Ciencias Matemáticas por la Benemérita Universidad Autónoma de Puebla, de la cual es egresado con honores. Licenciado en Matemáticas Aplicadas por la Universidad Autónoma de Tlaxcala y Maestro en Ciencia de Datos Aplicada por el Technological Institute of Executive Education. Es Profesor-investigador de tiempo completo adscrito al Instituto de Física y Matemáticas de la Universidad Tecnológica de la Mixteca. Es coordinador del Doctorado en Modelación Matemática y es Director del Centro de Modelación Matemática, Vinculación y Consultoría. Realizó dos estancias de investigación en el National Institute of Education de la Nanyang Technological University en Singapur bajo la dirección del Doctor Lee Peng Yee. Ha impartido conferencias a nivel nacional e internacional. Cuenta con publicaciones de artículos científicos indexados en revistas internacionales en colaboración con investigadores nacionales y extranjeros y un capítulo de libro. Es miembro del Sistema Nacional de Investigadores con la distinción de candidato a investigador. Ha dirigido ocho tesis de licenciatura, tres de maestría y tres de doctorado. Actualmente, es responsable de los proyectos “Implementación de la dimensión fractal en el reconocimiento biométrico del iris del ojo” y “Modelación matemática y aprendizaje automático basado en léxico para el cálculo del índice de riesgo de suicidio”; así como es lider del Cuerpo Académico de Ciencia de datos de la UTM. Sus líneas de investigación incluyen Teoría de integración generalizada, Análisis funcional y matemático, Ecuaciones diferenciales ordinarias, Biología matemática, Teoría de dimensión, Ciencia de datos y Cómputo cuántico.
  `
},
ErikGerman: {
  titulo: "M.T.C.A. Erik Germán Ramos Pérez",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Realizó los estudios de licenciatura en Ingeniería en Computación y la maestría en Tecnologías de Cómputo Aplicado en la UTM; actualmente cursa el Doctorado en Robótica en la misma Institución. Es profesor de tiempo completo de la carrera de Ingeniería en Computación en el Instituto de Computación en la misma UTM. Ha participado en proyectos financiados por Conacyt, Prodep y la SEP, sus áreas de interés son: Navegación Autónoma con Drones, y Arquitecturas Profundas Convolucionales.
  `
},
EduardoSanchez: {
  titulo: "Dr. Eduardo Sánchez Soto",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Obtuvo el Doctorado en procesamiento de señales e imágenes por la Escuela Nacional Superior de Telecomunicaciones de París en Francia y como PostDoctorante trabajó en proyectos relacionados con procesamiento del habla y del sonido. Ha participado en proyectos de ciencia básica de Conacyt, cuenta actualmente con el Perfil Deseable de Prodep y fue investigador SNI 1 hasta el año 2018. Sus líneas de investigación son el modelado de series temporales, el modelado con modelos gráficos y el procesamiento de señales e imágenes, particularmente el procesamiento del habla.
  `
},






NadiaRuiz: {
  titulo: "Dra. Nadia Ruiz Muños",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Doctora en Ciencias de Gobierno y Política por el Instituto de Ciencias de Gobierno y Desarrollo Estratégico (ICGDE) de la Benemérita Universidad Autónoma de Puebla.
  Maestría en Gobierno y Administración. Benemérita Universidad Autónoma de Puebla.
  Licenciatura en Derecho, con terminal en Derecho Económico. Benemérita Universidad Autónoma de Puebla.

  Especialista en:

  * Derecho agrario y propiedad social.

  Diplomados y curso

  * 2018.Diplomado Latinoamericano de Derechos Humanos. AUSJAL –Instituto Interamericano de Derechos Humanos .
  * 2018 Curso intensivo, Temas selectos sobre evaluación de impacto social y consulta indígena, Flacso México y CIESAS. Mérida Yucatán.
  * Curso de especialización en interculturalidad y Políticas Públicas Benemérita Universidad Autónoma de Puebla, 2015.
  *Curso "Regularización jurídica de los Cultivos Transgénicos y su incidencia en la protección al Medio Ambiente". ,Universidad de Almería, España, 2007.

  Experiencia Laboral

  * Imparticion de clases en diversas instituciones a nivel licenciatura y maestría, como la Benemérita Universidad Autónoma de Puebla (BUAP), Ibero Puebla, Universidad Tecnológica de la Mixteca (UTM) y Centro Integral de Estudios Superiores (CIES).
  * Tribunales Agrarios Distrito 37 y 21 con sede en la ciudad de Puebla y Oaxaca adscrita a la Secretaría de Acuerdos y como Titular del área jurídica, respectivamente.
  * Actualmente profesora en la licenciatura en derecho en la facultad de Derecho y Ciencias Sociales de la BUAP.


  `
},
LuzPalacios: {
  titulo: "DRA. María de la Luz Palacios Villavicencio",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Maestría en Ciencias y Artes para el Diseño.

  Línea de Investigación e interés

  * Diseño de material didáctico, volumétrico y digital. Y Diseño e interacción para habilidades cognitivas en niños.

  Publicaciones de los últimos 3 años

  * José Anibal Arias-Aguilar, M. Luz Palacios-Villavicencio, Roberto Bretado-Gallegos, María Auxilio Medina Nieto, Antonio Benitez Ruiz, Verónica Rodríguez-López, Jaqueline Estrada-Bautista: Analysis of children: humanoid robot interaction to support social skills development. Interacción 2017: 10:1-10:4
  * Palacios V. M. Espinoza C. j. y Estrada B. J. (2016) Capítulo de libro: El diseño en la mejora del bienestar social de niños con discapacidad. Filosofía, arte y diseño. Oguri Campos, L.E., Valdivia, B.,López García, F., y Robles Aguilar O. A. (Eds). Diálogo en las fronteras. ISBN. 978-607-441-401-1
  * María de la Luz Palacios Villavicencio, José Aníbal Arias Aguilar, María Auxilio Medina Nieto y Teresa Ivonne Castillo Diego. (2015) Propuesta metodológica para el desarrollo de recursos didácticos con tecnologías interactivas para niños con Necesidades Educativas Especiales (NEE): redes multidisciplinarias. Academia Journals en Tecnologías. ISBN 2380-503X

  3 actividades destacadas ( Distinción académica, participación como responsable en algún evento, etc. Para profesores externos incluir su trabajo(o) actual(es) y puesto).


  * Directora del Instituto de Diseño.
  * Coordinadora de Cuerpo Académico integración Multidisciplinaria del Diseño en México.
  * Certificado por realizar una destacada evaluación de un artículo enviado para publicación en revista internacional. Evaluaciones destacadas año 2015. Centro de Información Tecnológica de La Serena Chile. Scielo, Scopus y Scielo Citation Index.
  `
},
AnaMaria: {
  titulo: "Mtra. Ana Maria Romero Valle",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Sin Información
  `
},
DiegoMartinez: {
  titulo: "Lic. Diego Martine Lozada",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Sin informacion
  `
},
LourdesRodriguez: {
  titulo: "Dra. Lourdes Rodriguez Espinoza",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Sin Información
  `
},
BravoGuzman: {
  titulo: "M.C. Alejandro A. Bravo Guzmán",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Sin Información
  `
},
MarcosGerman: {
  titulo: "Ing. Marcos German Corro Ortiz",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Sin Información
  `
},
RamonAmadeo: {
  titulo: "Dr. Ramón Amadeo Castillo Ponce",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Sin Información
  `
},
OfeliaPineda: {
  titulo: "Lic. Ofelia Pineda Ortiz",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Sin Información
  `
},
CynthiaTorralba: {
  titulo: "Lic. Cynthia Torralba Velasco",
  imagen: "/imagenes/sinFoto.jpg",
  texto: `
  Sin Información
  `
}
};

// Función para abrir el modal
function abrirModalProfesor(id) {
  const info = datosModalProfesor[id];
  if (!info) return;

  const titulo = document.getElementById("modalTitulo");
  const imagen = document.getElementById("modalImagen");
  const texto = document.getElementById("modalTexto");
  const modal = document.getElementById("modalProfesor");

  titulo.innerText = info.titulo;
  texto.innerHTML = info.texto;

    if (info.imagen && info.imagen.trim() !== "") {
    imagen.src = info.imagen;
    imagen.style.display = "block";
  } else {
    imagen.style.display = "none";
  }
  modal.style.display = "flex"; 
}


// Función para cerrar
function cerrarModalProfesor() {
  document.getElementById("modalProfesor").style.display = "none";
}
