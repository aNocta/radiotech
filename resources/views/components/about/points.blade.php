<div class="about-list relative flex">
    <div class="absolute grid text-main -top-4 left-4 inset-0 gap-4 size-full">
        <div class="border-8 rounded-xl {{ $decoration }}"></div>
    </div>
    <div class="w-full border border-main/20 bg-gray-300/10 backdrop-blur-md lg:px-4 xl:px-6 lg:py-6 xl:py-8 box-border rounded-xl xl:min-w-100 shadow-xl duration-500 hover:shadow-none hover:translate-x-4 hover:-translate-y-4">
        <h3 class="lg:text-2xl xl:text-4xl text-main section-title font-bold">{{ $title }}</h3>
        <ul class="flex flex-col lg:gap-2 xl:gap-4 mt-4">
            @foreach($items as $icon => $item)
                <x-about.list-item :icon="$icon">{{ $item }}</x-about.list-item>
            @endforeach
        </ul>
    </div>
</div>
