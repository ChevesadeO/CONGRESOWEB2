/* ===== PARTICULAS OSCURO ===== */
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

/* ===== EFECTO MOUSE OSCURO ===== */
const hero = document.querySelector(".hero-elegante");

if (hero) {
  hero.addEventListener("mousemove", e => {
    const rect = hero.getBoundingClientRect();
    hero.style.setProperty("--x", `${e.clientX - rect.left}px`);
    hero.style.setProperty("--y", `${e.clientY - rect.top}px`);
  });
}

/* ===== PARTICULAS CLARO ===== */
tsParticles.load("particles-light", {
  background: { color: "transparent" },
  particles: {
    number: { value: 50 },
    size: { value: 3 },
    color: { value: "#5B0FA6" }, // 🔥 corregido
    opacity: { value: 0.18 },
    move: {
      enable: true,
      speed: 0.9
    }
  }
});

/* ===== EFECTO MOUSE CLARO ===== */
const heroClaro = document.querySelector(".hero-claro");

if (heroClaro) {
  heroClaro.addEventListener("mousemove", e => {
    const rect = heroClaro.getBoundingClientRect();
    heroClaro.style.setProperty("--x", `${e.clientX - rect.left}px`);
    heroClaro.style.setProperty("--y", `${e.clientY - rect.top}px`);
  });
}

/* ===== CAMBIO AUTOMATICO DIA/NOCHE ===== */
document.addEventListener("DOMContentLoaded", function() {

  const hora = new Date().getHours();
  const hero = document.getElementById("hero");

  if (hero) {
    if (hora >= 6 && hora < 19) {
      hero.classList.add("hero-claro");
      hero.classList.remove("hero-oscuro");
    } else {
      hero.classList.add("hero-elegante");
      hero.classList.remove("hero-claro");
    }
  }

});

/* ===== MODO BODY ===== */
document.addEventListener("DOMContentLoaded", function() {

  const hora = new Date().getHours();
  const body = document.body;

  if (hora >= 6 && hora < 19) {
    body.classList.add("modo-claro");
  } else {
    body.classList.add("modo-oscuro");
  }

  setTimeout(() => {
    body.classList.add("visible");
  }, 100);

});