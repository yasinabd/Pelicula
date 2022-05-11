//Variables

const usuario = document.getElementById("usuario");
const password = document.getElementById("password");
const formulario = document.getElementById("formulario");

//Error/es

const errorUsuario = document.getElementById("errorUsuario");
const errorContraseña = document.getElementById("errorContraseña");

//Evento/s

usuario.addEventListener("keyup", validarUsuario);
password.addEventListener("keyup", validarContraseña);
formulario.addEventListener("submit", (validarFormulario)=>{
    if(validarUsuario() && validarContraseña()){
        
    }else{
        validarFormulario.preventDefault();
    }
});

//Expresiones regulares (p de patrón)

const pUsuario = /\w{6,45}/;
const pPassword = /^(?=.{8,45}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/;

//Funciones

function validarUsuario() {

    if (pUsuario.test(usuario.value)) {
  
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

