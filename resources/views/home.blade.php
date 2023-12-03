<x-app>
    <x-logo-section></x-logo-section>
    <section class="max-w-[70%] mx-auto" id="MainContent">
        <div class="grid grid-cols-1 gap-4 p-8 lg:grid-cols-3 lg:gap-8 lg:gap-x-20">

            {{-- Board games --}}
            <x-section-card :title="'Board Games'" :excerpt="'This is a brief description of board games.'" :image="asset('images/card-images/boardgame-card-image.jpg')" :url="'/attractions/board-games'"
                class="object-left-top"></x-section-card>

            {{-- RPGs --}}
            <x-section-card :title="'Roleplaying Games'" :excerpt="'This is a brief description of RPGs.'" :image="asset('images/card-images/roleplayinggames-card-image.jpg')" :url="'/attractions/role-playing-games'"></x-section-card>

            {{-- TCGs --}}
            <x-section-card :title="'Trading Card Games'" :excerpt="'This is a brief description of TCGs.'" :image="asset('images/card-images/tradingcardgames-card-image.jpg')" :url="'/attractions/card-games'"></x-section-card>

            {{-- Exhibitors --}}
            <x-section-card :title="'Exhibitors'" :excerpt="'This is a brief description of exhibitors.'" :image="asset('images/card-images/exhibitors-card-image.jpg')"
                :url="'/attractions/exhibitors'"></x-section-card>

            {{-- Open gaming area --}}
            <x-section-card :title="'Open Gaming Area'" :excerpt="'This is a brief description of the open gaming area.'" :image="asset('images/card-images/opengamingarea-card-image.jpg')"
                :url="'/attractions/open-gaming'"></x-section-card>

            {{-- Wargames / Miniatures --}}
            <x-section-card :title="'Miniature Wargames'" :excerpt="'This is a brief description of wargames and miniatures.'" :image="asset('images/card-images/miniaturewargames-card-image.jpg')"
                :url="'/attractions/miniature-wargames'"></x-section-card>

        </div>
    </section>
</x-app>
