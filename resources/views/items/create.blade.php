<x-layout>
    <h2>我撿到...</h2>

    <form method="post" action="{{ action([App\Http\Controllers\ItemsController::class, 'store']) }}" enctype="multipart/form-data">
        @csrf
        <div class="">
            <label for="category_id" class="form-label">物品類型</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">請選擇</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="">
            <label for="box_id" class="form-label">放置位置</label>
            <select name="box_id" id="box_id" class="form-control">
                <option value="">請選擇</option>
                @foreach ($boxes as $box)
                    <option value="{{ $box->id }}">{{ $box->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="">
            <label for="place" class="form-label">拾獲地點</label>
            <input type="text" name="place" id="place" class="form-control">
        </div>

        <div class="">
            <label for="pickup_at" class="form-label">拾獲時間</label>
            <input type="datetime-local" name="pickup_at" id="pickup_at" class="form-control">
        </div>

        <div class="">
            <label for="image01">上傳圖檔</label>
            <input type="file" name="image01" class="form-control">
        </div>

        <button type="button" class="btn btn-secondary">返回</button>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>

</x-layout>