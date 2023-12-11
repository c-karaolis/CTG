<x-app>
    <section class="w-full antialiased hero-background">
        <div class="hero-transparent-gradient-background">
            <div class="flex justify-center mx-auto max-w-7xl">
                <div
                    class="container max-w-sm py-20 mx-auto mt-px text-left md:py-32 sm:max-w-md sm:px-4 md:max-w-none md:text-center">
                    <img class="mx-auto" src="{{ asset('/images/logos/CTGLogoWhite.svg') }}"
                        alt="Cyprus Tabletop Gaming full logo">
                </div>
            </div>
        </div>
    </section>
    <section class="pt-16 pb-20">
        <div class="max-w-3xl px-4 mx-auto text-center">

            <x-activities.title>
                Exhibitors
            </x-activities.title>


            <x-activities.article>

                <x-activities.subtitle> Publishers</x-activities.subtitle>

                <x-activities.paragraph>
                    CTG provides board and roleplaying game publishers with the opportunity to showcase
                    their newest releases and prototypes, as well as to receive direct feedback from face-to-face
                    interaction with players, helping improve their products and better understand their target
                    audience.
                </x-activities.paragraph>
                <x-activities.paragraph>
                    Through game demonstrations, workshops and tutorials hosted at their booth, publishers can gauge
                    consumer interest and foster relationships with the local game community.
                </x-activities.paragraph>
                <x-activities.paragraph>
                    Furthermore, at CTG, publishers can network with designers, retailers and other industry
                    professionals, forging lasting partnerships and collaborations.
                </x-activities.paragraph>

                <x-activities.subtitle class="mt-12"> Shops</x-activities.subtitle>

                <x-activities.paragraph>
                    Cyprus Tabletop Gaming hosts a wide variety of local shops, offering a rich selection of different
                    types of board games and tabletop accessories, roleplaying books and dice, trading card games,
                    miniatures and paints, as well as toys and other collectibles.
                </x-activities.paragraph>

                <x-activities.paragraph>
                    Tabletop gaming enthusiasts of all ages are bound to find something magical to bring home, whether
                    shopping for old classics or newly published games, competitive or collaborative strategy games,
                    games for the whole family or casual party games.
                </x-activities.paragraph>

                <x-activities.paragraph>
                    Every single game box contains a unique and exciting adventure, ready to be explored.
                </x-activities.paragraph>
            </x-activities.article>
        </div>
        </div>
    </section>
</x-app>

<style>
    .hero-background {
        background-image: url('/images/activities/exhibitors-page-image.jpg');
        background-size: cover;
        background-position: center;
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
