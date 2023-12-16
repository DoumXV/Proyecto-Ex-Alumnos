function buscarTabla() {
    var inputId, inputNombre, inputUbicacion, inputInicio, inputFin, tabla, tr, i;
    inputId = document.getElementById("inputBuscarId").value.toUpperCase();
    inputNombre = document.getElementById("inputBuscarNombre").value.toUpperCase();
    inputUbicacion = document.getElementById("inputBuscarUbicacion").value.toUpperCase();
    inputInicio = document.getElementById("inputBuscarInicio").value.toUpperCase();
    inputFin = document.getElementById("inputBuscarFin").value.toUpperCase();
    tabla = document.getElementById("tablaEventos");
    tr = tabla.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      var tdId = tr[i].getElementsByTagName("td")[0];
      var tdNombre = tr[i].getElementsByTagName("td")[1];
      var tdUbicacion = tr[i].getElementsByTagName("td")[2];
      var tdInicio = tr[i].getElementsByTagName("td")[3];
      var tdFin = tr[i].getElementsByTagName("td")[5];

      if (tdId || tdNombre || tdUbicacion || tdInicio || tdFin) {
        if (
          (tdId.textContent.toUpperCase().indexOf(inputId) > -1) &&
          (tdNombre.textContent.toUpperCase().indexOf(inputNombre) > -1) &&
          (tdUbicacion.textContent.toUpperCase().indexOf(inputUbicacion) > -1) &&
          (tdInicio.textContent.toUpperCase().indexOf(inputInicio) > -1) &&
          (tdFin.textContent.toUpperCase().indexOf(inputFin) > -1)
        ) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }