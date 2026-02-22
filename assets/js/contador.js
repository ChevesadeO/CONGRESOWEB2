document.addEventListener("DOMContentLoaded", () => {

  const checkboxes = document.querySelectorAll("input[name='conferencias[]']");
  const contador = document.getElementById("contador");

  function actualizarContador() {
    let seleccionadas = document.querySelectorAll("input[name='conferencias[]']:checked").length;
    contador.textContent = seleccionadas;

    // Feedback visual
    if (seleccionadas >= 3) {
      contador.classList.remove("text-danger");
      contador.classList.add("text-success");
    } else {
      contador.classList.remove("text-success");
      contador.classList.add("text-danger");
    }
  }

  checkboxes.forEach(cb => cb.addEventListener("change", actualizarContador));

  actualizarContador();
});



document.querySelector("form").addEventListener("submit", function(e){

  let seleccionadas = document.querySelectorAll("input[name='conferencias[]']:checked").length;

  if (seleccionadas < 3) {
    e.preventDefault();
    alert("⚠️ Debes seleccionar al menos 3 conferencias antes de enviar.");
  }
});
