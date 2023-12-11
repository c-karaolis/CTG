<x-app>
    <section class="w-full px-6 antialiased hero-background">
        <div class="flex justify-center mx-auto max-w-7xl">
            <div
                class="container max-w-sm py-20 mx-auto mt-px text-left md:py-32 sm:max-w-md sm:px-4 md:max-w-none md:text-center">
                <img class="mx-auto" src="{{ asset('/images/logos/CTGLogoWhite.svg') }}"
                    alt="Cyprus Tabletop Gaming full logo">
            </div>
        </div>
    </section>

    {{-- Article --}}
    <article class="max-w-screen-md px-4 mx-auto mt-12 text-lg leading-relaxed text-gray-700 lg:px-0">
        <p class="pb-6">Cyprus Tabletop Gaming Festival is a non-profit, annual, dedicated tabletop event that unites
            designers, publishers, role-playing and board gaming enthusiasts, communities and consumers.
        </p>

        <p class="pb-6">CTG is organised by a team of devoted volunteers who share the same passion for tabletop gaming
            and wish to both educate, engage and entertain the local community through the magic of modern board games
            and tabletop roleplay. Our mission is to provide a family-friendly environment that is welcoming to all. We
            make conscious effort at building a safe space for people to come together, forge long-lasting friendships,
            explore their shared interests and discover new ones.
        </p>

        <p class="pb-6">Tabletop games are enjoyed by young and old alike everywhere around the world and have recently
            exploded in popularity — yes, even here, in Cyprus!
        </p>

        <p class="pb-6">Board games, role-playing games, tournaments, contests, playtesting and live presentations,
            are just a few
            of the fun and exciting activities that are available for CTG’s visitors to participate in. Whether you are
            a seasoned veteran, or you've never rolled a die in your life, you are bound to have a great time!
        </p>
        {{-- <div class="pl-4 mb-6 italic border-l-4 border-gray-500 rounded">
            Board games, role-playing games, tournaments, contests, playtesting and live presentations, are just a few
            of the fun and exciting activities that are available for CTG’s visitors to participate in. Whether you are
            a seasoned veteran, or you've never rolled a die in your life, you are bound to have a great time!

        </div> --}}

    </article>

    {{-- Team Section --}}
    <x-meet-our-team>

    </x-meet-our-team>

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
