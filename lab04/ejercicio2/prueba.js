
function validar() {
    var edad = document.getElementById("edad").value;
  
    if (edad < 19) {
      alert("Debe ser mayor de 18 años.");
      return false;
    }
    
    return true;
  }
