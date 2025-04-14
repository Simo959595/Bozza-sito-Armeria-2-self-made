{{-- LAYOUT --}}
<x-layout>

{{-- NAVBAR --}}
<x-navbar />

{{-- TITOLO --}}
  <h1>Contattaci</h1>

{{-- FORM DI INSERIMENTO DATI DA PARTE DELL'UTENTE --}}
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <form class="p-5 shadow rounded" action="{{route('invio.contatti')}}" method="POST">
  @csrf
  <div class="mb-3">
      <label for="name" class="form-label">Nome utente</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Indirizzo e-mail</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="info" class="form-label">Le tue informazioni</label>
      <textarea name="info" id="info" class="form-control"></textarea>  
    </div>
    <button type="submit" class="btn btn-dark">Contattaci</button>
      </form>
</div>
    </div>
</div>

{{-- FOOTER --}}
<x-footer />

{{-- FINE LAYOUT --}}
</x-layout>