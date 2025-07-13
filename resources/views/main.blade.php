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
        contactIsOpen: false
    }"
>
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
            <x-button x-data id="contact" class="inline-flex items-center gap-2 px-4 py-2 text-xl" @click="contactIsOpen = true" popup-target="contact-form">
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
        <img class="about-cover rounded-xl mt-6 w-full h-[500px] object-cover align-middle bg-gray-300" src="https://www.womenintech.co.uk/wp-content/uploads/2021/11/Tech-skills-2022-1-768x432.png.webp" loading="lazy" decoding="async" fetchpriority="low" draggable="false" alt="">
        <p class="text-2xl text-balance text-main/80 font-main font-medium mt-4">Разрабатываем и производим ключевой элемент радиолокационных систем, обеспечивающий их максимальную эффективность в любых условиях.</p>
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
        <div class="flex justify-center mt-12">
            <x-button class="text-2xl px-6 py-4 mx-auto">Связаться со Специалистом</x-button>
        </div>
    </x-section>
    <x-section id="services">
        <x-section.header>
            <x-section.highlight>Услуги</x-section.highlight>
        </x-section.header>
        <div class="grid grid-cols-3 gap-10 mt-12">
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
        <x-section.header class="mb-12">
            <x-section.highlight>Цены</x-section.highlight>
        </x-section.header>
        <livewire:price-list></livewire:price-list>
    </x-section>
    <x-section id="directions">
        <x-section.header>
            <x-section.highlight>Наши направления</x-section.highlight>
        </x-section.header>
        <x-directions>
            <x-directions.item
                title="Test item 1"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque consequatur expedita inventore laborum quos."
                image="https://cdn-icons-png.flaticon.com/512/164/164401.png"
            />
            <x-directions.item
                title="Test item 1"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque consequatur expedita inventore laborum quos."
                image="https://cdn-icons-png.flaticon.com/512/164/164401.png"
            />
            <x-directions.item
                title="Test item 1"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque consequatur expedita inventore laborum quos."
                image="https://cdn-icons-png.flaticon.com/512/164/164401.png"
            />
        </x-directions>
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
    @vite(["resources/js/app.js"])
</body>
</html>
