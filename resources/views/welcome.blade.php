<x-layout>

    <x-header />


    {{-- main --}}
    <section class="py-5">
        <div class="container">
            {{-- Primo blocco: testo sinistra, immagine destra --}}
            <div class="row align-items-center mb-5 pt-5">
                <div class="col-md-6 text-center">
                    <h2>Benvenuti in FinestrArte</h2>
                    <p class="mx-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae est nec libero laoreet luctus.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://picsum.photos/600/400?random=1" alt="Immagine di esempio"
                        class="img-fluid rounded shadow border">
                </div>
            </div>

            {{-- Secondo blocco: immagine sinistra, testo destra --}}
            <div class="row align-items-center mb-5 flex-md-row-reverse pt-5">
                <div class="col-md-6 text-center">
                    <h2>I nostri prodotti</h2>
                    <p class="mx-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt tincidunt mauris.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://picsum.photos/600/400?random=2" alt="Immagine di esempio"
                        class="img-fluid rounded shadow border">
                </div>
            </div>

            {{-- Terzo blocco: testo sinistra, immagine destra --}}
            <div class="row align-items-center mb-5 pt-5">
                <div class="col-md-6 text-center">
                    <h2>Servizi su misura</h2>
                    <p class="mx-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at neque nec sapien commodo
                        commodo.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://picsum.photos/600/400?random=3" alt="Immagine di esempio"
                        class="img-fluid rounded shadow border">
                </div>
            </div>

            {{-- Continua con altri blocchi se vuoi --}}
        </div>
    </section>

</x-layout>
