<button {{ $attributes->merge(["class" => "relative overflow-hidden rounded-xl text-white font-main bg-main cursor-pointer duration-750
             before:duration-750 before:absolute before:size-full before:-left-full before:top-0 before:bg-main-hover before:rounded-xl hover:before:left-0"]) }}>
    <span class="relative z-1">{{ $slot  }}</span>
</button>
