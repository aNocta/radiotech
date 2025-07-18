<div x-data="popup"
     x-show="active"
     @click="clickOutside"
     id="{{ $name }}" {{ $attributes }} class="popup grid place-content-center fixed top-0 left-0 size-full bg-main/40 backdrop-blur-md z-999">
    <div x-ref="window" class="popup-window min-w-150 max-w-300 bg-white rounded-xl">
        {{ $slot }}
    </div>
</div>
