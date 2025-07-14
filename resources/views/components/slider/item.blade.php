<div class="swiper-slide p-6 flex items-end w-full bg-cover" style="background-image: url({{ $image }})">
    <div class="flex flex-col justify-between items-start w-1/2 border border-white/50 bg-white/40 backdrop-blur-md rounded-xl p-6">
        <div class="w-full mb-2">
            <h2 class="font-main text-5xl text-white mb-2 underline underline-offset-6 decoration-3 decoration-main">{{ $name }}</h2>
            <p class="font-main font-light text-2xl text-white mb-4">{{ $shortDescription }}</p>
            <ul class="grid grid-rows-4 grid-flow-col gap-x-4 text-white">
                @foreach($advantages as $advantage)
                    @if(empty($advantage["advantage"]))
                        @continue
                    @endif
                    <li class="font-main inline-flex items-center gap-2 capitalize font-light text-2xl before:text-main before:font-icon before:content-['']">{{ $advantage["advantage"] }}</li>
                @endforeach
            </ul>
        </div>
        <button class="group flex font-main text-2xl text-main cursor-pointer">
            <span class="-translate-x-1 duration-300 group-hover:translate-x-0">[</span>
            Подробнее
            <span class="translate-x-1 duration-300 group-hover:translate-x-0">]</span>
        </button>
    </div>
</div>
