<section class="w-full px-6 pb-12 antialiased md:pt-12 hero-background">
    <div class="flex justify-center mx-auto max-w-7xl">
        <!-- Main Hero Content -->
        <div
            class="container max-w-sm py-10 mx-auto mt-px text-left md:pt-0 sm:max-w-md md:max-w-lg sm:px-4 md:max-w-none md:text-center">
            {{-- <h1
                class="text-3xl font-bold leading-10 tracking-tight text-left text-[aliceblue] md:text-center sm:text-4xl md:text-7xl lg:text-8xl ">
                Let's play <br class="hidden sm:block">some games</h1> --}}

            <div class="mx-auto">
                <img src="/images/logos/CTG2024DateLogo.png" alt="CTG full logo"
                    class="mx-auto full-logo-header md:w-3/5 lg:w-2/4">
            </div>
            {{-- <div class="mx-auto mt-5 text-[aliceblue] md:mt-8 md:max-w-lg text-center md:text-xl">
                Cyprus' dedicated tabletop gaming convention!
            </div> --}}
            <div
                class="flex flex-col items-center justify-center mt-8 space-y-4 text-center sm:flex-row sm:space-y-0 sm:space-x-4">
                <div class="flex flex-col w-full xs:space-x-3 xs:space-y-0 xs:flex-row md:w-auto">
                    <a href="/about"
                        class="inline-flex items-center justify-center w-full md:px-8 py-4 text-base font-medium leading-6 text-[aliceblue] bg-sky-950 hover:text-sky-950 hover:bg-cyan-500 border border-transparent rounded-full xl:px-10 md:w-auto focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200">About
                        CTG</a>

                    <a href="https://www.facebook.com/events/840915604499865?acontext=%7B%22event_action_history%22%3A[]%7D"
                        class="inline-flex items-center justify-center w-full md:px-8 py-4 text-base font-medium leading-6 text-sky-950 bg-[aliceblue] hover:text-sky-950 hover:bg-cyan-500 border border-transparent rounded-full xl:px-10 md:w-auto focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200"
                        target="_blank">The Event</a>
                </div>
            </div>
        </div>
        <!-- End Main Hero Content -->


        <div class="absolute self-end text-[aliceblue]  hover:text-cyan-500 -mb-5">
            <a href="#activities">
                <svg class="w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </a>


            {{-- <div class="absolute end-4 top-4 sm:end-6 sm:top-6 lg:end-8 lg:top-8">
                
            </div> --}}
        </div>
    </div>

</section>

<style>
    .hero-background {
        background-color: hsla(214, 87%, 13%, 1);
        /* background-repeat: no-repeat; */
        /* background-image: url("/images/logos/CTG2024DateLogo.png"); */
        /* background-size: cover; */
        /* height: 500px; */
        background-image:
            radial-gradient(at 100% 0%, hsla(184, 100%, 39%, 1) 0px, transparent 50%),
            radial-gradient(at 56% 2%, hsla(197, 100%, 32%, 1) 0px, transparent 50%),
            radial-gradient(at 0% 59%, hsla(197, 69%, 38%, 1) 0px, transparent 50%),
            radial-gradient(at 60% 100%, hsla(181, 100%, 22%, 1) 0px, transparent 50%),
            radial-gradient(at 0% 100%, hsla(260, 80%, 31%, 0.31) 0px, transparent 50%),
            radial-gradient(at 70% 70%, hsla(266, 89%, 25%, 1) 0px, transparent 50%),
            radial-gradient(at 0% 0%, hsla(174, 100%, 37%, 1) 0px, transparent 50%);
    }

    .full-logo-header {
        /* width: 800px; */
    }

    .full-logo-container {
        text-align: -webkit-center;
    }
</style>
