@extends('layouts.main')

@section('title', 'Início')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@section('content')

  @php
  $slides = [
      [
          'images' => ['/images/login-mescola.png', '/images/cards-mescola.png', '/images/mescola3.png', '/images/mescola4.png'],
          'buttonLink' => 'https://minhaescola.educacao.al.gov.br/',
          'title' => 'MINHA ESCOLA',
          'description' => 'Desenvolvido para incentivar as escolas a promoverem tarefas que mantenham a limpeza e reforcem o trabalho em equipe entre os alunos.',
          'warning' => '*Telas reduzidas para preservar informações confidenciais',
          'skills' => ['/images/laravel.svg', '/images/php.svg', '/images/bootstrap.svg', '/images/javascript.svg', '/images/mysql.svg']
      ],
      [
          'images' => ['/images/moduloE10login.png', '/images/moduloE10consulta.png'],
          'buttonLink' => 'https://escola10.educacao.al.gov.br/',
          'title' => 'ESCOLA10 MÓDULO DO ALUNO',
          'description' => 'Desenvolvido para auxiliar alunos beneficiados pelo programa Escola 10, o sistema permite que os estudantes consultem o status do pagamento da bolsa e solicitem ajuda quando necessário.',
          'warning' => '*Telas reduzidas para preservar informações confidenciais',
          'skills' => ['/images/laravel.svg', '/images/php.svg', '/images/bootstrap.svg', '/images/javascript.svg', '/images/mysql.svg']
      ],
      [
          'images' => ['/images/gppc1.png', '/images/gppc2.png', '/images/gppc3.png'],
          'buttonLink' => 'https://gppc.educacao.al.gov.br/',
          'title' => 'GESTÃO DE PROCESSOS',
          'description' => 'Desenvolvido para aprimorar o desempenho dos servidores no gerenciamento de processos estaduais, o projeto digitalizou e simplificou demandas antes realizadas em papel. ',
          'warning' => '*Telas reduzidas para preservar informações confidenciais',
          'skills' => ['/images/laravel.svg', '/images/php.svg', '/images/bootstrap.svg', '/images/javascript.svg', '/images/mysql.svg']
      ],
      [
          'images' => ['/images/censo1.png', '/images/censo2.png', '/images/censo3.png', '/images/censo4.png'],
          'buttonLink' => 'https://censo.educacao.al.gov.br/',
          'title' => 'CENSO DE SERVIDORES',
          'description' => 'Desenvolvido para agilizar o cadastro de servidores, antes feito em papel, o sistema integrou servidores de várias cidades e compartilha os dados com o sistema de perfil de lotação, ampliando sua utilidade.',
          'warning' => '*Telas reduzidas para preservar informações confidenciais',
          'skills' => ['/images/codeigniter.svg', '/images/php.svg', '/images/bootstrap.svg', '/images/javascript.svg', '/images/mysql.svg']
      ],
      [
          'images' => ['/images/lotacao1.png', '/images/lotacao2.png', '/images/lotacao3.png', '/images/lotacao4.png'],
          'buttonLink' => 'https://lotacao.educacao.al.gov.br/',
          'title' => 'PERFIL DE LOTAÇÃO',
          'description' => 'Desenvolvido para otimizar o gerenciamento de servidores no estado de Alagoas, facilitando o direcionamento de servidores para diferentes unidades administrativas (GERES) conforme as demandas específicas de cada uma.',
          'warning' => '*Telas reduzidas para preservar informações confidenciais (em desenvolvimento)',
          'skills' => ['/images/laravel.svg', '/images/php.svg', '/images/bootstrap.svg', '/images/javascript.svg', '/images/mysql.svg']
      ],
      [
          'images' => ['/images/ded1.png', '/images/ded2.png', '/images/ded3.png', '/images/ded4.png'],
          'buttonLink' => 'https://example.com/link2',
          'title' => 'CLUBE DE DUNGEONS & DRAGONS',
          'warning' => '*Desenvolvido para fins de aprendizado',
          'description' => 'O sistema apresenta uma coleção exclusiva de imagens e vídeos de Stranger Things e permite inscrições para um clube de D&D. Ao clicar no primeiro botão, as imagens se invertem e a cor principal do sistema muda, revelando uma atmosfera sombria inspirada no submundo da série.',
          'skills' => ['/images/react.svg', '/images/javascript.svg', '/images/mysql.svg']
      ],
  ];
  @endphp
  
<section class="imagem-principal">
  <div class="main-container">
    <h1 class="main-text">TENHA SEU SITE COM A CARA DA SUA EMPRESA</h1>
    <p class="secondary-text">Desenvolvimento de Sites Institucionais, Lojas Virtuais, Landing pages!</p>
  </div>
  <div class="skills-container">
    <img src="{{ asset('images/laravel.svg') }}" alt="">
    <img src="{{ asset('images/react.svg') }}" alt="">
    <img src="{{ asset('images/spring.svg') }}" alt="">
    <img src="{{ asset('images/docker.svg') }}" alt="">
    <img src="{{ asset('images/aws.svg') }}" alt="">
  </div>
</section>
  <section class="about">
    <h1 class="main-text">SERVIÇOS</h1>
    <div class="custom-cards">
      <div class="custom-card">
        <img src="{{ asset('images/icons/graph.svg') }}" alt="">
        <h2 class="title-card">Análise Estratégica e Planejamento</h2>
        <p>Planejamento baseado em dados e pesquisa de mercado para entender as necessidades do cliente e criar soluções personalizadas que impulsionam resultados.</p>
      </div>
      <div class="custom-card">
        <img src="{{ asset('images/icons/pencil.svg') }}" alt="">
        <h2 class="title-card">Design UX/UI Intuitivo</h2>
        <p>Foco em uma experiência de usuário envolvente e interfaces intuitivas, garantindo uma navegação fácil e uma apresentação visual impactante.</p>
      </div>
      <div class="custom-card">
        <img src="{{ asset('images/icons/screen.svg') }}" alt="">
        <h2 class="title-card">Desenvolvimento Web</h2>
        <p>Criação de sites e sistemas sob medida, adaptados aos objetivos e ao perfil do cliente, com tecnologia de ponta e performance otimizada.</p>
      </div>
      <div class="custom-card">
        <img src="{{ asset('images/icons/cart.svg') }}" alt="">
        <h2 class="title-card">Lojas Virtuais que Vendem Mais</h2>
        <p>Desenvolvimento de e-commerces focados em conversão, com experiência de compra simples e ferramentas de vendas integradas para potencializar os resultados.</p>
      </div>
      <div class="custom-card">
        <img src="{{ asset('images/icons/shield.svg') }}" alt="">
        <h2 class="title-card">Proteção e Segurança de Dados</h2>
        <p>Implementação de práticas rigorosas de segurança para proteger dados e assegurar a integridade do sistema, oferecendo tranquilidade aos clientes.</p>
      </div>
      <div class="custom-card">
        <img src="{{ asset('images/icons/phone.svg') }}" alt="">
        <h2 class="title-card">Suporte Confiável e Proativo</h2>
        <p>Atendimento constante e suporte técnico para manter seu site ou sistema sempre atualizado, seguro e pronto para atender ao público.</p>
      </div>
    </div>
  </section>
  <div class="container-carousel">
    @component('components.carousel', ['slides' => $slides])
    @endcomponent
  </div>
@endsection