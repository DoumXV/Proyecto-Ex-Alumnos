function buscarTabla() {
    var inputId, inputTitulo, inputEmpresa, inputCiudad, tabla, tr, i;
    inputId = document.getElementById("inputBuscarId").value.toUpperCase();
    inputTitulo = document.getElementById("inputBuscarNombre").value.toUpperCase();
    inputEmpresa = document.getElementById("inputBuscarEmail").value.toUpperCase();
    inputCiudad = document.getElementById("inputBuscarContacto").value.toUpperCase();
    tabla = document.getElementById("tablaPeticiones");
    tr = tabla.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      var tdId = tr[i].getElementsByTagName("td")[0];
      var tdTitulo = tr[i].getElementsByTagName("td")[1];
      var tdEmpresa = tr[i].getElementsByTagName("td")[2];
      var tdCiudad = tr[i].getElementsByTagName("td")[3];

      if (tdId || tdTitulo || tdEmpresa || tdCiudad ) {
        if (
          (tdId.textContent.toUpperCase().indexOf(inputId) > -1) &&
          (tdTitulo.textContent.toUpperCase().indexOf(inputTitulo) > -1) &&
          (tdEmpresa.textContent.toUpperCase().indexOf(inputEmpresa) > -1) &&
          (tdCiudad.textContent.toUpperCase().indexOf(inputCiudad) > -1) 
        ) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }