<button {{ $attributes }} class="absolute {{ $direction === "prev" ? "right-22" : "right-6" }} bottom-6 size-14 bg-white/40 border border-white/50 backdrop-blur-md text-white text-2xl rounded-xl font-icon z-10 cursor-pointer duration-300 hover:bg-main active:scale-90">
    {{ $slot }}
</button>
