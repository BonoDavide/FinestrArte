<x-layout>

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/grate/header-grate.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="PVC">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Grate in Ferro</h1>
        </div>
    </div>

    {{-- bottone indietro --}}
    <div class="container pt-5">
        <a href="{{ route('prodotti.index') }}" class="btn btn-pag-prod px-4">
            <i class="bi bi-arrow-return-left me-2"></i> Torna a Prodotti
        </a>
    </div>

    {{-- Paragrafo descrittivo --}}
    <div class="container">
        <div class="row text-center justify-content-center mb-5 py-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center py-5 paragrafo">
                    Grata di sicurezza in ferro zincato con profili da 15/10. Un complemento di protezione essenziale
                    contro le intrusioni, personalizzabile per esigenze estetiche e funzionali. Ideale per appartamenti
                    e immobili che richiedono protezione senza rinunciare all’estetica.
                </p>
                <div class="border"></div>
            </div>
        </div>
    </div>

    {{-- LOGO AZIENDA + NOME PRODOTTO --}}
    <section>
        <div class="container text-center">
            <img src="{{ asset('img/prodotti/grate/cropped-logo-rinascita.png') }}" alt="Logo Rinascita"
                class="img-fluid mb-4" style="max-height: 80px;">
            <img src="{{ asset('img/prodotti/grate/KRETA-BLACK.png') }}" alt="Logo prodotto Kreta" class="img-fluid pb-3"
                style="max-height: 150px;">
        </div>
    </section>

    {{-- CARATTERISTICHE (2 colonne) --}}
    <section class="py-5">
        <div class="container">
            <div class="card bg-dark text-white border-0 rounded-4 px-4 py-4">
                <h3 class="mb-4 underline-thin text-center">Caratteristiche</h3>
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <ul class="fs-5 ms-5 fw-semibold mb-0">
                            <li>Ferro zincato con tubolari tondi o squadrati</li>
                            <li>Disegni e lavorazioni personalizzabili</li>
                            <li>Telaio PSH scatolato a Z, falda in battuta 50&nbsp;mm</li>
                            <li>Traversa inferiore U 25/10 con scarico acqua</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="fs-5 ms-5 fw-semibold mb-0">
                            <li>Cerniere antistrappo</li>
                            <li>Asta basculante con più punti di chiusura</li>
                            <li>Profilo anta PA60 in tubolare 60×40×1,5&nbsp;mm</li>
                            <li>Antirumore in gomma sui puntali di chiusura</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 ps-5 ms-5 pt-4">
                        <a href="{{ asset('pdf/KRETA.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda d-inline-flex align-items-center gap-2 px-4 py-2 text-nowrap" style="min-width: 180px;">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- TUBOLARI TONDI --}}
    <section class="py-5">
        <div class="container">
            <h3 class="mb-4 underline-thin text-center">Tubolari tondi</h3>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <img src="{{ asset('img/prodotti/grate/tondi/t1.png') }}" alt="T1" class="img-fluid mb-2">
                    <div class="fw-semibold">T1</div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <img src="{{ asset('img/prodotti/grate/tondi/t2.jpg') }}" alt="T2" class="img-fluid mb-2">
                    <div class="fw-semibold">T2</div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <img src="{{ asset('img/prodotti/grate/tondi/t3.jpg') }}" alt="T3" class="img-fluid mb-2">
                    <div class="fw-semibold">T3</div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <img src="{{ asset('img/prodotti/grate/tondi/t4.jpg') }}" alt="T4" class="img-fluid mb-2">
                    <div class="fw-semibold">T4</div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <img src="{{ asset('img/prodotti/grate/tondi/t5.jpg') }}" alt="T5" class="img-fluid mb-2">
                    <div class="fw-semibold">T5</div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <img src="{{ asset('img/prodotti/grate/tondi/t6.jpg') }}" alt="T6" class="img-fluid mb-2">
                    <div class="fw-semibold">T6</div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <img src="{{ asset('img/prodotti/grate/tondi/t7.jpg') }}" alt="T7" class="img-fluid mb-2">
                    <div class="fw-semibold">T7</div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <img src="{{ asset('img/prodotti/grate/tondi/t8.jpg') }}" alt="T8" class="img-fluid mb-2">
                    <div class="fw-semibold">T8</div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <img src="{{ asset('img/prodotti/grate/tondi/t9.jpg') }}" alt="T9" class="img-fluid mb-2">
                    <div class="fw-semibold">T9</div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <img src="{{ asset('img/prodotti/grate/tondi/t10.jpg') }}" alt="T10" class="img-fluid mb-2">
                    <div class="fw-semibold">T10</div>
                </div>
            </div>
        </div>
    </section>

    {{-- TUBOLARI SQUADRATI --}}
    <section class="py-5">
        <div class="container">
            <h3 class="mb-4 underline-thin text-center">Tubolari squadrati</h3>
            <div class="row g-4">
                <div class="col-6 col-md-3 text-center">
                    <img src="{{ asset('img/prodotti/grate/squadrati/s1.jpg') }}" alt="S1"
                        class="img-fluid mb-2">
                    <div class="fw-semibold">S1</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="{{ asset('img/prodotti/grate/squadrati/s2.jpg') }}" alt="S2"
                        class="img-fluid mb-2">
                    <div class="fw-semibold">S2</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="{{ asset('img/prodotti/grate/squadrati/s3.jpg') }}" alt="S3"
                        class="img-fluid mb-2">
                    <div class="fw-semibold">S3</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="{{ asset('img/prodotti/grate/squadrati/s4.jpg') }}" alt="S4"
                        class="img-fluid mb-2">
                    <div class="fw-semibold">S4</div>
                </div>
            </div>
        </div>
    </section>


    {{-- CAROSELLO RIVESTIMENTI – GRATE (RAL) --}}
    <div class="container container-car carosello-rivestimenti-wrapper mb-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-carosello">
                <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>

                <div class="card card-prodotto px-5 py-3">
                    <div class="position-relative">
                        <div class="swiper px-3">
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
                                    @php
                                        $label = str_replace('-', ' ', $code); // es. "RAL 1013"
                                    @endphp
                                    <div class="swiper-slide text-center">
                                        <img src="{{ asset('img/prodotti/grate/rivestimenti/' . $code . '.jpg') }}"
                                            alt="{{ $label }}"
                                            class="img-fluid rounded-circle img-rivestimento"
                                            style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                                            data-nome="{{ $label }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Bottoni swiper -->
                        <div class="swiper-button-prev text-dark"></div>
                        <div class="swiper-button-next text-dark"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modale (riuso quella già presente nel progetto) --}}
    <div class="modal fade" id="modalRivestimento" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-white border-0 rounded-4 shadow-lg overflow-hidden p-4"
                style="width: 350px; height: 350px; margin: auto;">
                <div class="modal-body d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h5 class="modal-title fw-bold mb-4" id="rivestimentoNome"></h5>
                    <img id="rivestimentoImg" src="#" alt="Rivestimento" class="img-fluid rounded-3 shadow"
                        style="width: 170px; height: 170px; object-fit: cover; object-position: center;">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>

</x-layout>
