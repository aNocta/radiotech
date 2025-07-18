<button {{ $attributes }} class="absolute {{ $direction === "prev" ? "lg:right-16 xl:right-22" : "lg:right-4 xl:right-6" }} lg:bottom-4 xl:bottom-6 lg:size-10 xl:size-14 bg-white/40 border border-white/50 backdrop-blur-md text-white text-2xl rounded-xl font-icon z-10 cursor-pointer duration-300 hover:bg-main active:scale-90">
    {{ $slot }}
</button>
