<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
<div class="carousel-item {{ $isActive ? 'active' : '' }} radial-gradient-bg">
    <div class="overlay container-slide"> 
        <div class="container-infos">
            <a href="{{ $buttonLink }}" class="btn-visit" target="_blank">Visite</a>
            <div class="main-info">
                <h1 class="title-project">{{ $title }}</h1>
                <p class="description">{{ $description }}</p>
                <div class="warning">{{ $warning }}</div>
            </div>
            <div class="skills-project">
                @foreach ($skills as $skill)
                    <img src="{{ $skill }}" alt="Imagem da habilidade usada" class="inner-image m-1">
                @endforeach
            </div>
        </div>      
        <div class="images-container">
            @foreach ($images as $img)
                <img src="{{ $img }}" alt="Imagem interna do slide" class="inner-image m-1">
            @endforeach
        </div>
    </div>
</div>