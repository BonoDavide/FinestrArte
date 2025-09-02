<x-layout>
    <section>

        {{-- Immagine decorativa in alto --}}
        <div class="mb-4 text-center">
            <img src="https://picsum.photos/1920/600?grayscale" alt="Contattaci" class="img-fluid w-100"
                style="object-fit: cover; height: 60vh;">
        </div>

        {{-- Contenuto centrale --}}
        <div class="container py-5">
            <div class="row g-4">
                {{-- Colonna Contatti --}}
                <div class="col-12 col-md-6 pt-5">
                    <h2 class="pb-3 underline-thin">Contatti</h2>
                    <p><strong>Indirizzo:</strong> Piazza dei Gerani, 26 – 00172 Roma (RM)</p>
                    <p><strong>Telefono Commerciale:</strong> +39 350 536 2216</p>
                    <p><strong>Telefono Amministrazione:</strong> +39 350 536 2207</p>
                    <p><strong>Orari:</strong> Mar-Sab: 9:00–13:00/14.30–18.30</p>
                </div>

                {{-- Colonna Form --}}
                <div class="col-12 col-md-6 pt-5">
                    <h2 class="pb-3 underline-thin">Scrivici</h2>
                    <livewire:contact-form />
                </div>
            </div>
        </div>

        {{-- Mappa Google --}}
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h3 class="text-center pb-4 underline-thin pt-5">Mappa</h3>
                    <div class="ratio ratio-16x9 shadow rounded">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d742.5846732505905!2d12.566970369663848!3d41.885572596627924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f625ba4ef94c3%3A0xc364056b1ca8811a!2sPiazza%20dei%20Gerani%2C%2026%2C%2000172%20Roma%20RM!5e0!3m2!1sit!2sit!4v1751291255191!5m2!1sit!2sit"
                            class="rounded border w-100" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-layout>
