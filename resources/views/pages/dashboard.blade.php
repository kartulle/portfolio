@extends('layouts.main')

@section('title', 'Início')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@section('content')

  @php
  $slides = [
      [
          // 'backgroundImage' => 'path/to/image1.jpg',
          'images' => ['/images/login-mescola.png', '/images/cards-mescola.png', '/images/dashboard-escola.png'],
          'buttonLink' => 'https://minhaescola.educacao.al.gov.br/',
          'description' => 'lalalaa'
      ],
      [
          // 'backgroundImage' => 'path/to/image2.jpg',
          'images' => ['path/to/inner-image3.jpg', 'path/to/inner-image4.jpg'],
          'buttonLink' => 'https://example.com/link2',
          'description' => 'Descrição do Slide 2'
      ]
      // Adicione mais slides conforme necessário
  ];
  @endphp
  
<section class="imagem-principal">
  <div class="texto-principal">
    {{-- <h1>TENHA SEU SITE COM A CARA DA SUA EMPRESA</h1> --}}
    <p>Desenvolvimento de Sites Institucionais, Lojas Virtuais, Landing pages!</p>
  </div>
  <div class="habilidades">
    <img src="{{ asset('images/laravel.svg') }}" alt="">
    <img src="{{ asset('images/react.svg') }}" alt="">
    <img src="{{ asset('images/spring.svg') }}" alt="">
    <img src="{{ asset('images/docker.svg') }}" alt="">
    <img src="{{ asset('images/aws.svg') }}" alt="">
  </div>
</section>
  <section class="about">
    <h1>Sobre Nós</h1>
    <p>Bem-vindo à nossa página sobre nós. Aqui você encontrará informações sobre a nossa empresa, nossa missão e nossos valores.</p>
    <p>Nossa equipe está comprometida em oferecer o melhor serviço e suporte aos nossos clientes. Acreditamos em inovação, qualidade e responsabilidade.</p>
  </section>
  <div class="container-carousel">
    @component('components.carousel', ['slides' => $slides])
    @endcomponent
  </div>
@endsection