<table class="w-full overflow-hidden rounded-xl font-main table-fixed">
    <thead class="bg-main text-white">
        <tr>
            <th class="lg:text-xl xl:text-3xl lg:py-2 xl:py-4 cursor-pointer bg-main duration-300 hover:brightness-125" wire:click="sort('name')">
                Название
                <span class="inline-block duration-300 font-icon text-lg" :class="{'hidden': $wire.sort_by != 'name', 'price-list-desc': $wire.sort_direction == 'asc'}"></span>
            </th>
            <th class="lg:text-xl xl:text-3xl lg:py-2 xl:py-4 cursor-pointer bg-main duration-300 hover:brightness-125" wire:click="sort('price')">
                Цена
                <span class="inline-block duration-300 font-icon text-lg" :class="{'hidden': $wire.sort_by != 'price', 'price-list-desc': $wire.sort_direction == 'asc'}"></span>
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody wire:transition>
    @foreach($prices as $k => $price)
        <tr wire:key="{{ $k }}" class="text-main bg-main/10 duration-300 hover:bg-main/30 even:bg-gray-300 fade-in">
            <td class="text-center lg:text-base xl:text-2xl lg:py-2 xl:py-4 fade-in">{{ $price["name"] }}</td>
            <td class="text-center lg:text-base xl:text-2xl text-2xl lg:py-2 xl:py-4 fade-in">{{ $price["price"] }}</td>
            <td class="text-center lg:py-2 xl:py-4">
                <x-button class="lg:px-4 xl:px-6 py-2 lg:text-base xl:text-2xl" @click="contactIsOpen = true">Отправить заявку</x-button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
