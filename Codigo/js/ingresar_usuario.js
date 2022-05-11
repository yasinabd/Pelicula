
//Variables

const Usuario = document.getElementById("usuario");
const Password = document.getElementById("password");
const repetirPassword = document.getElementById("repetirPassword");
const Email = document.getElementById("email");
const Dni = document.getElementById("dni");
const formulario = document.getElementById("formulario");

//Error/es

const errorUsuario = document.getElementById("errorUsuario");
const errorContraseña = document.getElementById("errorContraseña");
const errorContraseña2 = document.getElementById("errorContraseña2");
const errorEmail = document.getElementById("errorEmail");
const errorDNI = document.getElementById("errorDNI");

//Evento/s

Usuario.addEventListener("keyup", validarUsuario);
Password.addEventListener("keyup", validarContraseña);
repetirPassword.addEventListener("keyup", validarRepetirContraseña);
Email.addEventListener("keyup", validarEmail);
Dni.addEventListener("keyup", validarDni);
formulario.addEventListener("submit", (validarFormulario)=>{
  
  if(validarUsuario() && validarContraseña() && validarRepetirContraseña() && validarEmail() && validarDni()){
      
  }else{
      validarFormulario.preventDefault();
  }
});

//Expresiones Regulares

const pUsuario = /\w{6,45}/;
const pPassword = /^(?=.{8,45}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/;
const pEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/;
const pDni = /^[0-9]{8}[A-Za-z]{1}$/;

//Funciones

function validarUsuario() {

  if (pUsuario.test(Usuario.value)) {

    errorUsuario.classList.add("errorGeneral");
    errorUsuario.classList.remove("errorGeneral-on");

    return true;

  } else if (usuario.value == 0) {

    errorUsuario.classList.remove("errorGeneral");
    errorUsuario.classList.add("errorGeneral-on");
    return false;
  } else {
    errorUsuario.classList.remove("errorGeneral");
    errorUsuario.classList.add("errorGeneral-on");
    return false;
  }
}

function validarContraseña() {

  if (pPassword.test(Password.value)) {

    errorContraseña.classList.add("errorGeneral");
    errorContraseña.classList.remove("errorGeneral-on");

    return true;


  } else if (Password.value == 0) {

    errorContraseña.classList.remove("errorGeneral");
    errorContraseña.classList.add("errorGeneral-on");

    return false;
  } else {
    errorContraseña.classList.remove("errorGeneral");
    errorContraseña.classList.add("errorGeneral-on");
    return false;
  }
}

function validarRepetirContraseña() {

  if (repetirPassword.value == Password.value) {

    errorContraseña2.classList.add("errorGeneral");
    errorContraseña2.classList.remove("errorGeneral-on");

    return true;


  } else if (repetirPassword.value == 0) {

    errorContraseña2.classList.remove("errorGeneral");
    errorContraseña2.classList.add("errorGeneral-on");

    return false;
  } else {
    errorContraseña2.classList.remove("errorGeneral");
    errorContraseña2.classList.add("errorGeneral-on");
    return false;
  }
}

function validarEmail() {

  if (pEmail.test(Email.value)) {

    errorEmail.classList.add("errorGeneral");
    errorEmail.classList.remove("errorGeneral-on");

    return true;


  } else if (Email.value == 0) {

    errorEmail.classList.remove("errorGeneral");
    errorEmail.classList.add("errorGeneral-on");
    return false;

  } else {
    errorEmail.classList.remove("errorGeneral");
    errorEmail.classList.add("errorGeneral-on");
    return false;
  }
}

function validarLetra() {

  let resultado = false;
  let numeroDni = Dni.value.substring(0,8);
  const arrayLetra = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];

  numeroDni = numeroDni % 23;

  
  if (arrayLetra[numeroDni]== Dni.value.substring(8,).toUpperCase()) {
    resultado = true;
  } else {
    resultado = false;
  }
  return resultado;
}

function validarDni() {

  if (pDni.test(Dni.value)&&validarLetra()) {

    errorDNI.classList.add("errorGeneral");
    errorDNI.classList.remove("errorGeneral-on");

    return true;

  } else if (Dni.value == 0) {

    errorDNI.classList.remove("errorGeneral");
    errorDNI.classList.add("errorGeneral-on");

    return false;

  }else{
    errorDNI.classList.remove("errorGeneral");
    errorDNI.classList.add("errorGeneral-on");

    return false;

  }
}



