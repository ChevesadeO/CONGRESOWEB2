
tsParticles.load("particles", {
  background: { color: "transparent" },
  particles: {
    number: { value: 50 },
    size: { value: 3 },
    color: { value: "#47C965" },
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

