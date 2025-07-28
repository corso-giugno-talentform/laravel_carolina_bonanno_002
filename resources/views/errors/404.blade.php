<x-main>
    <x-slot name="title">404 | Not Found</x-slot>
    <x-slot name='nav'><x-navbar :isHidden="true"></x-navbar></x-slot>
    <div class="container my-5 mx-auto d-flex justify-content-center align-items-center">
        <img class="img-fluid p-4 divider" src="/images/404.gif" alt="404 Not Found">
        <div class="p-4 w-50 d-flex flex-column">
            <h5>Page Not Found</h5>
            <p>Oops, sembra che qui non ci sia il contenuto che stai cercando!</p>
        </div>
    </div>
</x-main>
