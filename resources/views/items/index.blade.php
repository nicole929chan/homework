<x-layout>
    <h2>遺失物品清單...</h2>

    <a href="{{ route('home.action') }}" class="btn btn-primary">返回首頁</a>

    <div class="d-flex flex-wrap">
        @foreach ($items as $item)
           <x-item-card :item=$item></x-item-card>
        @endforeach
    </div>
</x-layout>