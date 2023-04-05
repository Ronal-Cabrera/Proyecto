const boton = document.querySelector("#boton");
let email = document.querySelector("#email");
let pass = document.querySelector("#pass");
let campoLLeno = false;
let campoLLeno2 = false;
const colorC = "#a5ecec";
const colorO = "#0f8a8a";

//-------validación email--------------//

email.addEventListener("input", () => {
  if (email.value != "") {
    campoLLeno = true;
  } else {
    campoLLeno = false;
  }
  if (campoLLeno2 == true && campoLLeno == true) {
    boton.removeAttribute("disabled");
    boton.style.background = colorO;
  } else {
    boton.style.background = colorC;
    boton.setAttribute("disabled", "");
  }
});

//-------validación contraseña--------------//

pass.addEventListener("input", () => {
  if (pass.value != "") {
    campoLLeno2 = true;
  } else {
    boton.setAttribute("disabled", "");
    campoLLeno2 = false;
  }
  if (campoLLeno2 == true && campoLLeno == true) {
    boton.removeAttribute("disabled");
    boton.style.background = colorO;
  } else {
    boton.style.background = colorC;
    boton.setAttribute("disabled", "");
  }
});

// boton.addEventListener("click", () => {
//   if (email.value == "" || pass.value == "") {
//     error.innerHTML =
//       "<p>Correo electronico o contraseña incorrecta. Comprueba el nombre de usuario y vuelve a intentarlo.</p>";
//     error.classList.add("error");
//   }
// });
