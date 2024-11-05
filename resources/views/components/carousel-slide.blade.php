<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
<div class="carousel-item {{ $isActive ? 'active' : '' }} radial-gradient-bg">
    <div class="overlay container-slide"> 
        <div class="container-infos">
            <a href="{{ $buttonLink }}" class="btn-visit">Visite</a>
            <p class="description">{{ $description }}</p>
        </div>      
        <div class="images-container">
            @foreach ($images as $img)
                <img src="{{ $img }}" alt="Imagem interna do slide" class="inner-image m-1">
            @endforeach
        </div>
    </div>
</div>