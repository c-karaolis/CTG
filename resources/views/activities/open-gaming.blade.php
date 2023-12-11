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
                Open Gaming Area
            </x-activities.title>

            <x-activities.article>


                {{-- OPEN GAMING PARAGRAPH --}}
                <x-activities.paragraph>
                    Open Gaming paragraph
                </x-activities.paragraph>


                {{-- PLAYTESTING --}}
                <x-activities.subtitle>
                    Playtesting
                </x-activities.subtitle>

                <x-activities.paragraph>
                    Our Playtesting zone is designed to offer game designers and members of the public the opportunity
                    to test new tabletop games that are still in the early stages of their production.
                </x-activities.paragraph>

                <x-activities.paragraph>
                    Designers can book a playtesting slot to bring their roleplaying, board game or card game prototypes
                    and collect feedback from everyone who plays their game.
                </x-activities.paragraph>

                <x-activities.paragraph>
                    Playtesting is incredibly important for game designers, as it allows them to better understand
                    player experience, collect valuable feedback to help them develop their game further, and discover
                    potential areas for improvement by observing and comparing player behaviour against
                    designer-intended mechanics.
                </x-activities.paragraph>

                <x-activities.paragraph>
                    Additionally, playtesting provides game designers visibility and direct exposure to their target
                    audience.
                </x-activities.paragraph>

                <x-activities.paragraph>
                    Guests are given the opportunity to play new games before they are published, provide their input,
                    and maybe be given playtesting credits for their contribution.
                </x-activities.paragraph>

            </x-activities.article>
        </div>
        </div>
    </section>
</x-app>

<style>
    .hero-background {
        background-image: url('/images/activities/opengamingarea-page-image.jpg');
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
