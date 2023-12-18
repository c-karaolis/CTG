@php
    $teamMembers = [
        [
            'name' => 'Andonis Mihanikos',
            'imageUrl' => asset('images/team-members/amihanikos.jpg'),
            'description' => 'Founder of Imagination Gaming Cyprus. Passionate about board games, miniatures painting, RPGs, tournaments. Loves to interact with people. His motto: “Do it with love!”',
            'role' => 'Organiser',
            'socials' => [
                'Facebook' => 'https://www.facebook.com/andonis.mihanikos',
                'Instagram' => 'https://www.instagram.com/andonis_mechanikos',
            ],
        ],
        [
            'name' => 'Andreas Panteli',
            'imageUrl' => asset('images/team-members/apanteli.jpg'),
            'description' => 'Founder of Table Fables. Dungeon Master that has great love for story telling, board and roleplaying games and an unnatural love for dad jokes.',
            'role' => 'Organiser',
            'socials' => [
                'Facebook' => 'https://www.facebook.com/andreas.panteli.7587',
                'Instagram' => 'https://www.instagram.com/caym1988_surm666',
                // 'LinkedIn' => 'https://www.linkedin.com/in/andreas-panteli-a54b06145',
            ],
        ],
        [
            'name' => 'Constantinos Karaolis',
            'imageUrl' => asset('images/team-members/ckaraolis.png'),
            'description' => 'Founder of Table Fables. Benevolent Dungeon Master. Loves board games and RPGs. Passionate about game design and software engineering. Proud cat dad.',
            'role' => 'Organiser',
            'socials' => [
                'Facebook' => 'https://www.facebook.com/kostas.karaolis',
                'Instagram' => 'https://www.instagram.com/ckaraolis',
                'LinkedIn' => 'https://www.linkedin.com/in/constantinos-karaolis-03b0b8100',
            ],
        ],
        [
            'name' => 'Crystal Michael',
            'imageUrl' => asset('images/team-members/cmichael.jpg'),
            'description' => 'Founder of Table Fables. Enjoys cooperative board games and roleplaying games. Loves the Burning Wheel RPG and burning characters. <br> Cat person and coffee lover.',
            'role' => 'Organiser',
            'socials' => [
                'Facebook' => 'https://www.facebook.com/crystal.michael.3',
                'Instagram' => 'https://www.instagram.com/crystalmichael.me',
                'LinkedIn' => 'https://www.linkedin.com/in/crystal-michael-532402143',
            ],
        ],
        [
            'name' => 'Frixos Masouras',
            'imageUrl' => asset('images/team-members/fmasouras.png'),
            'description' => 'A published author, screenwriter and playwright who Mastered Dungeons since 1994. Enjoys anything that involves shuffling decks, rolling dice, role-playing and his three cats.',
            'role' => 'Organiser',
            'socials' => [
                'Facebook' => 'https://www.facebook.com/The.Equinox.Paradox',
                'Instagram' => 'https://www.instagram.com/thefreaksauce',
                'LinkedIn' => 'https://www.linkedin.com/in/frixos-masouras-14a225162',
            ],
        ],
        [
            'name' => 'Alejandro Nicolaou',
            'imageUrl' => asset('images/team-members/anicolaou.jpg'),
            'description' => 'TCG and RPG lover. Certified Judge 1 Yu-Gi-Oh! and Rules Advisor for MTG. Thrives  on the thrill of competitive and challenging games.',
            'role' => 'Coordinator',
            'socials' => [
                'Facebook' => 'https://www.facebook.com/alexandorsnicolaouR',
                'Instagram' => 'https://www.instagram.com/rubixsoil',
                'LinkedIn' => 'https://www.linkedin.com/in/alexandros-nicolaou-260809154',
            ],
        ],
    ];
@endphp

<section class="flex items-center mt-8 bg-slate-100 font-poppins">
    <div class="justify-center flex-1 px-4 py-6 mx-auto max-w-7xl lg:py-4 md:px-6">
        <div class="mb-32 text-center">
            <h2 class="mt-8 mb-8 text-2xl font-bold lg:text-3xl">
                Meet The Team
            </h2>
        </div>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 ">
            @foreach ($teamMembers as $teamMember)
                <x-team-member-card :name="$teamMember['name']" :imageUrl="$teamMember['imageUrl']" :description="$teamMember['description']" :role="$teamMember['role']"
                    :socials="$teamMember['socials']"></x-team-member-card>
            @endforeach
        </div>
    </div>
</section>
