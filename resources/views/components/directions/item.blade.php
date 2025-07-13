<li class="flex flex-col items-center font-main text-center">
    <img src="{{ $image }}"
         alt=""
         width="100"
         height="75"
         draggable="false"
         loading="lazy"
         decoding="async"
         fetchpriority="low"
    />
    <h3 class="text-main text-3xl font-bold">{{ $title }}</h3>
    <p class="text-main/80 text-lg leading-4 text-balance">{{ $description }}</p>
</li>
