<x-layout>

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/finestre/ibrida/header-ibrida-3.jpg') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;"
            alt="Finestre in PVC — anteprima">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Finestre Ibride</h1>
        </div>
    </div>

    {{-- bottone indietro --}}
    <div class="container pt-5">
        <a href="{{ url('/prodotti/' . $categoria->slug) }}" class="btn btn-pag-prod px-4"
            aria-label="Torna alla categoria {{ $categoria->name }}">
            <i class="bi bi-arrow-return-left me-2"></i> Torna a {{ $categoria->name }}
        </a>
    </div>

    {{-- Paragrafo descrittivo --}}
    <div class="container pb-5">
        <div class="row text-center justify-content-center mb-5 py-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center paragrafo pb-5 pt-5">
                    Le finestre Ibride rappresentano l’incontro tra design e solidità, dalle
                    linee essenziali e dalle elevate prestazioni termiche e acustiche. Pensate per durare e per
                    adattarsi a ogni ambiente, uniscono tecnologia e cura estetica in un equilibrio perfetto.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- griglia prodotti --}}
        {{-- card Ibrida – La Rinascita (battenti) --}}
        <div class="row g-4 justify-content-center pb-5 pt-4" id="ibrida-battenti">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/ibrida/ibrida2.jpg') }}" class="img-prodotto"
                            alt="Finestra Ibrida La Rinascita — sezione prodotto">
                    </div>

                    {{-- border --}}
                    <div class="border"></div>

                    <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        {{-- LOGHI AFFIANCATI AL POSTO DEL TITOLO --}}
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img src="{{ asset('img/prodotti/finestre/ibrida/cropped-logo-rinascita.png') }}"
                                alt="Logo La Rinascita" height="36" class="img-fluid" style="height:60px;">
                            <img src="{{ asset('img/prodotti/finestre/ibrida/battenti-ibrida-logo-larinascita-design.png') }}"
                                alt="Logo Ibrida Battenti" height="36" class="img-fluid" style="height:36px;">
                        </div>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Design minimale:</strong> profili puliti e linee sottili per massima luce.</li>
                            <li><strong>Isolamento evoluto:</strong> comfort termico e acustico per tutte le stagioni.
                            </li>
                            <li><strong>Affidabilità nel tempo:</strong> componenti selezionati e cura dei dettagli.
                            </li>
                            <li><strong>Personalizzazione:</strong> ampia gamma di rivestimenti effetto legno e RAL.
                            </li>
                            <li><strong>Dotazioni su richiesta:</strong> ferramenta dedicata, vetri selettivi,
                                accessori.</li>
                        </ul>

                        <a href="{{ asset('pdf/IBRIDA.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda" aria-label="Apri scheda tecnica Ibrida (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- carosello rivestimenti Ibrida --}}
        <div class="container container-car carosello-rivestimenti-wrapper mb-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>
                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3" aria-label="Carosello rivestimenti Ibrida">
                                <div class="swiper-wrapper align-items-center">
                                    @php
                                        // File presenti in /public/img/prodotti/finestre/ibrida/rivestimenti
                                        $rivestimenti = [
                                            'acacia.jpg',
                                            'ciliegio-reale.jpg',
                                            'ciliegio-rosso.jpg',
                                            'noce-reale.jpg',
                                            'noce-scuro-opaco.jpg',
                                            'RAL-1013.jpg',
                                            'RAL-3003.jpg',
                                            'RAL-3005.jpg',
                                            'RAL-5010.jpg',
                                            'RAL-5015.jpg',
                                            'RAL-6005.jpg',
                                            'RAL-6021.jpg',
                                            'RAL-7016.jpg',
                                            'RAL-7035.jpg',
                                            'RAL-8011.jpg',
                                            'RAL-8014.jpg',
                                            'RAL-9010.jpg',
                                            'renolit-bianco.jpg',
                                            'renolit-oro.jpg',
                                        ];
                                    @endphp

                                    @foreach ($rivestimenti as $file)
                                        @php
                                            $label = Str::of($file)
                                                ->beforeLast('.') // rimuove estensione
                                                ->replace(['_', '-'], ' ') // spazi
                                                ->trim()
                                                ->value();
                                            $label = preg_replace('/\bral\b/i', 'RAL', $label);
                                            $label = Str::title($label); // capitalizza
                                            $src = asset('img/prodotti/finestre/ibrida/rivestimenti/' . $file);
                                        @endphp

                                        <div class="swiper-slide text-center">
                                            <img src="{{ $src }}"
                                                alt="Rivestimento Ibrida: {{ $label }}"
                                                class="img-fluid rounded-circle img-rivestimento"
                                                style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                                                data-nome="{{ $label }}" data-img="{{ $src }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Bottoni fuori visivamente -->
                            <div class="swiper-button-prev text-dark" aria-label="Precedente"></div>
                            <div class="swiper-button-next text-dark" aria-label="Successivo"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- modale carosello (identica all’esempio) --}}
        <div class="modal fade" id="modalRivestimento" tabindex="-1" aria-hidden="true"
            aria-labelledby="rivestimentoNome">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-dark text-white border-0 rounded-4 shadow-lg overflow-hidden p-4"
                    style="width: 350px; height: 350px; margin: auto;">
                    <div
                        class="modal-body d-flex flex-column justify-content-center align-items-center text-center h-100">
                        <h5 class="modal-title fw-bold mb-4" id="rivestimentoNome"></h5>
                        <img id="rivestimentoImg" src="#" alt="Rivestimento" class="img-fluid rounded-3 shadow"
                            style="width: 170px; height: 170px;  object-fit: cover; object-position: center;">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                            data-bs-dismiss="modal" aria-label="Chiudi"></button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-layout>
