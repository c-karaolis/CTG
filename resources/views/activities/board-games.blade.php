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
    <section class="pt-16 pb-20 mt-14">
        <div class="max-w-3xl px-4 mx-auto text-center">
            <x-activities.title>
                Board Games
            </x-activities.title>

            <x-activities.article class="mx-auto md:max-w-3xl">
                {{-- BOARD GAMES GENERAL ARTICLE --}}
                <x-activities.paragraph>
                    Entertainment is only one of the many benefits of playing modern board
                    games.</x-activities.paragraph>
                <x-activities.paragraph>
                    Board games promote active learning, building memory and essential cognitive skills such as
                    reasoning
                    and logic, strategy, critical-thinking, creativity, problem-solving and self-reflection, decision
                    making, collaboration and healthy competition.</x-activities.paragraph>
                <x-activities.paragraph>
                    They offer opportunities for social connections and face-to-face interaction, away from mobile
                    phones
                    and tablets, computer and TV screens. Playing board games reduces stress and brings us closer to
                    friends, family, children and grandparents.
                </x-activities.paragraph>

                <x-activities.paragraph>
                    Guests can choose to borrow and play from a rich library of board games that includes fun and
                    educational games for young children, collaborative and competitive games with a wide selection of
                    themes and mechanics for teenagers and adults, as well as quick to play and learn party games,
                    suitable
                    for beginners.</x-activities.paragraph>
                <x-activities.paragraph>
                    Other than the games in our library, guests are able to bring their own games from home and sit down
                    and
                    play in the Open Gaming Area at their own pace and leisure. Whether meeting up with friends to play,
                    or
                    hoping to make new ones at the event, we provide our guests with ample space to get together and
                    play.</x-activities.paragraph>

                {{-- <div class="mt-12 mb-6" style="text-align: -webkit-center;"><img class="w-40"
                        src="/images/logos/ImaginationGamingLogo.png" alt=""></div> --}}

                {{-- FAMILY ZONE --}}
                <div class="mt-12 mb-6" style="text-align: -webkit-center;"><a
                        href="https://imaginationgaming.co.uk/andonis-mihanikos/" target="_blank"
                        class="block w-40"><img class="w-40" src="/images/logos/ImaginationGamingLogo.png"
                            alt=""></a></div>
                <x-activities.subtitle class="">
                    Family Zone
                </x-activities.subtitle>

                <x-activities.paragraph>
                    CTG has an entire zone designed to entertain families with younger gamers. The Family Zone features
                    a wide range of games that cater to the young, inquisitive minds of children, which can be enjoyed
                    by the whole family.
                </x-activities.paragraph>

                <x-activities.paragraph>
                    Our team will be available to help you choose from and learn any of the games in our collection, as
                    well as recommend games that are best suited for your child's age, needs and interests, and which
                    actively promote learning and motor skill development.

                </x-activities.paragraph>

                <x-activities.paragraph>
                    If any member of your family should have any specific needs or disabilities, let us know in advance
                    at <a class="text-blue-500"
                        href="mailto:andonis@imaginationgaming.co.uk">andonis@imaginationgaming.co.uk</a>, we will be
                    more than happy to accommodate you and prepare the right games and activities waiting for you to
                    enjoy when you arrive.
                </x-activities.paragraph>
            </x-activities.article>
        </div>
        </div>
    </section>
</x-app>

<style>
    .hero-background {
        background-image: url('/images/activities/boardgames-page-image.jpg');
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
