<li class="flex flex-col items-center font-main text-center">
    <img src="{{ $image }}"
         alt=""
         width="150"
         height="100"
         draggable="false"
         loading="lazy"
         decoding="async"
         fetchpriority="low"
    />
    <h3 class="text-main section-title lg:text-2xl xl:text-3xl font-bold mt-4">[ {{ $title }} ]</h3>
    <p class="text-main/80 lg:text-xl xl:text-2xl xl:leading-6 text-balance xl:mt-2">{{ $description }}</p>
</li>
