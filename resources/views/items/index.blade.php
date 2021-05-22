<x-layout>
    <h2>遺失物品清單...</h2>

    <div class="d-flex flex-wrap">
        @foreach ($items as $item)
           <x-item-card :item=$item></x-item-card>
        @endforeach
    </div>
</x-layout>