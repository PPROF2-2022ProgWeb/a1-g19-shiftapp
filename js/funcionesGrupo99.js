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

