<x-main>
    <x-slot name="title">{{ $article['category'] }}</x-slot>
    <x-slot name='nav'><x-navbar :isDetail="true" :isHidden="false"></x-navbar></x-slot>
    <article class="container.fluid">
        <img class="img-fluid w-100 h-100 object-fit-cover"src="{{ $article['img'] }}" alt="{{ $article['alt'] }}">
        <div class="m-5 d-flex flex-column">
            <h1 class="text-center title">{{ $article['title'] }}</h1>
            <p class="py-5">{{ $article['paragraph'] }}</p>
        </div>
    </article>
</x-main>
