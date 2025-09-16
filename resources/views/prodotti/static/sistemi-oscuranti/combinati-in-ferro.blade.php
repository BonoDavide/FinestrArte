<x-layout>

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/persiane/ferro_combinato/header-combinati.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="PVC">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Combinati in Ferro</h1>
        </div>
    </div>

    {{-- bottone indietro --}}
    <div class="container pt-5">
        <a href="{{ url('/prodotti/' . $categoria->slug) }}" class="btn btn-pag-prod px-4">
            <i class="bi bi-arrow-return-left me-2"></i> Torna a {{ $categoria->name }}
        </a>
    </div>

    {{-- Paragrafo descrittivo --}}
    <div class="container">
        <div class="row text-center justify-content-center mb-5 py-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center py-5 paragrafo">
                    La sicurezza della grata abbinata alla protezione dalle intemperie della persiana in un’unica
                    soluzione.
                </p>
                <div class="border"></div>
            </div>
        </div>
    </div>

    {{-- Logo azienda + nome prodotto (UNIKA) --}}
    <section class="pb-2">
        <div class="container text-center">
            <img src="{{ asset('img/prodotti/grate/cropped-logo-rinascita.png') }}" alt="Rinascita"
                class="img-fluid mb-4" style="max-height:80px;">
            <img src="{{ asset('img/prodotti/grate/UNIKA-BLACK-2.png') }}" alt="UNIKA" class="img-fluid pb-3"
                style="max-height:130px;">
        </div>
    </section>

    {{-- Caratteristiche (grid a 2 colonne) --}}
    <section class="py-5">
        <div class="container">
            <div class="card bg-dark text-white border-0 rounded-4 px-4 py-4">
                <h3 class="mb-4 underline-thin text-center">Caratteristiche</h3>
                <ul class="fs-5 ms-5 fw-semibold mb-0 row row-cols-1 row-cols-md-2 g-2">
                    <li class="col">Struttura in ferro zincato con grata + persiana integrate</li>
                    <li class="col">Lamelle fisse o orientabili (a richiesta)</li>
                    <li class="col">Telaio rinforzato con scarico acqua e battuta 50&nbsp;mm</li>
                    <li class="col">Cerniere antistrappo e chiusure multipunto</li>
                    <li class="col">Disegni e pannellature personalizzabili</li>
                    <li class="col">Verniciatura RAL con finiture speciali su richiesta</li>
                </ul>

                {{-- bottone scheda tecnica: lo aggiungi tu, qui solo lo spazio --}}
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 ps-5 ms-5 pt-4">
                        <a href="{{ asset('pdf/UNIKA.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda d-inline-flex align-items-center gap-2 px-4 py-2 text-nowrap"
                            style="min-width: 180px;">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('img/prodotti/persiane/ferro_combinato/unika-foto.jpg') }}"
                        class="img-fluid rounded-4 shadow-sm" alt="Foto combinato UNIKA">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/prodotti/persiane/ferro_combinato/unika-profili.png') }}"
                        class="img-fluid rounded-4 shadow-sm" alt="Profili combinato UNIKA">
                </div>
            </div>
        </div>
    </section>

    {{-- Carosello RAL (uguale a quello delle grate) --}}
    <section class="py-5 bg-light">
        <div class="container container-car carosello-rivestimenti-wrapper">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>

                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3" id="swiperRivestimentiCombinati">
                                <div class="swiper-wrapper align-items-center">
                                    @php
                                        $ral = [
                                            'RAL-1013',
                                            'RAL-3003',
                                            'RAL-3005',
                                            'RAL-5010',
                                            'RAL-5015',
                                            'RAL-6005',
                                            'RAL-6021',
                                            'RAL-7016',
                                            'RAL-7035',
                                            'RAL-8011',
                                            'RAL-8014',
                                            'RAL-9010',
                                        ];
                                    @endphp
                                    @foreach ($ral as $code)
                                        <div class="swiper-slide text-center">
                                            <img src="{{ asset('img/prodotti/grate/rivestimenti/' . $code . '.jpg') }}"
                                                alt="{{ str_replace('-', ' ', $code) }}"
                                                class="img-fluid rounded-circle img-rivestimento"
                                                style="width:80px;height:80px;object-fit:cover;cursor:pointer;"
                                                data-nome="{{ str_replace('-', ' ', $code) }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-button-prev text-dark"></div>
                            <div class="swiper-button-next text-dark"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modale rivestimenti (riuso) --}}
    <div class="modal fade" id="modalRivestimento" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-white border-0 rounded-4 shadow-lg overflow-hidden p-4"
                style="width:350px;height:350px;margin:auto;">
                <div class="modal-body d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h5 class="modal-title fw-bold mb-4" id="rivestimentoNome"></h5>
                    <img id="rivestimentoImg" src="#" alt="Rivestimento" class="img-fluid rounded-3 shadow"
                        style="width:170px;height:170px;object-fit:cover;object-position:center;">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>


</x-layout>
