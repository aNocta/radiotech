<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Радиотех</title>
    @vite(["resources/css/app.css"])
</head>
<body>
    <header class="flex items-center justify-between w-(--container-width) mt-4 mx-auto">
        <div class="flex items-center gap-4">
            <a href="/">
                <img src="{{ asset("storage/".$logo) }}" alt="радартех" width="75" height="50" loading="lazy" decoding="async" fetchpriority="high"/>
            </a>
            <nav>
                <ul class="flex gap-x-4">
                    <x-menu-item>Item 1</x-menu-item>
                    <x-menu-item>Item 2</x-menu-item>
                    <x-menu-item>Item 3</x-menu-item>
                    <x-menu-item>Item 4</x-menu-item>
                </ul>
            </nav>
        </div>
        <div class="flex items-center gap-4">
            <a class="inline-flex items-center font-main text-xl gap-x-2 hover:underline" href="tel:{{ $phone_number_formated }}" title="Позвонить">
                <svg class="size-[16px]" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                {{ $phone_number }}
            </a>
            <x-button id="contact" class="inline-flex items-center gap-2 px-4 py-2 text-xl">
                Связаться
            </x-button>
        </div>
    </header>
    <div id="slider" class="swiper w-(--container-width) h-[80dvh] relative mx-auto rounded-xl bg-gray-100 mt-6 overflow-hidden rounded-xl">
        <div class="swiper-wrapper z-1">
            @foreach($slides as $slide)
                <div class="swiper-slide p-6 flex items-end w-full bg-cover" style="background-image: url({{ asset("storage/".$slide->image) }})">
                    <div class="flex flex-col justify-between items-start w-1/2 border border-white/50 bg-white/40 backdrop-blur-md rounded-xl p-6">
                        <div class="w-full mb-2">
                            <h2 class="font-main text-5xl text-white mb-2 underline underline-offset-6 decoration-3 decoration-main">{{ $slide->name }}</h2>
                            <p class="font-main font-light text-xl text-white mb-4">{{ $slide->short_description }}</p>
                            <ul class="grid grid-rows-4 grid-flow-col gap-x-4 text-white">
                                @foreach($slide->advantages as $advantage)
                                    @if(empty($advantage["advantage"]))
                                        @continue
                                    @endif
                                    <li class="font-main inline-flex items-center gap-2 capitalize font-light text-xl before:text-main before:font-icon before:content-['']">{{ $advantage["advantage"] }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button class="group flex font-main text-xl text-main cursor-pointer">
                            <span class="-translate-x-1 duration-300 group-hover:translate-x-0">[</span>
                            Подробнее
                            <span class="translate-x-1 duration-300 group-hover:translate-x-0">]</span>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
        <button id="slide-prev" class="absolute right-22 bottom-6 size-14 bg-white/40 border border-white/50 backdrop-blur-md text-white text-2xl rounded-xl font-icon z-10 cursor-pointer duration-300 hover:bg-main active:scale-90"></button>
        <button id="slide-next" class="absolute right-6 bottom-6 size-14 bg-white/40 border border-white/50 backdrop-blur-md text-white text-2xl rounded-xl font-icon z-10 cursor-pointer duration-300 hover:bg-main active:scale-90"></button>
    </div>
    <section class="w-(--container-width) mx-auto mt-40" id="about">
        <h2 class="text-5xl text-main font-main font-extrabold">Антенны РЛС: <span class="underline underline-offset-8 decoration-gray-300">Точность, Надежность, Интеграция.</span></h2>
        <img class="about-cover rounded-xl mt-6 w-full h-[500px] object-cover align-middle bg-gray-300" src="https://www.womenintech.co.uk/wp-content/uploads/2021/11/Tech-skills-2022-1-768x432.png.webp" loading="lazy" decoding="async" fetchpriority="low" draggable="false" alt="">
        <p class="text-2xl text-balance text-main/80 font-main font-medium mt-4">Разрабатываем и производим ключевой элемент радиолокационных систем, обеспечивающий их максимальную эффективность в любых условиях.</p>
        <div class="relative grid grid-cols-3 gap-10 mt-12">
            <div class="about-list relative">
                <div class="absolute size-full grid text-6xl text-main -top-4 left-4 inset-0 gap-4 size-20">
                    <div class="border-8 border-dotted rounded-xl border-main"></div>
                </div>
                <div class="border border-main/20 bg-gray-300/10 backdrop-blur-md px-6 py-8 rounded-xl min-w-100 shadow-xl duration-500 hover:shadow-none hover:translate-x-4 hover:-translate-y-4">
                    <h3 class="text-4xl text-main font-bold">Этапы</h3>
                    <ul class="flex flex-col gap-4 mt-4">
                        <li class="inline-flex items-center gap-2 font-main">
                            <span class="grid place-content-center bg-main rounded-full text-white font-bold leading-normal size-8">1</span>
                            <span class="text-2xl">Анализ</span>
                        </li>
                        <li class="inline-flex items-center gap-2 font-main">
                            <span class="grid place-content-center bg-main rounded-full text-white font-bold leading-normal size-8">2</span>
                            <span class="text-2xl">Проектирование</span>
                        </li>
                        <li class="inline-flex items-center gap-2 font-main">
                            <span class="grid place-content-center bg-main rounded-full text-white font-bold leading-normal size-8">3</span>
                            <span class="text-2xl">Прототип</span>
                        </li>
                        <li class="inline-flex items-center gap-2 font-main">
                            <span class="grid place-content-center bg-main rounded-full text-white font-bold leading-normal size-8">4</span>
                            <span class="text-2xl">Производство</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="about-list relative flex">
                <div class="absolute size-full grid text-6xl text-main -top-4 left-4 inset-0 gap-4 size-20">
                    <div class="border-8 rounded-xl border-dashed"></div>
                </div>
                <div class="w-full border border-main/20 bg-gray-300/10 backdrop-blur-md px-6 py-8 rounded-xl min-w-100 shadow-xl duration-500 hover:shadow-none hover:translate-x-4 hover:-translate-y-4">
                    <h3 class="text-4xl text-main font-bold">Фокус</h3>
                    <ul class="flex flex-col gap-4 mt-4">
                        <li class="inline-flex items-center gap-2 font-main">
                            <span class="grid place-content-center bg-main rounded-full text-white font-bold font-icon leading-normal size-8"></span>
                            <span class="text-2xl">Технологии</span>
                        </li>
                        <li class="inline-flex items-center gap-2 font-main">
                            <span class="grid place-content-center bg-main rounded-full text-white font-bold font-icon leading-normal size-8"></span>
                            <span class="text-2xl">Качество</span>
                        </li>
                        <li class="inline-flex items-center gap-2 font-main">
                            <span class="grid place-content-center bg-main rounded-full text-white font-bold font-icon leading-normal size-8"></span>
                            <span class="text-2xl">Стандарты</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="about-list relative flex">
                <div class="absolute size-full grid text-6xl text-main -top-4 left-4 inset-0 gap-4 size-20">
                    <div class="border-8 rounded-xl border-main border-double"></div>
                </div>
                <div class="w-full border border-main/20 bg-gray-300/10 backdrop-blur-md px-6 py-8 rounded-xl min-w-100 shadow-xl duration-500 hover:shadow-none hover:translate-x-4 hover:-translate-y-4">
                    <h3 class="text-4xl text-main font-bold">Результат</h3>
                    <ul class="flex flex-col gap-4 mt-4">
                        <li class="inline-flex items-center gap-2 font-main">
                            <span class="grid place-content-center bg-main rounded-full text-white font-icon font-bold leading-normal size-8"></span>
                            <span class="text-2xl">Надежность</span>
                        </li>
                        <li class="inline-flex items-center gap-2 font-main">
                            <span class="grid place-content-center bg-main rounded-full text-white font-icon font-bold leading-normal size-8"></span>
                            <span class="text-2xl">Устойчивость</span>
                        </li>
                        <li class="inline-flex items-center gap-2 font-main">
                            <span class="grid place-content-center bg-main rounded-full text-white font-icon font-bold leading-normal size-8"></span>
                            <span class="text-2xl">Интеграция</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-12">
            <x-button class="text-2xl px-6 py-4 mx-auto">Связаться со Специалистом</x-button>
        </div>
    </section>
    <dialog class="p-auto m-auto rounded-xl bg-main duration-300 opacity-0 starting:open:scale-0 starting:open:opacity-0 open:scale-100 open:opacity-100 backdrop:bg-main/40 backdrop:backdrop-blur-md" id="contact-us" closedby="any">
        <header class="flex justify-between items-center bg-main px-4 py-2 w-120">
            <h2 class="text-white text-2xl font-main leading-normal">Свяжитесь с нами!</h2>
            <button class="close-btn bg-transparent border-none text-white leading-normal cursor-pointer duration-300 hover:text-red-400">
                <svg class="size-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
            </button>
        </header>
        <form class="px-4 py-2 bg-white rounded-t-lg">
            <label class="flex flex-col gap-2 text-xl text-main font-main " for="contact-name">
                Ваше имя:
                <input type="text" id="contact-name" name="name" placeholder="Имя" class="border border-main rounded-xl p-2 text-sm duration-300 focus-visible:outline-none focus-visible:ring-main/50 focus-visible:ring-2"/>
            </label>
            <label class="mt-2 flex flex-col gap-2 text-xl text-main font-main " for="contact-email">
                Ваш email:
                <input type="email" id="contact-email" name="email" placeholder="email@example.com" class="border border-main rounded-xl p-2 text-sm duration-300 focus-visible:outline-none focus-visible:ring-main/50 focus-visible:ring-2"/>
            </label>
            <x-button class="mt-2 px-4 py-2 text-xl">Отправить</x-button>
            <hr class="mt-4 border-main">
            <h3 class="text-xl text-main font-main mt-4">Или связаться по whatsapp:</h3>
            <a href="{{ $whatsapp }}" class="mt-2 grid place-content-center size-[40px] bg-[#25D366] rounded-full duration-300 hover:brightness-80">
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="white"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
            </a>
        </form>
    </dialog>
    @vite(["resources/js/app.js"])
</body>
</html>
