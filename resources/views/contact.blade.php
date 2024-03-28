@php
    $faqs = [
        [
            'question' => 'What kind of games are played at CTG?',
            'answer' =>
                "At Cyprus Tabletop Gaming, we play all kinds of tabletop games, from classic family board games, to complex strategy games, roleplaying games, miniature wargames, trading card games and social party games. Whether you're a seasoned veteran, or completely new to the world of tabletop gaming, we guarantee you'll find something you enjoy and the right company to enjoy it with!",
        ],
        [
            'question' => 'How much do tickets cost and where can I purchase a ticket?',
            'answer' =>
                'Entry tickets to Cyprus Tabletop Gaming 2024 cost 8 euros per person. Children under 12 years old can attend for free when accompanied by an adult guardian. Currently tickets are only sold at the door. Upon payment, you will receive a wristband ticket which you will have to wear during your entire stay at the convention.',
        ],
        [
            'question' => 'May I bring my own board games?',
            'answer' =>
                "Of course! Although there will be an extensive collection of tabletop games available to play from CTG's library, you are welcome to bring and play any of your own favourite games. Our Open Gaming Area has ample seating space exclusively reserved for open gaming, where you can join or form impromptu game groups.",
        ],
        [
            'question' => 'Is the venue accessible to wheelchair users?',
            'answer' =>
                "Yes, the venue for CTG'2024 is fully accessible to wheelchair users. If you have any specific accessibility requirements, or concerns, please do not hesitate to contact us.",
        ],
        [
            'question' => 'Is there parking at the venue?',
            'answer' =>
                'Our venue has free parking available for all attendees, with over 100 parking slots available on a first-come first-served basis, including several priority handicap parking slots.',
        ],
        [
            'question' => 'What kind of food and drink is available at the convention?',
            'answer' =>
                "A wide selection of different food and drink choices to satisfy every palate will be available at CTG'2024, including vegetarian and vegan options. Only food and drink purchased at the venue may be consumed in the Food Court area.",
        ],
        [
            'question' => 'Are children welcome at the convention?',
            'answer' =>
                'Absolutely, as a family-friendly convention, Cyprus Tabletop Gaming welcomes tabletop gamers of all ages. Children 12 and under can attend for free, however we do ask that accompanying adults take full responsibility for their children throughout the event. Families with young children can enjoy age-appropriate games at the specially designed Family Zone.',
        ],
        [
            'question' => 'How do I become a Volunteer?',
            'answer' =>
                'We are always looking for passionate volunteers to help make Cyprus Tabletop Gaming a great convention. Our event’s success greatly depends on the hard work and dedication of our volunteers, who help provide the best experience for visitors and participants alike. <br><br> Being a volunteer can be a fun and fulfilling way to enrich one’s resume, contribute to the local community, make great memories and build friendships with like-minded people. Volunteers receive complimentary access to the event, the official CTG Volunteer T-shirt, meal tickets and refreshments to enjoy during their shift or after, and when off duty, they can sit down and play some games! <br><br>If you are interested in becoming a volunteer for CTG\'2024 email us at <a class="text-blue-500"href="mailto:the.ctg.team@gmail.com">the.ctg.team@gmail.com</a>.',
        ],
        [
            'question' => 'How do I apply as an exhibitor?',
            'answer' =>
                'Online applications for Cyprus Tabletop Gaming 2024 will open soon. Booths of varying sizes will be made available for vendors, game designers and publishers, subject to availability and space restrictions.',
        ],
        [
            'question' => "I'm a board game designer/publisher. How do I make sure that my game is in your library?",
            'answer' =>
                'We are always happy to support upcoming game designers and help to promote new titles. You may send copies of your game to include in our library, or to be used in competitions or giveaways. Please contact us at <a class="text-blue-500"href="mailto:the.ctg.team@gmail.com">the.ctg.team@gmail.com</a> for further details.',
        ],
    ];

@endphp
<x-app>
    {{-- Article --}}
    <article class="max-w-screen-md px-4 mx-auto mt-16 text-lg leading-relaxed text-gray-700 lg:px-0">
        <h1 class="mb-8 text-3xl font-bold text-center lg:text-5xl text-sky-800">
            Contact us
        </h1>

        <p class="pb-6">Got any questions for us regarding the upcoming event? You can email us at <a
                class="text-blue-500" href="mailto:the.ctg.team@gmail.com">the.ctg.team@gmail.com</a>.
        </p>

        <p class="pb-6">Or, message us on either one of the following social media platforms:
        </p>

        {{-- Social Icons --}}
        <div class="pb-6 mt-6 sm:mt-0" id="follow-us">
            <ul class="flex items-center space-x-4">
                {{-- <li>Follow us:</li> --}}
                <li class="flex items-center justify-center w-10 h-10 rounded-full">
                    <a href="https://www.facebook.com/cyprustabletopgaming" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="42" height="42"
                            viewBox="0 0 48 48">
                            <path fill="#1877F2" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                            <path fill="#fff"
                                d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z">
                            </path>
                        </svg>
                    </a>
                </li>

                <li class="flex items-center justify-center w-10 h-10 rounded-full">
                    <a href="https://www.instagram.com/cyprustabletopgaming/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="42" height="42"
                            viewBox="0 0 48 48">
                            <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035"
                                r="44.899" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fd5"></stop>
                                <stop offset=".328" stop-color="#ff543f"></stop>
                                <stop offset=".348" stop-color="#fc5245"></stop>
                                <stop offset=".504" stop-color="#e64771"></stop>
                                <stop offset=".643" stop-color="#d53e91"></stop>
                                <stop offset=".761" stop-color="#cc39a4"></stop>
                                <stop offset=".841" stop-color="#c837ab"></stop>
                            </radialGradient>
                            <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                            </path>
                            <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54"
                                r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#4168c9"></stop>
                                <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                            </radialGradient>
                            <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                            </path>
                            <path fill="#fff"
                                d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                            </path>
                            <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                            <path fill="#fff"
                                d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                            </path>
                        </svg>
                    </a>
                </li>

            </ul>
        </div>

        <p class="pb-6">We look forward to hearing from you and welcoming you again to CTG 2024!
        </p>

    </article>

    <section>
        <div class="max-w-screen-md mx-auto mt-16 space-y-4">
            <div class="text-center">
                <x-activities.subtitle>Frequently Asked Questions</x-activities.subtitle>

            </div>

            @foreach ($faqs as $faq)
                <x-faq-item :question="$faq['question']" :answer="$faq['answer']"></x-faq-item>
            @endforeach

        </div>
    </section>
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
