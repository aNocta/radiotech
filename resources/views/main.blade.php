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
<body
    x-data="{
        contactIsOpen: false,
        descriptionIsOpen: false,
        currentTitle: '',
        description: ''
    }"
>
    <header class="flex items-center justify-between w-(--container-width) mt-4 mx-auto">
        <div class="flex items-center gap-12">
            <a href="/">
                <img src="{{ asset("storage/".$logo) }}" class="w-15 lg:w-20 xl:w-25" alt="радартех" width="100" height="75" loading="lazy" decoding="async" fetchpriority="high"/>
            </a>
            <nav class="hidden lg:block" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <meta itemprop="name" content="Главное меню"/>
                <ul class="flex gap-x-4">
                    <x-menu-item>Item 1</x-menu-item>
                    <x-menu-item>Item 2</x-menu-item>
                    <x-menu-item>Item 3</x-menu-item>
                    <x-menu-item>Item 4</x-menu-item>
                </ul>
            </nav>
        </div>
        <div class="flex flex-col lg:flex-row items-end lg:items-center gap-2 lg:gap-12 mt-2 lg:mt-0">
            <a class="inline-flex items-center font-main text-main lg:text-xl xl:text-2xl gap-x-2 hover:underline" href="tel:{{ $phone_number_formated }}" title="Позвонить">
                <span class="font-icon"></span>
                {{ $phone_number }}
            </a>
            <x-button x-data id="contact" class="inline-flex items-center gap-2 px-4 py-2 lg:text-xl xl:text-2xl" @click="contactIsOpen = true" popup-target="contact-form">
                Связаться
            </x-button>
        </div>
    </header>
    <x-slider>
        @foreach($slides as $slide)
            <x-slider.item
                :image="asset('storage/'.$slide->image)"
                :name="$slide->name"
                :short-description="$slide->short_description"
                :advantages="$slide->advantages"
                :description="$slide->description"
            />
        @endforeach
        <x-slot:buttons>
            <x-slider.button id="slide-prev"></x-slider.button>
            <x-slider.button id="slide-next" direction="next"></x-slider.button>
        </x-slot:buttons>
    </x-slider>
    <x-section id="about">
        <x-section.header>
            Антенны РЛС:&nbsp;
            <x-section.highlight>Точность, Надежность, Интеграция.</x-section.highlight>
        </x-section.header>
        <img class="about-cover rounded-xl mt-6 w-full lg:h-100 xl:h-125 object-cover align-middle bg-gray-300" src="https://www.womenintech.co.uk/wp-content/uploads/2021/11/Tech-skills-2022-1-768x432.png.webp" loading="lazy" decoding="async" fetchpriority="low" draggable="false" alt="">
        <x-section.description class="mt-4">Разрабатываем и производим ключевой элемент радиолокационных систем, обеспечивающий их максимальную эффективность в любых условиях.</x-section.description>
        <div class="relative grid grid-cols-3 gap-10 mt-12">
            <x-about.points
                title="Этапы"
                decoration="border-solid"
                :items="[
                    1 => 'Анализ',
                    2 => 'Проектирование',
                    3 => 'Прототип',
                    4 => 'Производство',
                ]"
            />
            <x-about.points
                title="Фокус"
                :items="[
                    '' => 'Технологии',
                    '' => 'Качество',
                    '' => 'Стандарты',
                ]"
            />
            <x-about.points
                title="Результат"
                decoration="border-dotted"
                :items="[
                    '' => 'Надежность',
                    '' => 'Устойчивость',
                    '' => 'Интеграция',
                ]"
            />

        </div>
        <div class="flex justify-center lg:mt-10 xl:mt-12">
            <x-button class="lg:text-xl xl:text-2xl lg:px-4 xl:px-6 lg:py-2 xl:py-4 mx-auto" @click="contactIsOpen = true">Связаться со Специалистом</x-button>
        </div>
    </x-section>
    <x-section id="services">
        <x-section.header>
            <x-section.highlight>Услуги</x-section.highlight>
        </x-section.header>
        <div class="grid grid-cols-3 gap-10 lg:mt-10 xl:mt-12">
            @foreach($services as $service)
                <x-service
                    :title="$service->title"
                    :shortDescription="$service->short_description"
                    :background="asset('storage/'.$service->image)"
                />
            @endforeach
        </div>
    </x-section>
    <x-section id="price-list">
        <x-section.header class="lg:mb-10 xl:mb-12">
            <x-section.highlight>Цены</x-section.highlight>
        </x-section.header>
        <livewire:price-list></livewire:price-list>
    </x-section>
    <x-section id="directions">
        <x-section.header>
            <x-section.highlight>Наши направления</x-section.highlight>
        </x-section.header>
        <x-directions>
            @foreach($directions as $direction)
                <x-directions.item
                    :title="$direction->title"
                    :description="$direction->description"
                    :image="asset('storage/'.$direction->image)"
                />
            @endforeach
        </x-directions>
    </x-section>
    <x-section>
        <x-section.header><x-section.highlight>Принцип работы</x-section.highlight></x-section.header>
        <x-section.description class="lg:mt-10 xl:mt-12">
            <p class="mb-2">Lorem ipsum <b>dolor sit amet,</b> consectetur adipisicing elit. A adipisci aperiam architecto beatae consequatur consequuntur corporis, distinctio dolores dolorum earum enim eos fugiat harum in laborum maiores minima minus mollitia necessitatibus nihil odit officiis optio porro provident repellendus repudiandae rerum, sunt suscipit tempora tenetur totam vel voluptate, voluptatem?</p>
            <p>Atque, eius enim esse ex ipsam nobis quam rem suscipit veritatis voluptate. Beatae blanditiis consequuntur cupiditate distinctio, excepturi fugiat itaque minima sapiente. Consectetur dicta iure perferendis? Accusamus corporis dolor, doloribus esse, fugit iusto odit officia omnis qui ratione repellendus reprehenderit sint voluptas! Debitis deserunt obcaecati quos sint! Amet aperiam beatae earum eius et eum fuga ipsam ipsum, magni officiis possimus quis quos repellat reprehenderit rerum, soluta totam voluptatum. Adipisci ea error et eveniet excepturi expedita, facere, inventore molestias neque nesciunt nostrum numquam optio pariatur perspiciatis possimus quaerat quas quidem quo reprehenderit saepe sed ullam vitae! Amet dolore ea excepturi facilis ipsam recusandae, reprehenderit velit! Ab at dolores, earum labore magni odio placeat porro provident quam, quas qui quibusdam repellendus unde vero voluptatum? Consequatur cupiditate deserunt distinctio, dolor ea, fugiat, hic in laboriosam libero perspiciatis qui repudiandae rerum temporibus. Culpa expedita maxime necessitatibus suscipit! Labore laboriosam modi pariatur. Cum deleniti odio reiciendis sunt!</p>
        </x-section.description>
    </x-section>
    <x-section>
        <x-section.header><x-section.highlight>О нас</x-section.highlight></x-section.header>
        <x-company>
            <x-slot:buttons>
                <x-company.button :is-active="true">Test 1</x-company.button>
                <x-company.button>Test 2</x-company.button>
                <x-company.button>Test 3</x-company.button>
            </x-slot:buttons>
            <x-slot:items></x-slot:items>
        </x-company>
    </x-section>
    <x-section>
        <div class="grid grid-cols-[1fr_2fr]">
            <div>
                <x-section.header><x-section.highlight>Как нас найти</x-section.highlight></x-section.header>
                <ul class="lg:mt-10 xl:mt-12 font-main lg:text-xl xl:text-2xl text-main">
                    <li class="flex items-center gap-4 mb-4">
                        <span class="font-icon"></span>
                        {{ $phone_number }}
                    </li>
                    <li class="flex items-center gap-4 mb-4">
                        <span class="font-icon"></span>
                        {{ $footer_email }}
                    </li>
                    <li class="flex items-center gap-4 mb-4">
                        <span class="font-icon"></span>
                        {{ $address }}
                    </li>
                </ul>
            </div>
            <div>
                <div class="w-full" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/kiyevskiy_vokzal/1095876672/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Киевский вокзал</a><a href="https://yandex.ru/maps/213/moscow/category/railway_station/184108155/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Железнодорожный вокзал в Москве</a><iframe class="w-full rounded-xl" loading="lazy" src="https://yandex.ru/map-widget/v1/?ll=37.638392%2C55.748969&mode=poi&poi%5Bpoint%5D=37.567136%2C55.743378&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D1095876672&utm_campaign=desktop&utm_medium=search&utm_source=maps&z=12.68" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </div>
    </x-section>
    <x-section>
        <div class="flex items-center justify-between">
            <img src="{{ asset('storage/'. $footer_logo) }}" alt="Радартех" width="250" height="200" draggable="false" loading="lazy" decoding="async" fetchpriority="low"/>
            <nav class="flex gap-4">
                <x-menu-item>Политика конфиденциальности</x-menu-item>
                <x-menu-item>договор оферты</x-menu-item>
            </nav>
        </div>
        <div class="flex justify-between">
            <span class="font-main text-main/80 text-lg mt-4">
                Акционерное общество «Научно-производственное объединение РадарТех»
            </span>
            <span class="font-main text-main/80 text-lg mt-4">
                ИНН: 99999999999&nbspОГРН: 1222222
            </span>
        </div>
    </x-section>
    <x-popup name="contact-form"
             @close="contactIsOpen = false"
             x-effect="isOpen = contactIsOpen"
    >
        <header class="flex justify-between items-center p-6 bg-main text-white rounded-xl">
            <h2 class="text-3xl/4 font-bold">Свяжитесь с нами!</h2>
            <button @click="contactIsOpen = false" class="close-btn bg-transparent border-none leading-normal cursor-pointer duration-300 hover:text-red-400">
                <svg class="size-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
            </button>
        </header>
        <form action="/" class="flex flex-col gap-4 p-6">
            <label for="contact-name" class="flex flex-col gap-2 text-main text-lg font-medium font-main">
                Ваше имя:
                <input id="contact-name" placeholder="Алексей" name="contact_name" class="py-2 px-6 border-1 border-main rounded-xl placholder:text-inherit" type="text" autocomplete="name">
            </label>
            <label for="contact-email" class="flex flex-col gap-2 text-main text-lg font-medium font-main">
                Ваш email:
                <input id="contact-email" placeholder="mail@example.com" name="contact_email" class="py-2 px-6 border-1 border-main rounded-xl placholder:text-inherit" type="text" autocomplete="name">
            </label>
            <label for="contact-phone" class="flex flex-col gap-2 text-main text-lg font-medium font-main">
                Ваш телефон:
                <input id="contact-phone" placeholder="+7 (999) 999-99-99" name="contact_phone" class="py-2 px-6 border-1 border-main rounded-xl placholder:text-inherit" type="text" autocomplete="name">
            </label>
            <x-button class="py-2 px-6 mt-4 text-lg">Отправить</x-button>
            <hr class="border-main">
            <h3 class="text-xl text-main font-main">Или связаться по whatsapp:</h3>
            <a href="{{ $whatsapp }}" class="grid place-content-center size-[40px] bg-[#25D366] rounded-full duration-300 hover:brightness-80">
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="white"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
            </a>
        </form>
    </x-popup>
    <x-popup
            name="Description"
             @close="descriptionIsOpen = false"
             x-effect="isOpen = descriptionIsOpen"
    >
        <header class="flex justify-between items-center p-6 bg-main text-white rounded-xl">
            <h2 class="text-3xl/4 font-bold" x-text="currentTitle"></h2>
            <button @click="descriptionIsOpen = false" class="close-btn bg-transparent border-none leading-normal cursor-pointer duration-300 hover:text-red-400">
                <svg class="size-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
            </button>
        </header>
        <div class="text-main/80 text-xl font-main p-6 description" x-html="description">

        </div>
    </x-popup>
    @vite(["resources/js/app.js"])
</body>
</html>
