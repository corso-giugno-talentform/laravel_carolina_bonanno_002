<div class="container my-5 mx-auto">
    <div class="mx-5">
        {{ $slot }}
    </div>

    @if (session('success'))
        <x-alert color="alert-success">{{ session('success') }}</x-alert>
    @endif

    {{-- @session('success')
        {{ session('success') }}
    @endsession --}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('send') }}" method="POST" class="m-5">
        @csrf <!-- richiesta associata a ogni nostro elemento -->
        <div class="row mb-3">
            <div class="col">
                {{ $idArticle ?? null }}
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" class="form-control @error('firstname') is-invalid @enderror"
                    placeholder="Nome" aria-label="First name" name="firstname" value={{ old('firstname') }}>
            </div>
            <div class="col">
                <label for="lastname" class="form-label">Cognome</label>
                <input type="text" id="lastname" class="form-control @error('lastname') is-invalid @enderror"
                    placeholder="Cognome" aria-label="Last name" name="lastname" value={{ old('lastname') }}>
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">La tua email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                placeholder="name@example.com" name="email" value={{ old('email') }}>
        </div>
        <div class="mb-3">
            <label for="text-area" class="form-label">{{ $textarea ?? 'La tua richiesta:' }}</label>
            <textarea class="form-control @error('message') is-invalid @enderror" id="text-area" rows="3" name="message">{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="btn btn1">Invia</button>
    </form>
</div>
