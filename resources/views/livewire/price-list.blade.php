<table class="w-full overflow-hidden rounded-xl font-main table-fixed">
    <thead class="bg-main text-white">
        <tr>
            <th class="text-2xl py-2 cursor-pointer bg-main duration-300 hover:brightness-125" wire:click="sort('name')">
                Название
                @if($sort_by === "name")
                    &nbsp;<span class="font-icon text-lg">{{ $sort_direction === "asc" ? "" : "" }}</span>
                @endif
            </th>
            <th class="text-2xl py-2 cursor-pointer bg-main duration-300 hover:brightness-125" wire:click="sort('price')">
                Цена
                @if($sort_by === "price")
                    &nbsp;<span class="font-icon text-lg">{{ $sort_direction === "asc" ? "" : "" }}</span>
                @endif
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($prices as $price)
        <tr class="bg-main/10 duration-300 hover:bg-main/30 even:bg-gray-300 fade-in">
            <td class="text-center text-lg py-2 fade-in">{{ $price["name"] }}</td>
            <td class="text-center text-lg py-2 fade-in">{{ $price["price"] }}</td>
            <td class="text-center py-2">
                <x-button class="px-6 py-2">Отправить заявку</x-button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
