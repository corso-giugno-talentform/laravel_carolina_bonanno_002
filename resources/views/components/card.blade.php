<div class="card shadow-sm" style="width: 20rem; height: 550px">
    <img class="card-img-top img-small" src="{{ $article['img'] }}" alt="{{ $article['alt'] }}">
    <div class="card-body d-flex flex-column gap-1">
        <h5>{{ $article['title'] }}</h5>
        <p class="card-text">{{ $article['description'] }}</p>
        <small class="text-body-secondary">By {{ $article['author'] }}</small>
        <a type='button' href="{{ route('article', ['article' => $article['slug']]) }}"
            class="btn btn1 mt-auto align-self-end justify-content-end">Articolo
            Completo</a>
    </div>
</div>
