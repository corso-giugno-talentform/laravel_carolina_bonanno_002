<section class="container mx-auto">
    <h2 class="title text-center m-5">Gli ultimi articoli</h2>
    <div class="d-flex flex-column flex-wrap flex-lg-row align-items-center justify-content-center gap-3">
        @foreach ($articles as $article)
            <x-card :article="$article"></x-card>
        @endforeach
    </div>
</section>
