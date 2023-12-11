{{ $temp_description = "Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet Lorem ipsum dolor sit
amet, consectetur Lorem ipsum dolor sit amet" }}
<section class="flex items-center bg-sky-700 font-poppins ">
    <div class="justify-center flex-1 px-4 py-6 mx-auto max-w-7xl lg:py-4 md:px-6">
        <div class="mb-32 text-center">
            <h1 class="text-3xl font-bold capitalize "> Meet Our Team </h1>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 ">
            {{-- CARD 1 --}}
            <x-team-member-card :name="'Andonis Mihanikos'" :imageUrl="asset('images/team-members/amihanikos.jpg')" :description="$temp_description"></x-team-member-card>

            {{-- CARD 2 --}}
            <x-team-member-card :name="'Constantinos Karaolis'" :imageUrl="asset('images/team-members/ckaraolis.jpg')" :description="$temp_description"></x-team-member-card>

            {{-- CARD 3 --}}
            <x-team-member-card :name="'Crystal Michael'" :imageUrl="asset('images/team-members/amihanikos.jpg')" :description="$temp_description"></x-team-member-card>

            {{-- CARD 4 --}}
            <x-team-member-card :name="'Crystal Michael'" :imageUrl="asset('images/team-members/amihanikos.jpg')" :description="$temp_description"></x-team-member-card>

            {{-- CARD 5 --}}
            <x-team-member-card :name="'Crystal Michael'" :imageUrl="asset('images/team-members/amihanikos.jpg')" :description="$temp_description"></x-team-member-card>

        </div>
    </div>
</section>
