<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>
<body>
  <header class="header">
    <div class="logo"><b>Karol</b>.dev</div>
    <nav class="navbar">
      <ul class="nav-links">
        <li><a href="https://www.linkedin.com/in/karolainelima" target="_blank"><img src="{{ asset('images/linkedin.svg') }}" alt="LinkedIn"></a></li>
        <li><a href="https://www.instagram.com/kartulle/" target="_blank"><img src="{{ asset('images/insta.svg') }}" alt="Instagram"></a></li>
        <li><a href="https://wa.me/5582981337181" target="_blank"><img src="{{ asset('images/whatsapp.svg') }}" alt="Whatsapp"></a></li>
      </ul>
    </nav>
    <div class="menu-toggle" id="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </header>

  <script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
      const navbar = document.querySelector('.navbar');
      navbar.classList.toggle('active');
      this.classList.toggle('open');
    });
  </script>
</body>
</html>
