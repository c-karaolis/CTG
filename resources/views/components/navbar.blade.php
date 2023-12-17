<nav class="relative sticky top-0 z-50 h-24 px-2 bg-white select-none" x-data="{ showMenu: false }">
    <div
        class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">
        <div class="flex items-center justify-start w-1/4 h-full pr-4">
            <a href="/" class="flex items-center py-4 space-x-2 font-extrabold text-sky-950 md:py-0">
                <span class="flex items-center justify-center w-12 h-12 text-white rounded-full">
                    <img src="{{ asset('/images/logos/pathctg.svg') }}" alt="CTG dice logo" />
                </span>
                <span class="font-[PriborgSans] text-3xl tracking-[2.8px]">CTG</span>
            </a>
        </div>

        <div class="top-0 left-0 items-start hidden w-full h-full text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex"
            :class="{ 'flex fixed': showMenu, 'hidden': !showMenu }">
            <div
                class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                <a href="#"
                    class="flex items-center py-4 ml-4 space-x-2 font-extrabold text-gray-900 md:py-0 md:hidden">
                    <span class="flex items-center justify-center w-8 h-8 text-white rounded-full">
                        <img src = "{{ asset('/images/logos/pathctg.svg') }}" alt="CTG dice logo" />
                    </span>
                    <span class="font-[PriborgSans] text-lg tracking-[2.8px]">CTG</span>
                </a>

                <div
                    class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                    <a href="/"
                        class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-black md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                    <a href="/#activities"
                        class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">What's
                        On</a>
                    <a href="#"
                        class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">Exhibitors</a>
                    <a href="#"
                        class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">Schedule</a>
                    <a href="/about"
                        class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">About</a>
                    <a href="/contact"
                        class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">Contact</a>

                </div>
                <div
                    class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                    {{-- <a href="#" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-3 md:mr-2 lg:mr-3 md:w-auto">Sign
                        In</a> --}}

                    <a href="https://www.facebook.com/cyprustabletopgaming"
                        class="inline-flex items-center w-full px-5 px-6 py-3 text-sm font-medium leading-4  md:w-auto md:rounded-full text-[aliceblue] bg-sky-950 hover:text-sky-950 hover:bg-cyan-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-gray-800"
                        target="_blank">Follow
                        Us</a>
                </div>
            </div>
        </div>

        <div @click="showMenu = !showMenu"
            class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
            <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </div>
    </div>
</nav>



{{-- <div class="w-full mx-auto bg-white border-b 2xl:max-w-7xl">
    <div x-data="{ open: false }"
        class="relative flex flex-col w-full p-5 mx-auto bg-white md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between lg:justify-start">
            <a class="text-lg tracking-tight text-black uppercase focus:outline-none focus:ring lg:text-2xl"
                href="/">
                <span class="lg:text-lg uppecase focus:ring-0">
                    windstatic
                </span>
            </a>
            <button @click="open = !open"
                class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-black focus:outline-none focus:text-black md:hidden">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col items-center flex-grow hidden md:pb-0 md:flex md:justify-end md:flex-row">
            <a class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600 lg:ml-auto" href="#">
                About
            </a>
            <a class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600" href="#">
                Contact
            </a>
            <a class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600" href="#">
                Documentation
            </a>

            <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
                <button
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-white bg-black rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-gray-700 active:bg-gray-800 active:text-white focus-visible:outline-black">
                    Sign up
                </button>
            </div>
        </nav>
    </div>
</div> --}}
