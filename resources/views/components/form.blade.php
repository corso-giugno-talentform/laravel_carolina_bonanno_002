<div class="container my-5 mx-auto">
    {{ $slot }}
</div>
<form class="m-5">
    <div class="row mb-3">
        <div class="col">
            <label for="name"class="form-label">Nome</label>
            <input type="text" id="name" class="form-control" placeholder="Nome" aria-label="First name">
        </div>
        <div class="col">
            <label for="lastname" class="form-label">Cognome</label>
            <input type="text" id="lastname" class="form-control" placeholder="Cognome" aria-label="Last name">
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">La tua email</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="text-area" class="form-label">{{ $textarea }}</label>
        <textarea class="form-control" id="text-area" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn1">Invia</button>
</form>
