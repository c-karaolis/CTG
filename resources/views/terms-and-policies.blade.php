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
    <article class="max-w-screen-md px-4 mx-auto mt-16 text-lg leading-relaxed text-gray-700 lg:px-0">
        <h1 class="mb-8 text-3xl font-bold text-center lg:text-5xl text-sky-800">
            Terms & Policies
        </h1>

        <p class="pb-6">Cyprus Tabletop Gaming Festival attracts a wide range of Participants of all ages and
            backgrounds, including families with young children. In order to ensure that we provide a safe environment
            for everyone, we have put in place a series of policies which all Participants must adhere to.
        </p>
        <div>
            <ul class="pl-5 !list-disc">
                <li>
                    <a class="text-blue-500" href="{{ asset('T&Cs/General Terms & Conditions CTG.pdf') }}"
                        target="_blank">General Terms
                        & Conditions</a> - Applies to everyone
                    Participating and Attending
                    the Event
                </li>
                <li>
                    <a class="text-blue-500" href="{{ asset('T&Cs/Exhibitors Terms of Service CTG.pdf') }}"
                        target="_blank">Exhibitors
                        Terms of Service</a> - Applies to all Exhibitors
                    and traders
                </li>
                <li>
                    <a class="text-blue-500" href="{{ asset('T&Cs/Volunteers & Game Masters Policy CTG.pdf') }}"
                        target="_blank">Volunteers &
                        Game Masters Policy</a> - Applies to all
                    Volunteers and Game Masters
                </li>
                <li>
                    <a class="text-blue-500"
                        href="{{ asset('T&Cs/Privacy Notice for Cyprus Tabletop Gaming Festival_ GDPR Notice.pdf') }}"
                        target="_blank">Privacy
                        Notice</a> - How we use your information
                </li>
            </ul>
        </div>
    </article>
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
