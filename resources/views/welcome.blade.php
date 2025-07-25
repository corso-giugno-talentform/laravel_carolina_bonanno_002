<x-main>
    <x-slot name="title">Velvet Frame | Homepage</x-slot>
    <x-slot name='nav'><x-navbar :notDetail="true"></x-navbar></x-slot>
    <x-postSection :articles="$articles" />
</x-main>
