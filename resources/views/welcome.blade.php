{{-- COLLEGAMENTO A layout.blade.php --}}
<x-layout>
{{-- COLLEGAMENTO A navbar.blade.php CON CHIUSURA AUTOMATICA --}}
<x-navbar />
{{-- TITOLO --}}
<h1>BENVENUTO NEL SERVIZIO DI SUPPORTO MILITARE PERSONALE</h1>

{{-- MESSAGGIO DI MAIL INVIATA CON SUCCESSO --}}
<div class="alert alert-success">
{{session('emailSent')}}
</div>

<h2>PREFAZIONE</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sapiente vel obcaecati maxime excepturi, ex laudantium, tempora delectus sed iusto beatae, mollitia ullam rerum architecto ipsum minus suscipit nihil esse.</p>

{{-- CARDS --}}
<x-card />

<h2>DETTAGLI AGGIUNTIVI</h2>
<p>Ti è piaciuto il sito?   
    <a href="/contatti" class="btn btn-primary">Contattaci</a>
</p>
</section>












{{-- COLLEGAMENTO A footer.blade.php CON CHIUSURA AUTOMATICA --}}
<x-footer />
{{-- FINE COLLEGAMENTO A layout.blade.php --}}
</x-layout>
