<x-app>
    <section class="w-full antialiased hero-background">
        <div class="hero-transparent-gradient-background">
            <div class="flex justify-center mx-auto max-w-7xl">
                <div
                    class="container max-w-sm px-4 py-20 mx-auto mt-px text-left md:py-32 sm:max-w-md md:max-w-none md:text-center">
                    <img class="mx-auto" src="{{ asset('/images/logos/CTGLogoWhite.svg') }}"
                        alt="Cyprus Tabletop Gaming full logo">
                </div>
            </div>
        </div>
    </section>
    <section class="pt-16 pb-20">
        <div class="max-w-3xl px-4 mx-auto text-center">
            <x-activities.title>
                Trading Card Games
            </x-activities.title>

            <x-activities.article>
                <x-activities.paragraph>
                    At Cyprus Tabletop Gaming Festival, event attendees can discover popular trading, collectible and
                    expandable card games, including Magic: The Gathering, Pokémon, Yu-Gi-Oh! and
                    more.</x-activities.paragraph>
                <x-activities.paragraph>
                    Card game enthusiasts are able to immerse themselves in a vibrant community of passionate TCG
                    players, share strategies, trade cards, compete in casual matches against skilled players, and forge
                    lasting connections with like-minded individuals.
                </x-activities.paragraph>
                <x-activities.paragraph>
                    Guests new at TCGs can participate in workshops and tutorials conducted by seasoned players and
                    experts from the local community, to enhance their knowledge and understanding of game mechanics,
                    strategy, and deck-building techniques.
                </x-activities.paragraph>

            </x-activities.article>
        </div>
        </div>
    </section>
</x-app>

<style>
    .hero-background {
        background-image: url('/images/activities/tradingcardgames-page-image.jpg');
        background-size: cover;
        background-position: 100% 54%;
        background-repeat: no-repeat;
    }

    .hero-transparent-gradient-background {
        background-color: rgba(4, 29, 62, 0.441);
        background-image:
            radial-gradient(at 100% 15%, rgba(0, 186, 199, 0.705) 0px, transparent 40%),
            radial-gradient(at 56% 2%, hsla(197, 100%, 32%, 0.705) 0px, transparent 40%),
            radial-gradient(at 0% 59%, hsla(197, 69%, 38%, 0.705) 0px, transparent 40%),
            radial-gradient(at 60% 100%, hsla(181, 100%, 22%, 0.705) 0px, transparent 40%),
            radial-gradient(at 0% 100%, hsla(260, 80%, 31%, 0.31) 0px, transparent 40%),
            radial-gradient(at 90% 70%, hsla(206, 95%, 34%, 0.491) 0px, transparent 35%),
            radial-gradient(at 0% 0%, hsla(174, 100%, 37%, 0.705) 0px, transparent 45%),
            radial-gradient(at 50% 50%, hsla(174, 100%, 17%, 0.5) 0px, transparent 45%);

    }
</style>
