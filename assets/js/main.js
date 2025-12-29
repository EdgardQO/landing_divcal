// Menú responsive
const burger = document.getElementById("burger");
const nav = document.getElementById("nav");

if (burger && nav) {
  burger.addEventListener("click", () => nav.classList.toggle("show"));

  // Cierra menú al hacer click en un link
  document.querySelectorAll(".nav-link").forEach(a => {
    a.addEventListener("click", () => nav.classList.remove("show"));
  });
}

// Activo según sección (scroll)
const links = document.querySelectorAll(".nav-link");
const sections = ["inicio", "nosotros", "servicios", "contacto", "clientes", "porque"].map(id => document.getElementById(id));


window.addEventListener("scroll", () => {
  const y = window.scrollY + 120;
  let current = "inicio";

  sections.forEach(sec => {
    if (sec && sec.offsetTop <= y) current = sec.id;
  });

  links.forEach(l => {
    l.classList.toggle("active", l.getAttribute("href") === `#${current}`);
  });
});

// Modal video
const btnVideo = document.getElementById("btnVideo");
const modal = document.getElementById("videoModal");
const closeModal = document.getElementById("closeModal");
const videoFrame = document.getElementById("videoFrame");

// Pon tu URL embed (YouTube ejemplo)
const videoEmbed = "https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1";

function openModal() {
  modal.classList.add("show");
  modal.setAttribute("aria-hidden", "false");
  videoFrame.src = videoEmbed;
}
function closeVideoModal() {
  modal.classList.remove("show");
  modal.setAttribute("aria-hidden", "true");
  videoFrame.src = "";
}

if (btnVideo && modal) btnVideo.addEventListener("click", openModal);
if (closeModal) closeModal.addEventListener("click", closeVideoModal);
if (modal) modal.addEventListener("click", (e) => {
  if (e.target === modal) closeVideoModal();
});
