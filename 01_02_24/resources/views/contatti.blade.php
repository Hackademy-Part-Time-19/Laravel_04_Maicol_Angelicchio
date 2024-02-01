<x-main>
    <x-slot:title>Contatti</x-slot>
    <h1>CHI SONO</h1>

    @if(session()->has('success'))
        <x-success-message/>
    @elseif(session()->has('error'))
        <x-error-message/>
    @endif

    <div class="container mt-5">
        <h1 class="mb-4">Form Richiesta</h1>
        <form action="{{ route('contatti')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Messaggio:</label>
                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia Richiesta</button>
        </form>
    </div>
</x-main>