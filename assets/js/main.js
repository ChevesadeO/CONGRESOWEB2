
tsParticles.load("particles", {
  background: { color: "transparent" },
  particles: {
    number: { value: 50 },
    size: { value: 3 },
    color: { value: "#3E0A75" },
    opacity: { value: 0.20 },
    move: {
      enable: true,
      speed: 0.9
    }
  }
});



const hero = document.querySelector(".hero-elegante");

hero.addEventListener("mousemove", e => {
  const rect = hero.getBoundingClientRect();
  hero.style.setProperty("--x", `${e.clientX - rect.left}px`);
  hero.style.setProperty("--y", `${e.clientY - rect.top}px`);
});


tsParticles.load("particles-light", {
  background: { color: "transparent" },
  particles: {
    number: { value: 50 },
    size: { value: 3 },
    color: { value: ["#5B0FA6", "#"] },
    opacity: { value: 0.18 },
    move: {
      enable: true,
      speed: 0.9
    }
  }
});


const heroClaro = document.querySelector(".hero-claro");

heroClaro.addEventListener("mousemove", e => {
  const rect = heroClaro.getBoundingClientRect();
  heroClaro.style.setProperty("--x", `${e.clientX - rect.left}px`);
  heroClaro.style.setProperty("--y", `${e.clientY - rect.top}px`);
});


window.matchMedia('(prefers-color-scheme: dark)').matches 



document.addEventListener("DOMContentLoaded", function() {
  const hora = new Date().getHours();
  const hero = document.getElementById("hero");

  if (hora >= 6 && hora < 19) {
    hero.classList.add("hero-claro");
    hero.classList.remove("hero-oscuro");
  } else {
    hero.classList.add("hero-oscuro");
    hero.classList.remove("hero-claro");
  }
});

document.addEventListener("DOMContentLoaded", function() {

  const hora = new Date().getHours();
  const body = document.body;

  if (hora >= 6 && hora < 19) {
    body.classList.add("modo-claro");
  } else {
    body.classList.add("modo-oscuro");
  }

  // Fade general
  setTimeout(() => {
    body.classList.add("visible");
  }, 100);

});