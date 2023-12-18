function buscarTabla() {
    var inputNombre, inputEmail, inputFecha,inputArea,inputActual,inputContacto, tabla, tr, i;
    inputNombre = document.getElementById("inputBuscarNombre").value.toUpperCase();
    inputEmail = document.getElementById("inputBuscarEmail").value.toUpperCase();
    inputFecha = document.getElementById("inputBuscarFecha").value.toUpperCase();
    inputArea = document.getElementById("inputBuscarArea").value.toUpperCase();
    inputActual = document.getElementById("inputBuscarTrabajo").value.toUpperCase();
    inputContacto = document.getElementById("inputBuscarContacto").value.toUpperCase();
    tabla = document.getElementById("tablaAlumnos");
    tr = tabla.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      var tdNombre = tr[i].getElementsByTagName("td")[0];
      var tdEmail = tr[i].getElementsByTagName("td")[1];
      var tdFecha = tr[i].getElementsByTagName("td")[2];
      var tdArea = tr[i].getElementsByTagName("td")[3];
      var tdActual = tr[i].getElementsByTagName("td")[5];
      var tdContacto = tr[i].getElementsByTagName("td")[7];

      if (tdNombre || tdEmail || tdFecha || tdArea || tdActual || tdContacto ) {
        if (
          (tdNombre.textContent.toUpperCase().indexOf(inputNombre) > -1) &&
          (tdEmail.textContent.toUpperCase().indexOf(inputEmail) > -1) &&
          (tdFecha.textContent.toUpperCase().indexOf(inputFecha) > -1) &&
          (tdArea.textContent.toUpperCase().indexOf(inputArea) > -1) &&
          (tdActual.textContent.toUpperCase().indexOf(inputActual) > -1) &&
          (tdContacto.textContent.toUpperCase().indexOf(inputContacto) > -1) 
        ) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }