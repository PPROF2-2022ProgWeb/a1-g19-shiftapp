let submitBtn = document.getElementById("submitBtn")

let nombre;
let apellido;
let correo;
let consulta;

// POPUP Solicitar turno
let btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');
// Fin del POPUP Solicitar turno

// POPUP Mis turnos
let btnAbrirPopup2 = document.getElementById('btn-abrir-popup2'),
	overlay2 = document.getElementById('overlay2'),
	popup2 = document.getElementById('popup2'),
	btnCerrarPopup2 = document.getElementById('btn-cerrar-popup2');
// Fin del POPUP Mis turnos

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

// POPUP Solicitar turno 
btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
// Fin del POPUP Solicitar turno

// POPUP Mis turnos
btnAbrirPopup2.addEventListener('click', function(){
	overlay2.classList.add('active');
	popup2.classList.add('active');
});

btnCerrarPopup2.addEventListener('click', function(e){
	e.preventDefault();
	overlay2.classList.remove('active');
	popup2.classList.remove('active');
});
// Fin del POPUP Mis turnos

//funcion validar mas de 2 caracteres (en el login.php boton enviar de contacto)
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

// Función para restingir meses anteriores al actual del calendario de turnos
function calendario() {
    var fecha = new Date();
    var anio = fecha.getFullYear();
    var dia = fecha.getDate();
    var _mes = fecha.getMonth();//viene con valores de 0 al 11
    _mes = _mes + 1;//ahora se mofidica de 1 al 12
    if (_mes < 10)//ahora se agrega un 0 para el formato date
    { var mes = "0" + _mes;}
    else
    { var mes = _mes.toString;}
    document.getElementById("fechaReserva").min = anio+'-'+mes+'-'+dia; 
    
}