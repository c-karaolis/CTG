@php
    $temp_description = "Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet Lorem ipsum dolor sit
amet, consectetur Lorem ipsum dolor sit amet";
@endphp


<section class="flex items-center mt-8 bg-slate-100 font-poppins">
    <div class="justify-center flex-1 px-4 py-6 mx-auto max-w-7xl lg:py-4 md:px-6">
        <div class="mb-32 text-center">
            <h2 class="mt-8 mb-8 text-2xl font-bold lg:text-3xl">
                Meet The Team
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 ">
            {{-- CARD 1 --}}
            <x-team-member-card :name="'Andonis Mihanikos'" :imageUrl="asset('images/team-members/amihanikos.jpg')" :description="$temp_description"></x-team-member-card>

            {{-- CARD 2 --}}
            <x-team-member-card :name="'Andreas Panteli'" :imageUrl="asset('images/team-members/apanteli.jpg')" :description="$temp_description"></x-team-member-card>

            {{-- CARD 3 --}}
            <x-team-member-card :name="'Constantinos Karaolis'" :imageUrl="asset('images/team-members/ckaraolis.jpg')" :description="$temp_description"></x-team-member-card>

            {{-- CARD 4 --}}
            <x-team-member-card :name="'Crystal Michael'" :imageUrl="asset('images/team-members/cmichael.jpg')" :description="'Founder of Table Fables. Enjoys cooperative board games and roleplaying games. Loves the Burning Wheel RPG and burning characters. <br>Cat person and coffee lover.'"></x-team-member-card>

            {{-- CARD 5 --}}
            <x-team-member-card :name="'Frixos Masouras'" :imageUrl="asset('images/team-members/fmasouras.png')" :description="$temp_description"></x-team-member-card>


            {{-- CARD 6 --}}
            <x-team-member-card :name="'Alejandro Nikolaou'" :role="'Coordinator'" :imageUrl="asset('images/team-members/amihanikos.jpg')"
                :description="$temp_description"></x-team-member-card>

        </div>
    </div>
</section>
