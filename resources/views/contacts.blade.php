<x-main>
    <x-slot name="title">Velvet Frame | Contattaci</x-slot>
    <x-slot name='nav'><x-navbar :isHidden="false"></x-navbar></x-slot>
    <x-form>
        <h1 class="title text-center">Contattaci</h1>
        <p class="text-center">Hai bisogno di aiuto? Compila il form qui sotto.</p>
        <x-slot name='textarea'>Dicci tutto</textarea>
    </x-form>
</x-main>
