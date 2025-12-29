<?php $page = "inicio"; ?>
<?php include __DIR__ . "/includes/header.php"; ?>

<!-- HERO -->
<section id="inicio" class="hero" style="background-image: url('assets/img/hero.jpg');">
<div class="hero-overlay"></div>

<div class="container hero-content">
<h1 class="hero-title">
    CONECTAMOS <span>TALENTOS</span>
</h1>

<div class="hero-actions">
    <a class="btn btn-primary" href="#contacto">COTIZA CON NOSOTROS</a>
    <button class="btn btn-ghost" id="btnVideo">
    ▶ VIDEO PRESENTACIÓN
    </button>
</div>
</div>

<!-- Modal de video (opcional) -->
<div class="modal" id="videoModal" aria-hidden="true">
<div class="modal-content">
    <button class="modal-close" id="closeModal">✕</button>
    <div class="ratio">
    <!-- Cambia el link a tu video -->
    <iframe id="videoFrame"
            src=""
            title="Video presentación"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
</div>
</div>
</section>

<!-- SOBRE NOSOTROS -->
<section id="nosotros" class="about">
<div class="container about-grid">
<div class="about-img">
    <img src="assets/img/about.jpg" alt="Equipo trabajando">
</div>

<div class="about-text">
    <h2>Sobre Nosotros</h2>

    <p>
    En Conecta Talent SAC no solo reclutamos talento, creamos conexiones humanas
    que impulsan el crecimiento real.
    </p>

    <p>
    Acompañamos a pequeñas y medianas empresas que buscan formar equipos sólidos,
    confiables y alineados a su esencia.
    </p>

    <p>
    Sabemos lo que significa emprender con pocos recursos y mucho corazón.
    Por eso entendemos de cerca los desafíos de las PYMES.
    </p>

    <p>
    Combinamos experiencia en selección, evaluación y cultura organizacional,
    con cercanía, empatía y atención personalizada.
    </p>

    <p class="about-strong">
    Confiá en nosotros. Tu equipo comienza aquí.
    </p>
</div>
</div>
</section>

<!-- SERVICIOS -->
<section id="servicios" class="services">
<div class="container">
<h2 class="section-title">Servicios</h2>

<div class="cards">
    <article class="card">
    <h3>Reclutamiento & Selección</h3>
    <p>Búsqueda y evaluación de candidatos según tu perfil y cultura.</p>
    </article>

    <article class="card">
    <h3>Evaluación por Competencias</h3>
    <p>Filtros técnicos y conductuales para contratar con seguridad.</p>
    </article>

    <article class="card">
    <h3>Asesoría para PYMES</h3>
    <p>Te ayudamos a construir equipos sólidos con procesos simples.</p>
    </article>
</div>
</div>
</section>

<!-- CONTACTO -->
<section id="contacto" class="contact">
<div class="container contact-grid">
<div class="contact-info">
    <h2>Contacto</h2>
    <p>¿Listo para conectar con el talento ideal? Escríbenos.</p>

    <ul class="contact-list">
    <li><strong>Ubicación:</strong> Lima, Perú</li>
    <li><strong>Email:</strong> contacto@tudominio.com</li>
    <li><strong>WhatsApp:</strong> +51 999 999 999</li>
    </ul>
</div>

<form class="contact-form" action="process/contact.php" method="POST">
    <div class="row">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" required>
    </div>
    <div>
        <label>Empresa</label>
        <input type="text" name="empresa" required>
    </div>
    </div>

    <div class="row">
    <div>
        <label>Email</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label>Teléfono</label>
        <input type="text" name="telefono" required>
    </div>
    </div>

    <label>Mensaje</label>
    <textarea name="mensaje" rows="5" required></textarea>

    <button class="btn btn-primary" type="submit">Enviar</button>
    <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($_SESSION['csrf'] ?? ''); ?>">
</form>
</div>
</section>

<!-- CLIENTES -->
<section id="clientes" class="clients">
  <div class="container">
    <h2 class="clientes-title">Portafolio de Clientes y Verticales</h2>

    <div class="clients-box">
      <div class="clients-grid">
        <!-- Reemplaza las rutas por tus logos -->
        <img src="assets/img/clientes/cliente1.png" alt="Clientes">
      </div>
    </div>
  </div>
</section>

<!-- POR QUÉ ELEGIRNOS -->
<section id="porque" class="why">
  <div class="container">
    <p class="why-mini">NUESTRAS VENTAJAS</p>
    <h2 class="why-title">¿Por qué elegirnos?</h2>
    <p class="why-sub">Soluciones innovadoras que transforman la experiencia de tus clientes</p>

    <div class="why-grid">
      <article class="why-card">
        <div class="why-icon why-orange">⚡</div>
        <h3>Rapidez y Objetividad</h3>
        <p>
          Atención ágil y eficiente que reduce tiempos de espera. Resolvemos de manera objetiva
          y profesional.
        </p>
      </article>

      <article class="why-card">
        <div class="why-icon why-blue">📈</div>
        <h3>Innovación Constante</h3>
        <p>
          Un servicio eficaz que mejora la imagen de tu empresa, proyectando seriedad,
          compromiso y profesionalismo.
        </p>
      </article>

      <article class="why-card">
        <div class="why-icon why-green">🕒</div>
        <h3>Disponibilidad 24/7</h3>
        <p>
          Servicio especializado, disponible los 365 días del año sin demoras ni restricciones.
        </p>
      </article>
    </div>
  </div>
</section>


<?php include __DIR__ . "/includes/footer.php"; ?>
