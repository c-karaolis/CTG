<x-app>
    {{-- EXHIBITORS --}}
    <article class="max-w-screen-md px-4 mx-auto mt-16 text-lg leading-relaxed text-gray-700 lg:px-0">
        <h1 class="mb-8 text-3xl font-bold text-center lg:text-5xl text-sky-800">
            Exhibitors
        </h1>
    </article>
    <section class="md:max-w-[70%] mx-auto scroll-mt-32" id="exhibitors">
        <div class="grid grid-cols-2 gap-6 p-8 sm:grid-cols-3 xl:grid-cols-3 lg:gap-8 lg:gap-x-20 xl:gap-y-16 ">
            {{-- Ant Comics --}}
            <x-exhibitor-card :title="'Ant Comics'" :image="asset('images/logos/antcomics-logo.png')" :url="'https://antcomics.com.cy/'" class=""></x-exhibitor-card>

            {{-- Ate Olan --}}
            <x-exhibitor-card :title="'Ate Olan'" :image="asset('images/logos/ateolan-logo.jpg')" :url="'https://www.facebook.com/ateolancy/'"></x-exhibitor-card>

            {{-- Cyprus Go Association --}}
            <x-exhibitor-card :title="'Cyprus Go Association'" :image="asset('images/logos/cygo-logo.jpg')" :url="'https://www.cyprus-go.org/'"></x-exhibitor-card>

            {{-- Fantasia Games --}}
            <x-exhibitor-card :title="'Fantasia Games'" :image="asset('images/logos/fantasia-logo.png')" :url="'https://fantasiaboardgames.com/'"></x-exhibitor-card>

            {{-- Hegemonic Project Games --}}
            <x-exhibitor-card :title="'Hegemonic Project Games'" :image="asset('images/logos/hegemonic-logo.jpg')" :url="'https://hegemonicproject.com/'"></x-exhibitor-card>

            {{-- Imagination Gaming Cyprus --}}
            <x-exhibitor-card :title="'Imagination Gaming Cyprus'" :image="asset('images/logos/ImaginationGamingLogo.jpg')" :url="'https://www.facebook.com/ImaginationGamingCyprus/'"></x-exhibitor-card>

            {{-- Multivers --}}
            <x-exhibitor-card :title="'Multivers'" :image="asset('images/logos/multivers-logo.png')" :url="'https://www.multiverslimassol.com/'"></x-exhibitor-card>

            {{-- Soloneion Book Centre  --}}
            <x-exhibitor-card :title="'Soloneion Book Centre'" :image="asset('images/logos/soloneion-logo.jpg')" :url="'https://www.facebook.com/soloneion/'"></x-exhibitor-card>

            {{-- Table Fables --}}
            <x-exhibitor-card :title="'Table Fables'" :image="asset('images/logos/Full-TFLogo-TransparentBackground.png')" :url="'https://www.facebook.com/groups/374830599979031'"></x-exhibitor-card>

            {{-- University of Limassol  --}}
            <x-exhibitor-card :title="'University of Limassol'" :image="asset('images/logos/uol-logo.svg')" :url="'https://www.uol.ac.cy/'"></x-exhibitor-card>

            {{-- WARPgaming  --}}
            <x-exhibitor-card :title="'WARPgaming'" :image="asset('images/logos/warpgaming-logo.png')" :url="'https://warp-gaming.com/'"></x-exhibitor-card>
        </div>
    </section>

    {{-- ARTIST ALLEY --}}
    <article class="max-w-screen-md px-4 mx-auto mt-16 text-lg leading-relaxed text-gray-700 lg:px-0">
        <h1 class="mb-8 text-3xl font-bold text-center lg:text-5xl text-sky-800">
            Artist Alley
        </h1>
    </article>
    <section class="md:max-w-[70%] mx-auto scroll-mt-32" id="activities">
        <div class="grid grid-cols-1 gap-6 p-8 lg:grid-cols-2 xl:grid-cols-2 lg:gap-8 lg:gap-x-20 ">
            {{-- Angry Grizley --}}
            <x-exhibitor-card :title="'Angry Grizley'" :image="asset('images/artist-showcase/angrygrizley-art.jpg')" :url="'https://www.instagram.com/angry.grizley/'"
                class="object-cover object-top"></x-exhibitor-card>
            {{-- Flareanthia --}}
            <x-exhibitor-card :title="'Flareanthia'" :image="asset('images/artist-showcase/flareanthia-art.png')" :url="'https://www.instagram.com/flareanthia/'"
                class="object-cover"></x-exhibitor-card>
            {{-- Jay King --}}
            <x-exhibitor-card :title="'Jay King'" :image="asset('images/artist-showcase/jayking-art.png')" :url="'https://www.artstation.com/jayking2010'"
                class="object-cover object-top"></x-exhibitor-card>
            {{-- The Tinker's Burrow --}}
            <x-exhibitor-card :title="'The Tinker\'s Burrow'" :image="asset('images/artist-showcase/tinkersburrow-art.jpg')" :url="'https://www.facebook.com/thetinkersburrow'"
                class="object-cover"></x-exhibitor-card>
            {{-- Victor Pilavas --}}
            <x-exhibitor-card :title="'Victor Pilavas'" :image="asset('images/artist-showcase/victorpilavas-art.jpeg')" :url="'https://www.instagram.com/thepickledgerblin'"
                class="object-cover"></x-exhibitor-card>
        </div>
    </section>
</x-app>
<style>
    .hero-background {
        background-color: hsla(214, 87%, 13%, 1);
        background-image:
            radial-gradient(at 100% 0%, hsla(184, 100%, 39%, 1) 0px, transparent 50%),
            radial-gradient(at 56% 2%, hsla(197, 100%, 32%, 1) 0px, transparent 50%),
            radial-gradient(at 0% 59%, hsla(197, 69%, 38%, 1) 0px, transparent 50%),
            radial-gradient(at 60% 100%, hsla(181, 100%, 22%, 1) 0px, transparent 50%),
            radial-gradient(at 0% 100%, hsla(260, 80%, 31%, 0.31) 0px, transparent 50%),
            radial-gradient(at 70% 70%, hsla(266, 89%, 25%, 1) 0px, transparent 50%),
            radial-gradient(at 0% 0%, hsla(174, 100%, 37%, 1) 0px, transparent 50%);
    }
</style>
