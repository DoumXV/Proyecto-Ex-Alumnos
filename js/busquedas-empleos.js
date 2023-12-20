//---------------Script para la busquedas en el crud empleos---------------//
function buscarTabla() {
    var inputId, inputTitulo, inputEmpresa, inputCiudad, inputSueldo, tabla, tr, i;
    inputId = document.getElementById("inputBuscarId").value.toUpperCase();
    inputTitulo = document.getElementById("inputBuscarTitulo").value.toUpperCase();
    inputEmpresa = document.getElementById("inputBuscarEmpresa").value.toUpperCase();
    inputCiudad = document.getElementById("inputBuscarCiudad").value.toUpperCase();
    inputSueldo = document.getElementById("inputBuscarSueldo").value.toUpperCase();
    tabla = document.getElementById("tablaEmpleos");
    tr = tabla.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      var tdId = tr[i].getElementsByTagName("td")[0];
      var tdTitulo = tr[i].getElementsByTagName("td")[1];
      var tdEmpresa = tr[i].getElementsByTagName("td")[2];
      var tdCiudad = tr[i].getElementsByTagName("td")[3];
      var tdSueldo = tr[i].getElementsByTagName("td")[5];

      if (tdId || tdTitulo || tdEmpresa || tdCiudad || tdSueldo) {
        if (
          (tdId.textContent.toUpperCase().indexOf(inputId) > -1) &&
          (tdTitulo.textContent.toUpperCase().indexOf(inputTitulo) > -1) &&
          (tdEmpresa.textContent.toUpperCase().indexOf(inputEmpresa) > -1) &&
          (tdCiudad.textContent.toUpperCase().indexOf(inputCiudad) > -1) &&
          (tdSueldo.textContent.toUpperCase().indexOf(inputSueldo) > -1)
        ) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }