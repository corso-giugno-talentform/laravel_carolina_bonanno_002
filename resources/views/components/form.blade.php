<div class="container my-5 mx-auto">
    <div class="mx-5">
        {{ $slot }}
    </div>
    <form action="{{ route('send') }}" method="POST" class="m-5">
        @csrf <!-- richiesta associata a ogni nostro elemento -->
        <div class="row mb-3">
            <div class="col">
                {{ $idArticle ?? null }}
                <label for="name"class="form-label">Nome</label>
                <input type="text" id="name" class="form-control" placeholder="Nome" aria-label="First name"
                    name="firstname">
            </div>
            <div class="col">
                <label for="lastname" class="form-label">Cognome</label>
                <input type="text" id="lastname" class="form-control" placeholder="Cognome" aria-label="Last name"
                    name="lastname">
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">La tua email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>
        <div class="mb-3">
            <label for="text-area" class="form-label">{{ $textarea ?? 'La tua richiesta:' }}</label>
            <textarea class="form-control" id="text-area" rows="3" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn1">Invia</button>
    </form>
</div>
