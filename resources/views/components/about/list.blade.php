<div class="about-list relative flex">
    <div class="absolute grid text-6xl text-main -top-4 left-4 inset-0 gap-4 size-full">
        <div class="border-8 rounded-xl {{ $decoration }}"></div>
    </div>
    <div class="w-full border border-main/20 bg-gray-300/10 backdrop-blur-md px-6 py-8 rounded-xl min-w-100 shadow-xl duration-500 hover:shadow-none hover:translate-x-4 hover:-translate-y-4">
        <h3 class="text-4xl text-main font-bold">{{ $title }}</h3>
        <ul class="flex flex-col gap-4 mt-4">
            @foreach($items as $icon => $item)
                <x-about.list-item :icon="$icon">{{ $item }}</x-about.list-item>
            @endforeach
        </ul>
    </div>
</div>
