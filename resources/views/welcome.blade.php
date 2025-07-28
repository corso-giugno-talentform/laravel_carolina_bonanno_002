<x-main>
    <x-slot name="title">Velvet Frame | Homepage</x-slot>
    <x-slot name='nav'><x-navbar :isDetail="false"></x-navbar></x-slot>
    <x-heroSection></x-heroSection>
    <x-postSection :articles="$articles" />
</x-main>
