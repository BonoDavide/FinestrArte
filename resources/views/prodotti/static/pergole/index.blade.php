<x-layout>

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/pergole/pergolaevolution-4.jpg') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="PVC">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Pergole</h1>
        </div>
    </div>

    {{-- bottone indietro --}}
    <div class="container pt-5">
        <a href="{{ route('prodotti.index') }}" class="btn btn-pag-prod px-4">
            <i class="bi bi-arrow-return-left me-2"></i> Torna a Prodotti
        </a>
    </div>

    {{-- Paragrafo descrittivo --}}
    <div class="container pb-5">
        <div class="row text-center justify-content-center mb-5 py-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center py-5 paragrafo">
                    Le pergole rappresentano la soluzione ideale per vivere al meglio gli spazi esterni durante tutto
                    l’anno. Offrono protezione dal sole e dal vento, creando al tempo stesso un ambiente
                    accogliente e raffinato.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- Griglia prodotti --}}
        {{-- CARATTERISTICHE --}}
        <section class="py-5">
            <div class="container">
                <div class="card bg-dark text-white border-0 rounded-4 px-4 py-4">
                    <h3 class="mb-4 pt-3 underline-thin text-center">Caratteristiche</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="fs-5 mb-3 mt-3">
                                <li>Classe di resistenza al vento 6</li>
                                <li>Struttura portante in alluminio estruso con matrici a disegno</li>
                                <li>Viteria completamente in acciaio inox</li>
                                <li>Meccanica testata su 3000 cicli (≈ 4 anni di utilizzo)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="fs-5 mb-3 mt-3">
                                <li>Gronda frontale con scarico dell’acqua nel montante</li>
                                <li>Cinghia di trasmissione in poliuretano con anima in acciaio</li>
                                <li>Verniciatura Qualicoat Seaside</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- VERSIONI --}}
        <section class="py-5">
            <div class="container">
                <h3 class="mb-2 underline-thin text-center">Versioni</h3>
                <p class="text-muted mb-4 text-center fw-semibold">Disponibile addossata a parete o autoportante.</p>

                <div class="row g-5 align-items-start text-center">
                    <div class="col-md-6">
                        <img src="{{ asset('img/prodotti/pergole/versioni/addossata-inclinata.png') }}"
                            class="img-fluid versione-img mb-2" alt="Addossata">
                        <div class="fw-semibold">Addossata</div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/prodotti/pergole/versioni/autoportante-inclinata.png') }}"
                            class="img-fluid versione-img mb-2" alt="Autoportante">
                        <div class="fw-semibold">Autoportante</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- COMPONENTI --}}
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row g-4 align-items-center">

                    {{-- Colonna immagine --}}
                    <div class="col-lg-7">
                        <img class="img-fluid"
                            src="{{ asset('img/prodotti/pergole/legenda_evolution.png') }}"
                            alt="Componenti della pergola">
                    </div>

                    {{-- Colonna testo --}}
                    <div class="col-lg-5">
                        <h3 class="mb-3 ms-5 ps-4 underline-thin text-center text-lg-start">Componenti</h3>
                        <ol class="lh-lg ms-5 ps-5 mb-0 fw-semibold">
                            <li>Frangitratta posteriore</li>
                            <li>Frangitratta intermedio</li>
                            <li>Frangitratta frontale</li>
                            <li>Staffa a parete</li>
                            <li>Guida</li>
                            <li>Gronda</li>
                            <li>Gamba</li>
                            <li>Tettino</li>
                            <li>Rullo trasmissione</li>
                            <li class="ms-2">Trave motore</li>
                        </ol>
                    </div>

                </div>
            </div>
        </section>


        <div class="pt-5">
            <div class="border"></div>
        </div>

        {{-- RIVESTIMENTI (Pergole) --}}
        @php
            $rivestimentiPergole = [
                'avorio' => 'Avorio',
                'bianco' => 'Bianco',
                'corten' => 'Corten',
                'grigio' => 'Grigio',
                'marrone' => 'Marrone',
            ];
        @endphp

        <section class="container container-car carosello-rivestimenti-wrapper pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 underline-thin">Colori di serie</h3>

                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3" id="swiperRivestimentiPergole">
                                <div class="swiper-wrapper align-items-center">
                                    @foreach ($rivestimentiPergole as $slug => $label)
                                        <div class="swiper-slide text-center">
                                            <img src="{{ asset('img/prodotti/pergole/rivestimenti/' . $slug . '.jpg') }}"
                                                alt="{{ $label }}"
                                                class="img-fluid rounded-circle img-rivestimento"
                                                data-nome="{{ $label }}"
                                                data-src="{{ asset('img/prodotti/pergole/rivestimenti/' . $slug . '.jpg') }}">
                                            <div class="mt-2 small text-muted">{{ $label }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Bottoni Swiper --}}
                            <div class="swiper-button-prev text-dark"></div>
                            <div class="swiper-button-next text-dark"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Modale rivestimento --}}
        <div class="modal fade" id="modalRivestimentoPergole" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div
                    class="modal-content bg-dark text-white border-0 rounded-4 shadow-lg overflow-hidden p-4 modal-rivestimento-box">
                    <div
                        class="modal-body d-flex flex-column justify-content-center align-items-center text-center h-100">
                        <h5 class="modal-title fw-bold mb-4" id="rivestimentoNomePergole"></h5>
                        <img id="rivestimentoImgPergole" src="#" alt="Rivestimento"
                            class="img-fluid rounded-3 shadow modal-rivestimento-img">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                            data-bs-dismiss="modal"></button>
                    </div>
                </div>
            </div>
        </div>

</x-layout>
