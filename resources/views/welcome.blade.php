<x-layout>

    <x-header />


    {{-- main --}}
    <section class="py-5">
        <div class="container">
            {{-- Primo blocco: testo sinistra, immagine destra --}}
            <div class="row align-items-center mb-5 pt-5">
                <div class="col-md-6 text-center">
                    <h2 class="font-titolo">Benvenuti in FinestrArte</h2>
                    <p class="mx-5">Siamo una realtà specializzata nella fornitura e posa di infissi di alta qualità,
                        progettati per integrarsi perfettamente in ogni tipo di ambiente. Crediamo nella cura del
                        dettaglio, nella funzionalità e in un rapporto diretto e trasparente con il cliente.
                    </p>
                    <a href="{{ route('about') }}" class="btn btn-color border border-dark">Scopri il Team</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://picsum.photos/600/400?random=1" alt="Immagine di esempio"
                        class="img-fluid rounded shadow border">
                </div>
            </div>

            {{-- Secondo blocco: immagine sinistra, testo destra --}}
            <div class="row align-items-center mb-5 flex-md-row-reverse pt-5">
                <div class="col-md-6 text-center">
                    <h2 class="font-titolo">I nostri prodotti</h2>
                    <p class="mx-5">Collaboriamo con le migliori aziende produttrici di infissi per offrire soluzioni
                        affidabili, belle e performanti. Lavoriamo su misura per ogni contesto abitativo o
                        professionale, con una gamma completa di proposte moderne e funzionali.</p>
                    <a href="{{ route('prodotti.index') }}" class="btn btn-color border border-dark">Scopri i nostri
                        Prodotti</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://picsum.photos/600/400?random=2" alt="Immagine di esempio"
                        class="img-fluid rounded shadow border">
                </div>
            </div>

            {{-- Terzo blocco: testo sinistra, immagine destra --}}
            <div class="row align-items-center mb-5 pt-5 pb-5">
                <div class="col-md-6 text-center">
                    <h2 class="font-titolo">Servizi su misura</h2>
                    <p class="mx-5">Ogni abitazione è diversa: per questo offriamo consulenza personalizzata, rilievi
                        precisi e installazioni a regola d’arte. Il nostro obiettivo è valorizzare i tuoi spazi con
                        infissi efficienti, sicuri e ben integrati nell’ambiente.</p>
                    <a href="{{ route('contact') }}" class="btn btn-color border border-dark">Contattaci ora</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://picsum.photos/600/400?random=3" alt="Immagine di esempio"
                        class="img-fluid rounded shadow border">
                </div>
            </div>

            {{-- Quarto blocco: immagine sinistra, testo destra --}}
            <h2 class="text-center mb-5 pt-5 font-titolo border-top">Perché sceglierci</h2>
            <div class="row text-center justify-content-between">
                <div class="col-md-2">
                    <i class="bi bi-tools fs-1 text-dark"></i>
                    <h5 class="mt-3">Lavoro su misura</h5>
                    <p>Ogni installazione è studiata e realizzata per adattarsi perfettamente al tuo spazio.</p>
                </div>
                <div class="col-md-2">
                    <i class="bi bi-award fs-1 text-dark"></i>
                    <h5 class="mt-3">Prodotti certificati</h5>
                    <p>Collaboriamo con marchi affidabili e garantiti per qualità e durata nel tempo.</p>
                </div>
                <div class="col-md-2">
                    <i class="bi bi-person-check fs-1 text-dark"></i>
                    <h5 class="mt-3">Supporto dedicato</h5>
                    <p>Ti seguiamo passo dopo passo, dalla consulenza iniziale fino all’assistenza post-vendita.</p>
                </div>
                <div class="col-md-2">
                    <i class="bi bi-house-door fs-1 text-dark"></i>
                    <h5 class="mt-3">Ambienti valorizzati</h5>
                    <p>Infissi pensati per migliorare comfort, estetica e risparmio energetico.</p>
                </div>
            </div>
        </div>
    </section>

</x-layout>
