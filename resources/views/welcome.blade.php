<x-layout>

    <x-header />

    {{-- main --}}
    <section class="py-5">
        <div class="container pt-5">

            {{-- Primo blocco --}}
            <div class="row align-items-center mb-5 pt-5 g-4">
                <div class="col-12 col-md-6 text-center text-md-start pt-5" data-aos="fade-right" data-aos-offset="200">
                    <h2 class="font-titolo">Benvenuti in FinestrArte</h2>
                    <p>Siamo una realtà specializzata nella fornitura e posa di infissi di alta qualità,
                        progettati per integrarsi perfettamente in ogni tipo di ambiente. Crediamo nella cura del
                        dettaglio, nella funzionalità e in un rapporto diretto e trasparente con il cliente.</p>
                    <a href="{{ route('about') }}" class="btn btn-scheda-home border border-dark mb-3">Scopri il Team</a>
                </div>
                <div class="col-12 col-md-6 text-center" data-aos="fade-left" data-aos-offset="200">
                    <img src="{{ asset('img/benvenuti.png') }}" alt="Immagine di esempio"
                        class="img-fluid rounded shadow border">
                </div>
            </div>

            {{-- Secondo blocco --}}
            <div class="row align-items-center mb-5 pt-5 g-4 flex-md-row-reverse">
                <div class="col-12 col-md-6 text-center text-md-start" data-aos="fade-left" data-aos-offset="400">
                    <h2 class="font-titolo">I nostri Prodotti</h2>
                    <p>Collaboriamo con le migliori aziende produttrici di infissi per offrire soluzioni
                        affidabili, belle e performanti. Lavoriamo su misura per ogni contesto abitativo o
                        professionale, con una gamma completa di proposte moderne e funzionali.</p>
                    <a href="{{ route('prodotti.index') }}" class="btn btn-scheda-home border border-dark mb-3">Scopri i
                        nostri Prodotti</a>
                </div>
                <div class="col-12 col-md-6 text-center" data-aos="fade-right" data-aos-offset="400">
                    <img src="{{ asset('img/prodotti/prodotti.png') }}" alt="Immagine di esempio"
                        class="img-fluid rounded shadow border">
                </div>
            </div>

            {{-- Terzo blocco --}}
            <div class="row align-items-center mb-5 pt-5 g-4">
                <div class="col-12 col-md-6 text-center text-md-start" data-aos="fade-right" data-aos-offset="400">
                    <h2 class="font-titolo">Servizi su misura</h2>
                    <p>Ogni abitazione è diversa: per questo offriamo consulenza personalizzata, rilievi
                        precisi e installazioni a regola d’arte. Il nostro obiettivo è valorizzare i tuoi spazi con
                        infissi efficienti, sicuri e ben integrati nell’ambiente.</p>
                    <a href="{{ route('contact') }}" class="btn btn-scheda-home border border-dark mb-3">Contattaci ora</a>
                </div>
                <div class="col-12 col-md-6 text-center" data-aos="fade-left" data-aos-offset="400">
                    <img src="{{ asset('img/servizi-su-misura.png') }}" alt="Immagine di esempio"
                        class="img-fluid rounded shadow border">
                </div>
            </div>

            {{-- Quarto blocco --}}
            <div class="row align-items-center mb-5 pt-5 pb-5 g-4 flex-md-row-reverse">
                <div class="col-12 col-md-6 text-center text-md-start" data-aos="fade-left" data-aos-offset="400">
                    <h2 class="font-titolo">Partner Schüco</h2>
                    <p>La nostra azienda è orgogliosa di essere partner ufficiale Schüco, uno dei marchi leader a livello internazionale per serramenti in alluminio e PVC. Questa collaborazione ci permette di offrire ai nostri clienti soluzioni all'avanguardia per design, isolamento e sicurezza, garantendo qualità certificata e durata nel tempo.</p>
                    {{-- <a href="{{ route('prodotti.index') }}" class="btn btn-scheda-home border border-dark mb-3">Scopri i
                        nostri Prodotti</a> --}}
                </div>
                <div class="col-12 col-md-6 text-center" data-aos="fade-right" data-aos-offset="400">
                    <img src="{{ asset('img/schuco-home.png') }}" alt="Immagine di esempio"
                        class="img-fluid rounded shadow border">
                </div>
            </div>

            <div class="border"></div>

            {{-- Quarto blocco --}}
            <h2 class="text-center mb-5 pt-5 font-titolo underline-thin" data-aos="fade-right" data-aos-offset="400">Perché sceglierci</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col text-center" data-aos="fade-up" data-aos-offset="400" data-aos-delay="200">
                    <i class="bi bi-tools fs-1 text-dark"></i>
                    <h5 class="mt-3">Lavoro su misura</h5>
                    <p class="px-3">Ogni installazione è studiata e realizzata per adattarsi perfettamente al tuo spazio.</p>
                </div>
                <div class="col text-center" data-aos="fade-up" data-aos-offset="400" data-aos-delay="400">
                    <i class="bi bi-award fs-1 text-dark"></i>
                    <h5 class="mt-3">Prodotti certificati</h5>
                    <p class="px-3">Collaboriamo con marchi affidabili e garantiti per qualità e durata nel tempo.</p>
                </div>
                <div class="col text-center" data-aos="fade-up" data-aos-offset="400" data-aos-delay="600">
                    <i class="bi bi-person-check fs-1 text-dark"></i>
                    <h5 class="mt-3">Supporto dedicato</h5>
                    <p class="px-3">Ti seguiamo passo dopo passo, dalla consulenza iniziale fino all’assistenza post-vendita.</p>
                </div>
                <div class="col text-center" data-aos="fade-up" data-aos-offset="400" data-aos-delay="800">
                    <i class="bi bi-house-door fs-1 text-dark"></i>
                    <h5 class="mt-3">Ambienti valorizzati</h5>
                    <p class="px-3">Infissi pensati per migliorare comfort, estetica e risparmio energetico.</p>
                </div>
            </div>

        </div>
    </section>

</x-layout>
