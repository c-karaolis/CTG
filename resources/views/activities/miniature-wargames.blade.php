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
                Miniature Wargaming
            </x-activities.title>

            <x-activities.article>

                <x-activities.paragraph>
                    Miniature wargames are tabletop games that depict military actions, from small units on a small
                    board, to larger, detailed tactical conflicts. They have a wide variety in theme, ranging from
                    real-life historical situations, to fantasy or science fiction.
                </x-activities.paragraph>

                <x-activities.paragraph>
                    Miniature wargames feature exciting gameplay, with detailed miniature models that are often
                    hand-painted by the players themselves.
                </x-activities.paragraph>

                <x-activities.paragraph>
                    At CTG, guests can learn how to play popular miniature wargames such as Warhammer Fantasy’s WarCry,
                    compete in skirmish battles against skilled opponents, and learn advanced painting techniques and
                    tips from experienced painters, for creating stunning miniatures.
                </x-activities.paragraph>

            </x-activities.article>
        </div>
        </div>
    </section>
</x-app>

<style>
    .hero-background {
        background-image: url('/images/activities/miniaturewargames-page-image2.jpg');
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
