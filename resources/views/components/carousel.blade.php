<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">

<div id="carouselProjects" class="carousel slide" data-interval="false">
    <div class="carousel-inner">
        @foreach ($slides as $index => $slide)
            @component('components.carousel-slide', [
                'isActive' => $index === 0,
                'images' => $slide['images'],
                'buttonLink' => $slide['buttonLink'],
                'title' => $slide['title'],
                'description' => $slide['description'],
                'warning' => $slide['warning'],
                'skills' => $slide['skills'],
            ])
            @endcomponent
        @endforeach
    </div>
    <!-- Controles de navegação -->
    <a class="carousel-control-prev" href="#carouselProjects" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselProjects" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>