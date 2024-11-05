@extends('layouts.main')

@section('title', 'Início')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@section('content')
<section class="imagem-principal">
  <div class="texto-principal">
    <h1>TENHA SEU SITE COM A CARA DA SUA EMPRESA</h1>
    <p>Desenvolvimento de Sites Institucionais, Lojas Virtuais, Landing pages!</p>
  </div>
  <div class="habilidades">
    <img src="{{ asset('images/laravel.svg') }}" alt="">
    <img class="skill-icon"src="{{ asset('images/laravel2.svg') }}" alt="">
    <img class="skill-icon" src="{{ asset('images/react2.svg') }}" alt="">
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
@endsection