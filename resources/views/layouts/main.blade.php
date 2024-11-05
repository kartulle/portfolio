<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  @stack('styles')
</head>
<body>
  <!-- Incluir o Header -->
  @include('layouts.nav')

  <!-- Conteúdo Principal -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="footer">
      <a href="mailto:email@exemplo.com?subject=Contato%20do%20site">Contate por email</a>
      <p>&copy; {{ date('Y') }} Meu Site. Todos os direitos reservados.</p>
  </footer>
</body>
</html>