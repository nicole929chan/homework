@props(['item'])

<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/'.$item->image01) }}" class="card-img-top" alt=""  width="304" height="200">
    <div class="card-body">
        <p class="card-text">物品類型: {{ $item->category->name }}</p>
        <p class="card-text">拾獲地點: {{ $item->place }}</p>
        <p class="card-text">放置位置: {{ $item->box->title }}</p>
        <p class="card-text">拾獲時間: {{ $item->pickup_at }}</p>
        <p class="card-text">物品簡述: {{ $item->description }}</p>
    </div>
</div>