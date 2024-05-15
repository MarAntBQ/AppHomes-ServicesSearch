<br><br>
<!-- ======= Services Section ======= -->

<body onload="posicionate()">
  <section id="services" class="services">

    <div class="container">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player src="https://assets10.lottiefiles.com/temporary_files/68xIH3.json" background="transparent"
        speed="1" style="width: 15em; height: 15em;display:block;margin:auto;" loop autoplay></lottie-player>

      <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-lg-3">
          <div class="input-group mb-3">
            <input type="text" class="form-control" aria-placeholder="" aria-label="" aria-describedby="basic-addon1"
              id="js-services-search-input" placeholder="Escriba el nombre del Servicio">
          </div>
        </div>
      </div>
      <div class="row" id="js-services-list"></div>
    </div>
  </section><!-- End Services Section -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>
    <script type="module">
      // All The services
      const serviceList =[
        {
        "name": "Abarrotes",
        "iconClass": "icofont-food-cart",
        "link": "abarrotes",
        "description": "Tiendas de abarrotes, minimarkets, productos de consumo masivo y más"
        },
        {
        "name": "Agricultura - Agronomía",
        "iconClass": "icofont-plant",
        "link": "salud",
        "description": "Producción de alimentos orgánicos, semillas, huertos, etc."
        },
        {
        "name": "Artesanías",
        "iconClass": "icofont-unity-hand",
        "link": "artesanias",
        "description": "Productos hechos a mano utilizando habilidades y técnicas tradicionales."
        },
        {
        "name": "Arte | Decoraciones | Juguetes",
        "iconClass": "icofont-toy-train",
        "link": "juguete",
        "description": "Arte, decoraciones, venta de juguetes, artefactos para niños, etc."
        },
        {
        "name": "Belleza & Maquillaje",
        "iconClass": "icofont-grocery",
        "link": "belleza",
        "description": "Productos de cosmetología y perfumería. Peluquerías, barberías, estética, etc."
        },
        {
        "name": "Carnes & Mariscos",
        "iconClass": "icofont-steak",
        "link": "carnes",
        "description": "Venta de carne de res, embutidos, pollo, toda clase de mariscos, huevos, etc."
        },
        {
        "name": "Carpintería & Ebanistería",
        "iconClass": "icofont-tree",
        "link": "carpintero",
        "description": "Elaboración y diseño de trabajos en madera, muebles, puertas, etc."
        },
        {
        "name": "Construcción",
        "iconClass": "icofont-cement-mix",
        "link": "construccion",
        "description": "Elaboración de planos para viviendas, trabajos de albañilería,etc."
        },
        {
        "name": "Electricidad",
        "iconClass": "icofont-energy-savings",
        "link": "electricidad",
        "description": "Servicio de mantenimiento de sistemas eléctricos, instalando y reparando equipos y cableado."
        },
        {
        "name": "Enseñanza | Tutorías",
        "iconClass": "icofont-read-book-alt",
        "link": "ensenanza",
        "description": "Instructores, maestros, nivelaciones educativas personalizadas"
        },
        {
        "name": "Estilistas",
        "iconClass": "icofont-cut",
        "link": "estilistas",
        "description": "Cortes de cabello para hombres, mujeres y niños, pedicure, manicure, barbería, etc."
        },
        {
        "name": "Eventos",
        "iconClass": "icofont-users-social",
        "link": "eventos",
        "description": "Planificadores de eventos que organizan y gestionan conferencias, fiestas, conciertos, festivales, etc."
        },
        {
        "name": "Finanzas & Contabilidad",
        "iconClass": "icofont-bank",
        "link": "contabilidad",
        "description": "Administración, contabilidad, finanzas, gestión tributaria, auditorías, ventas, etc."
        },
        {
        "name": "Fotografía",
        "iconClass": "icofont-photobucket",
        "link": "fotografia",
        "description": "Servicio de fotografía con diversos fines, como arte, documentación o publicidad."
        },
        {
        "name": "Gastronomía",
        "iconClass": "icofont-restaurant",
        "link": "gastronomia",
        "description": "Restaurantes, picanterías, comida rápida, heladerías, etc"
        },
        {
        "name": "Jardinería",
        "iconClass": "icofont-crop-plant",
        "link": "jardineria",
        "description": "Diseño, mantenimiento y cuidado de jardines, céspedes y otros paisajes."
        },
        {
        "name": "Lavandería",
        "iconClass": "icofont-washing-machine",
        "link": "lavanderia",
        "description": "Servicio de lavado de todo tipo de ropa en agua y en seco"
        },
        {
        "name": "Leyes",
        "iconClass": "icofont-law-alt-2",
        "link": "abogado",
        "description": "Asesoría en derecho penal, violencia de género, civil, etc."
        },
        {
        "name": "Limpieza",
        "iconClass": "icofont-home",
        "link": "limpieza",
        "description": "Servicio de limpieza de casas, oficinas, departamentos, hoteles, hostales, etc."
        },
        {
        "name": "Línea Blanca",
        "iconClass": "icofont-washing-machine",
        "link": "lineaBlanca",
        "description": "Técnicos en reparación de cocinas, lavadoras, secadoras de ropa, refrigeradoras, congeladores, etc."
        },
        {
        "name": "Mascotas",
        "iconClass": "icofont-cat-dog",
        "link": "mascotas",
        "description": "Atención a mascotas, proporcionándoles alimento, refugio, ejercicio y compañía, etc."
        },
        {
        "name": "Mecánica",
        "iconClass": "icofont-car-alt-4",
        "link": "mecanica",
        "description": "Servicio de reparación y mantenimiento de vehículos, motocicletas, camiones y otra maquinaria."
        },
        {
        "name": "Mensajería",
        "iconClass": "icofont-fast-delivery",
        "link": "delivery",
        "description": "Servicio de entrega a domicilio de productos, mercadería, documentos, comida, etc."
        },
        {
        "name": "Moda & Confección",
        "iconClass": "icofont-jacket",
        "link": "modista",
        "description": "Confección de prendas de vestir, moda, vestidos, faldas, blusas, chalecos, uniformes, etc."
        },
        {
        "name": "Multimedia",
        "iconClass": "icofont-music-disk",
        "link": "musica",
        "description": "Producción musical, acústica, grabación, docencia, edición de audio y video, etc."
        },
        {
        "name": "Pastelería & Panadería",
        "iconClass": "icofont-pie",
        "link": "panaderia",
        "description": "Elaboración de pasteles, postres, bocadillos, pan, repostería en general."
        },
        {
        "name": "Pintura",
        "iconClass": "icofont-paint-brush",
        "link": "pintura",
        "description": "Servicio de pintura de superficies para crear acabados decorativos o protectores, utilizando diversas herramientas y técnicas."
        },
        {
        "name": "Plomería",
        "iconClass": "icofont-water-drop",
        "link": "plomeria",
        "description": "Servicio de instalación, reparación y mantenimiento de tuberías, accesorios y otros sistemas de plomería."
        },
        {
        "name": "Publicidad & Marketing",
        "iconClass": "icofont-newspaper",
        "link": "marketing",
        "description": "Publicidad en general, diseño gráfico, diagramación, maquetación, marketing digital, etc."
        },
        {
        "name": "Salud",
        "iconClass": "icofont-nurse-alt",
        "link": "enfermeria",
        "description": "Servicios de enfermería, cuidados a personas mayores, etc."
        },
        {
        "name": "Sastrería",
        "iconClass": "icofont-jacket",
        "link": "sastreria",
        "description": "Creación y modificación de ropa con su ajuste adecuado para los clientes, utilizando habilidades de costura y patrones."
        },
        {
        "name": "Servicios | Familias",
        "iconClass": "icofont-people",
        "link": "familia",
        "description": "Asesoría y terapias para los miembros de las familias, cuidado de niños, etc."
        },
        {
        "name": "Tapicería",
        "iconClass": "icofont-chair",
        "link": "tapiceria",
        "description": "Servicio de restauración de muebles, asientos u otros objetos con tela o cuero."
        },
        {
        "name": "Tecnología",
        "iconClass": "icofont-laptop-alt",
        "link": "tecnologia",
        "description": "Reparación de celulares, tablets, computadoras, prestación de servicios en medios digitales"
        },
        {
        "name": "Transporte & Logística",
        "iconClass": "icofont-bus-alt-2",
        "link": "transporte",
        "description": "Servicio de transporte liviano y pesado, mudanzas, recorridos, viajes, etc."
        },
        {
        "name": "Turismo",
        "iconClass": "icofont-travelling",
        "link": "turismo",
        "description": "Servicio de guía a los turistas con planes de viaje, alojamiento, actividades, etc"
        },
        {
        "name": "Vulcanizadora",
        "iconClass": "icofont-racing-car",
        "link": "vulcanizadora",
        "description": "Establecimientos dedicados a la reparación de llantas o ruedas de un vehículo."
        },
        {
        "name": "Zapatería",
        "iconClass": "icofont-hammer",
        "link": "zapateria",
        "description": "Servicio de reparación de calzado, utilizando herramientas y técnicas especializadas para trabajar con cuero y otros materiales."
        }
      ]
      // GetElementById Fn
      function getElem(id) {
        return document.getElementById(id)
      }
      // Function render Elements
      function renderServices(services) {
        // Clear content
        serviceListContainer.innerHTML = '';
        
        if (services.length === 0) {
          // No results found, display message
          serviceListContainer.innerHTML = '<div class="col"><h1 class="text-center">No se encontraron resultados</h1></div>';
        } else {
          // Render results
          services.forEach(service => {
            serviceListContainer.innerHTML += `
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4"><a href="${service.link}">
              <div class="icon-box">
                <div class="icon"><i class="${service.iconClass}"></i></div>
                <h4><a onclick="saveCoords()" href="${service.link}">${service.name}</a></h4>
                <p>${service.description}</p>
              </div>
            </a></div>
            `;
          });
        }
      }
      // Block Name
      const jsBlockN = 'js-services';
      // Search Elems
      let searchInput = getElem(`${jsBlockN}-search-input`);
      // List Container
      let serviceListContainer = getElem(`${jsBlockN}-list`);

      // Render All
      renderServices(serviceList)
    
      // Input Search
      searchInput.addEventListener('input', () => {
        const searchTerm = searchInput.value.toLowerCase();
        const filteredServices = serviceList.filter(service => {
          return (
            service.name.toLowerCase().includes(searchTerm) ||
            service.description.toLowerCase().includes(searchTerm) ||
            service.link.toLowerCase().includes(searchTerm)
          );
        });
        renderServices(filteredServices);
      });
    </script> 
    <script>
    function saveCoords (e) {
      sessionStorage.setItem("coords", JSON.stringify({
        y: window.scrollY,
        x: window.scrollX
      }));
    }
    </script>
    <script>  
      function posicionate () {
      var coords = JSON.parse(sessionStorage.getItem("coords"));
      if (coords) {
        window.scrollTo(coords.x, coords.y);
      }
    }

    </script>