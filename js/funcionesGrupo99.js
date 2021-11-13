let submitBtn = document.getElementById("submitBtn")

let nombre;
let apellido;
let correo;
let consulta;

submitBtn.addEventListener("click", function () {
    nombre = document.getElementById("exampleInputName").value;
    apellido = document.getElementById("exampleInputSurname").value;
    correo = document.getElementById("exampleInputEmail1").value;
    consulta = document.getElementById("exampleMessage").value;

    localStorage.setItem('nombre', nombre)
    localStorage.setItem('apellido', apellido)
    localStorage.setItem('correo', correo)
    localStorage.setItem('consulta', consulta)

    location.replace("/mostrardatos.html")

   

})
//funcion validar mas de 2 caracteres (en el login.html boton enviar de contacto)
function checkLength(){
    var textbox = document.getElementById("exampleInputName");
    var textbox2 = document.getElementById("exampleInputSurname");
    if((textbox.value.length && textbox2.value.length)>=2 && (textbox.value.length && textbox2.value.length) <= 20){
        return true;
    }
    else{
        alert("El campo nombre y el campo apellido deben tener mas de 2 caracteres");
        return false;
    }
}
// Example starter JavaScript for disabling form submissions if there are invalid fields
//utilizado y brindado por el template de bootstrap para que pueda ser aplicado en mas de 1 formulario
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

  //alert creado para el boton registrar en crear cuenta
  function mostrarMensaje(){
    alert("Operacion Exitosa");
    }
    
