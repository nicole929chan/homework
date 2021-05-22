@props(['item'])

<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/'.$item->image01) }}" class="card-img-top" alt="">
    <div class="card-body">
        <p class="card-text">物品類型: {{ $item->category->name }}</p>
        <p class="card-text">拾獲地點: {{ $item->place }}</p>
        <p class="card-text">拾獲時間: {{ $item->pickup_at }}</p>
        <p class="card-text">物品簡述: {{ $item->description }}</p>
    </div>
</div>