
let nombreVer = document.getElementById("exampleInputName2")
nombreVer.value = localStorage.getItem('nombre')

let apellidoVer = document.getElementById("exampleInputSurname2")
apellidoVer.value = localStorage.getItem('apellido')

let correoVer = document.getElementById("exampleInputEmail12")
correoVer.value = localStorage.getItem('correo')

let consultaVer = document.getElementById("exampleMessage2")
consultaVer.value = localStorage.getItem('consulta')


setTimeout(() => {
    location.replace("/index.html")
}, 5000);