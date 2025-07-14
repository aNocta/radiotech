<article class="service group relative h-100 rounded-xl duration-300 ease-in-out overflow-hidden cursor-pointer">
    <img src="{{ $background }}"
         alt=""
         width="500"
         height="400"
         loading="lazy"
         decoding="async"
         fetchpriority="low"
         draggable="false"
         class="absolute left-0 top-0 size-full object-cover duration-300"
    >
    <div class="absolute left-0 bottom-0 w-full p-4">
        <div class="w-full py-4 px-4 bg-white/40 backdrop-blur-md font-main text-white rounded-xl">
            <h3 class="text-3xl font-bold duration-300 group-hover:text-main">{{ $title }}</h3>
            <p class="overflow-hidden text-2xl h-0 leading-5">
                {{ $shortDescription }}<br/><br/>
                <span class="text-lg decoration-4 decoration-main underline underline-offset-4 font-bold">Нажмите, чтобы узнать более подробно</span>
            </p>
        </div>
    </div>
</article>
