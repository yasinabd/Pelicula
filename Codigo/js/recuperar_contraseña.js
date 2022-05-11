//Variables

const password = document.getElementById("password");
const repetirPassword = document.getElementById("repetirPassword");
const email = document.getElementById("email");
const dni = document.getElementById("dni");
const formulario = document.getElementById("formulario");

//Error/es

const errorContraseña = document.getElementById("errorContraseña");
const errorContraseña2 = document.getElementById("errorContraseña2");
const errorEmail = document.getElementById("errorEmail");
const errorDNI = document.getElementById("errorDNI");

//Eventos

password.addEventListener("keyup", validarContraseña);
repetirPassword.addEventListener("keyup", validarRepetirContraseña);
email.addEventListener("keyup", validarEmail);
dni.addEventListener("keyup", validarDni);
formulario.addEventListener("submit", (validarFormulario)=>{
  
  if(validarContraseña() && validarRepetirContraseña() && validarEmail() && validarDni()){
      
  }else{
      validarFormulario.preventDefault();
  }
});

//Expresiones regulares

const pPassword = /^(?=.{8,45}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/;
const pEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/;
const pDni = /^[0-9]{8}[A-Za-z]{1}$/;

function validarContraseña() {

    if (pPassword.test(password.value)) {
  
      errorContraseña.classList.add("errorGeneral");
      errorContraseña.classList.remove("errorGeneral-on");
  
      return true;
  
  
    } else if (password.value == 0) {
  
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
  
    if (repetirPassword.value == password.value) {
  
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
  
    if (pEmail.test(email.value)) {
  
      errorEmail.classList.add("errorGeneral");
      errorEmail.classList.remove("errorGeneral-on");
  
      return true;
  
  
    } else if (email.value == 0) {
  
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
    let numeroDni = dni.value.substring(0,8);
    const arrayLetra = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
  
    numeroDni = numeroDni % 23;
  
    
    if (arrayLetra[numeroDni]== dni.value.substring(8,).toUpperCase()) {
      resultado = true;
    } else {
      resultado = false;
    }
    return resultado;
  }
  
  function validarDni() {
  
    if (pDni.test(dni.value)&&validarLetra()) {
  
      errorDNI.classList.add("errorGeneral");
      errorDNI.classList.remove("errorGeneral-on");
  
      return true;
  
    } else if (dni.value == 0) {
  
      errorDNI.classList.remove("errorGeneral");
      errorDNI.classList.add("errorGeneral-on");
  
      return false;
  
    }else{
      errorDNI.classList.remove("errorGeneral");
      errorDNI.classList.add("errorGeneral-on");
  
      return false;
  
    }
  }