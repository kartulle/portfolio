<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
  <!-- Adicione o CSS do Bootstrap após o seu CSS personalizado -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <header class="custom-header">
    <div class="custom-logo"><b>Karol</b>.dev</div>
    <nav class="custom-nav-container">
      <ul class="custom-nav-links">
        <li><a href="#carouselProjects">PROJETOS</a></li>
        <li><a href="https://wa.me/5582981337181" target="_blank">CONTATO</a></li>
      </ul>
    </nav>
    <div class="custom-menu-toggle" id="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </header>

  <script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
      const navbar = document.querySelector('.custom-nav-container');
      navbar.classList.toggle('active');
      this.classList.toggle('open');
    });
  </script>
</body>
</html>
