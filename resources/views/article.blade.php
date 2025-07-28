<x-main>
    <x-slot name="title">{{ $article['category'] }}</x-slot>
    <x-slot name='nav'><x-navbar :isHidden="false"></x-navbar></x-slot>
    <article class="container.fluid">
        <img class="img-fluid w-100 h-100 object-fit-cover"src="{{ $article['img'] }}" alt="{{ $article['alt'] }}">
        <div class="m-5 d-flex flex-column p-5">
            <small class="text-center mb-4">Categoria: <b>{{ $article['category'] }}</b></small>
            <h1 class="text-center title mb-5">{{ $article['title'] }}</h1>
            <p class="mb-4">{{ $article['paragraph'] }}</p>
            <small class="px-2">Articolo di: <b>{{ $article['author'] }}</b></small>
        </div>
    </article>
    <x-form>
        <h3 class="text-center title">Hai commenti su «{{ $article['title'] }}»?</h3>
        <p class="text-center">Scrivici utilizzando il form sottostante.</p>
        <x-slot name='textarea'>Scrivi qui:</x-slot>
    </x-form>
</x-main>
