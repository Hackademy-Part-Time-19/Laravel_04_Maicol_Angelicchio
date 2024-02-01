<x-main>
    <x-slot:title>Contatti</x-slot>
    <h1>CHI SONO</h1>

    @if(session()->has('success'))
        <x-success-message/>
    @endif

    <div class="container mt-5">
        <h1 class="mb-4">Form Richiesta</h1>
        <form action="{{ route('contatti')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="messaggio" class="form-label">Messaggio:</label>
                <textarea class="form-control" id="messaggio" name="messaggio" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia Richiesta</button>
        </form>
    </div>
</x-main>