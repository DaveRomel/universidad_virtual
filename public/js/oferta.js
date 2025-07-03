function toggleContenido(id) {
    const contenido = document.getElementById("contenidoOferta");
    const lineaDivisoria = document.getElementById("lineaDivisoria");

    const isVisible = contenido.style.display === "block";

    if (isVisible) {
        contenido.style.display = "none";
        lineaDivisoria.style.display = "block";
    } else {
        contenido.style.display = "block";
        lineaDivisoria.style.display = "none";

        contenido.style.animation = "slideDown 0.5s ease-out";

        // Aquí decidimos qué contenido mostrar según el id
        switch (id) {
            case "perfil-aspirante-licenciatura":
                contenido.innerHTML = `
                    <p>Interés por la cultura mexicana. <br>
                    Interés por los procesos sociales, funcionamiento de la economía, sistema jurídico y político de México.
                    Buena expresión o bien disposición para desarrollar expresarse de manera verbal y escrita.
                    Interés para la investigación y lectura de textos relacionados temas literarios, históricos, de arte, económicos y políticos.
                    Colaboración en el desarrollo de actividades grupales</p>
                `;
                break;
            case "perfil-egreso-licenciatura":
                contenido.innerHTML = `
                    <p>El egresado estará capacitado para analizar, interpretar y aplicar conocimientos sobre la cultura mexicana y las ciencias sociales.</p>
                `;
                break;
            case "campo-laboral-licenciatura":
                contenido.innerHTML = `
                    <p>El egresado podrá desempeñarse en instituciones culturales, educativas, gubernamentales, y como consultor independiente.</p>
                `;
                break;
            case "ventajas-carrera-licenciatura":
                contenido.innerHTML = `
                    
                    <p>Estudiar esta licenciatura ofrece una comprensión profunda de la cultura mexicana, crucial para entender el contexto socio-político del país.</p>
                `;
                break;
            case "plan-estudios-licenciatura":
                contenido.innerHTML = `
                    <p>La licenciatura se organiza en módulos que cubren temas desde historia, sociología hasta cultura contemporánea.</p>
                `;
                break;
            case "requisitos-licenciatura":
                contenido.innerHTML = `
                    <p>Para ingresar es necesario tener un promedio mínimo de 8.0 y aprobar un examen de conocimientos básicos sobre historia mexicana.</p>
                `;
                break;
            case "formatos-licenciatura":
                contenido.innerHTML = `
                    <p>Los formatos estarán disponibles en línea para su descarga. También pueden ser entregados directamente en la administración de la universidad.</p>
                `;
                break;
            case "becas-licenciatura":
                contenido.innerHTML = `
                    <p>Existen varias becas disponibles para estudiantes destacados y apoyo económico para aquellos con buen desempeño académico.</p>
                `;
                break;
            case "profesores-licenciatura":
                contenido.innerHTML = `
                    <p>Los profesores son expertos en diversas áreas de las ciencias sociales y humanidades, con amplia experiencia en la educación superior.</p>
                `;
                break;
            case "ciclo-escolar-licenciatura":
                contenido.innerHTML = `
                    <p>El ciclo escolar se divide en dos semestres. El inicio de clases es en agosto, y la duración del ciclo es de 6 meses.</p>
                `;
                break;
            default:
                contenido.innerHTML = `<p>Contenido no disponible.</p>`;
        }
    }
}
