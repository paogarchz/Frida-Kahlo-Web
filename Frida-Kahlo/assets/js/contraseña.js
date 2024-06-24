// Obtenemos los elementos necesarios
const passwordInput = document.getElementById("password");
const togglePasswordButton = document.getElementById("togglePassword");

// Agregamos un evento clic al botón del ojo
togglePasswordButton.addEventListener("click", function () {
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
    togglePasswordButton.classList.toggle("fa-eye-slash");
});
