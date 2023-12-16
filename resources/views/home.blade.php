<x-app>
    <x-hero-section></x-hero-section>
    <x-logo-section></x-logo-section>
    <section class="md:max-w-[70%] mx-auto scroll-mt-32" id="activities">
        <div class="grid grid-cols-1 gap-6 p-8 lg:grid-cols-2 xl:grid-cols-3 lg:gap-8 lg:gap-x-20">
            {{-- Board games --}}
            <x-section-card :title="'Board Games'" :excerpt="'Experience a wide variety of board games, from the classics to modern board games, family games and everything in-between.'" :image="asset('images/card-images/boardgames-card-image.jpg')" :url="'/activities/board-games'"
                class="object-left-top"></x-section-card>

            {{-- RPGs --}}
            <x-section-card :title="'Roleplaying Games'" :excerpt="'Engage in creative, collaborative storytelling, by assuming the role of a fantasy character and going on an epic adventure!
                                                                                                                                                                        '" :image="asset('images/card-images/roleplayinggames-card-image.jpg')" :url="'/activities/role-playing-games'"></x-section-card>

            {{-- TCGs --}}
            <x-section-card :title="'Trading Card Games'" :excerpt="'Learn to play or test your luck of the draw and your deck-building skills in casual matches and tournaments.'" :image="asset('images/card-images/tradingcardgames-card-image.jpg')" :url="'/activities/card-games'"></x-section-card>

            {{-- Exhibitors --}}
            <x-section-card :title="'Exhibitors'" :excerpt="'Meet game designers and publishers, discover new releases and succumb to the urge to buy yet another board game for the shelf of shame.'" :image="asset('images/card-images/exhibitors-card-image.jpg')"
                :url="'/activities/exhibitors'"></x-section-card>

            {{-- Open gaming area --}}
            <x-section-card :title="'Open Gaming Area'" :excerpt="'Relax, sit down and play at your own pace, making new friends along the way.'" :image="asset('images/card-images/opengamingarea-card-image.jpg')" :url="'/activities/open-gaming'"
                class="object-left-top"></x-section-card>

            {{-- Wargames / Miniatures --}}
            <x-section-card :title="'Miniature Wargames'" :excerpt="'Take command of your army and compete in skirmish battles against skilled opponents.'" :image="asset('images/card-images/miniaturewargames-card-image.jpg')"
                :url="'/activities/miniature-wargames'"></x-section-card>

        </div>
    </section>
</x-app>
