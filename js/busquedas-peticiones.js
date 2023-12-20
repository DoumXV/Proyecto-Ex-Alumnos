//---------------Script para la busquedas en el crud peticiones---------------//
function buscarTabla() {
    var inputCodigo, inputNombre, inputEmail, inputContacto,inputArea, tabla, tr, i;
    inputCodigo = document.getElementById("inputBuscarCodigo").value.toUpperCase();
    inputNombre = document.getElementById("inputBuscarNombre").value.toUpperCase();
    inputEmail = document.getElementById("inputBuscarEmail").value.toUpperCase();
    inputContacto = document.getElementById("inputBuscarContacto").value.toUpperCase();
    inputArea = document.getElementById("inputBuscarArea").value.toUpperCase();
    tabla = document.getElementById("tablaPeticiones");
    tr = tabla.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      var tdCodigo = tr[i].getElementsByTagName("td")[0];
      var tdNombre = tr[i].getElementsByTagName("td")[1];
      var tdEmail = tr[i].getElementsByTagName("td")[2];
      var tdContacto = tr[i].getElementsByTagName("td")[3];
      var tdArea = tr[i].getElementsByTagName("td")[6];

      if (tdCodigo || tdNombre || tdEmail || tdContacto || tdArea ) {
        if (
          (tdCodigo.textContent.toUpperCase().indexOf(inputCodigo) > -1) &&
          (tdNombre.textContent.toUpperCase().indexOf(inputNombre) > -1) &&
          (tdEmail.textContent.toUpperCase().indexOf(inputEmail) > -1) &&
          (tdContacto.textContent.toUpperCase().indexOf(inputContacto) > -1) &&
          (tdArea.textContent.toUpperCase().indexOf(inputArea) > -1) 
        ) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }