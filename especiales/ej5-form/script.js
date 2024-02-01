$(document).ready(function() {
    const selectPais = $("#select-pais");
  
    
    var paises = '[' +
      '{"nombre":"Estados Unidos","capital":"Washington, D.C.","poblacion":331002651,"idioma":"inglés","moneda":"dólar estadounidense"},' +
      '{"nombre":"Canadá","capital":"Ottawa","poblacion":37742154,"idioma":"inglés y francés","moneda":"dólar canadiense"},' +
      '{"nombre":"Reino Unido","capital":"Londres","poblacion":67886011,"idioma":"inglés","moneda":"libra esterlina"},' +
      '{"nombre":"Francia","capital":"París","poblacion":65273511,"idioma":"francés","moneda":"euro"},' +
      '{"nombre":"Alemania","capital":"Berlín","poblacion":83783942,"idioma":"alemán","moneda":"euro"},' +
      '{"nombre":"España","capital":"Madrid","poblacion":46754778,"idioma":"español","moneda":"euro"},' +
      '{"nombre":"Italia","capital":"Roma","poblacion":60461826,"idioma":"italiano","moneda":"euro"},' +
      '{"nombre":"Japón","capital":"Tokio","poblacion":125930000,"idioma":"japonés","moneda":"yen"},' +
      '{"nombre":"Australia","capital":"Canberra","poblacion":25716500,"idioma":"inglés","moneda":"dólar australiano"},' +
      '{"nombre":"Brasil","capital":"Brasilia","poblacion":211049527,"idioma":"portugués","moneda":"real brasileño"}' +
    ']';
  
    var objPaises = JSON.parse(paises);
  
    // Recorremos el arreglo de países y agregamos las opciones al select
    objPaises.forEach(function(pais) {
      var objOption = document.createElement("option");
      objOption.setAttribute("value", pais.nombre);
      objOption.innerHTML = pais.nombre;
      selectPais.append(objOption);
    });
  });
  