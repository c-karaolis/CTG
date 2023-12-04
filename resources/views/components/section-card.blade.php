<a href="{{ $url }}" class="block mb-4 min-w-fit" x-data="{ isHovered: false }" @mouseenter="isHovered = true"
    @mouseleave="isHovered = false">
    {{-- :src="$image" https://blogzine.webestica.com/assets/images/blog/4by3/01.jpg --}}

    <img alt="{{ $title }} section image" src="{{ $image }}"
        {{ $attributes->merge(['class' => 'object-cover w-full aspect-[4/3] transform transition-all duration-300']) }}
        :class="{ 'scale-110': isHovered }" />

    <h3 class="mt-4 text-lg font-bold sm:text-xl" :class="{ 'underline text-cyan-500': isHovered }">
        {{ $title }}
    </h3>

    <p class="max-w-sm mt-2 text-gray-700">
        {{ $excerpt }}
    </p>
</a>
{{-- class="object-cover w-full aspect-[4/3] transform transition-all duration-300" --}}
