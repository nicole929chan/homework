<x-layout>
    <h2>我撿到...</h2>

    <form method="post" action="{{ action([App\Http\Controllers\ItemsController::class, 'store']) }}" enctype="multipart/form-data">
        @csrf
        <div class="">
            <label for="category_id" class="form-label">物品類型</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">請選擇</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="alert text-danger" role="alert"><small>{{ $message }}</small></div>
            @enderror
        </div>

        <div class="">
            <label for="box_id" class="form-label">放置位置</label>
            <select name="box_id" id="box_id" class="form-control">
                <option value="">請選擇</option>
                @foreach ($boxes as $box)
                    <option value="{{ $box->id }}" @if($box->id == old('box_id')) selected @endif>{{ $box->title }}</option>
                @endforeach
            </select>
            @error('box_id')
                <div class="alert text-danger" role="alert"><small>{{ $message }}</small></div>
            @enderror
        </div>

        <div class="">
            <label for="place" class="form-label">拾獲地點</label>
            <input type="text" name="place" id="place" class="form-control" value="{{ old('place') }}" placeholder="例: 資管大樓2F">
            @error('place')
                <div class="alert text-danger" role="alert"><small>{{ $message }}</small></div>
            @enderror
        </div>

        <div class="">
            <label for="description" class="form-label">物品簡述</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" placeholder="例: 黑色iPhone">
            @error('description')
                <div class="alert text-danger" role="alert"><small>{{ $message }}</small></div>
            @enderror
        </div>

        <div class="">
            <label for="pickup_at" class="form-label">拾獲時間</label>
            <input type="datetime-local" name="pickup_at" id="pickup_at" class="form-control" value="{{ old('pickup_at') }}">
            @error('pickup_at')
                <div class="alert text-danger" role="alert"><small>{{ $message }}</small></div>
            @enderror
        </div>

        <div class="">
            <label for="image01">上傳圖檔</label>
            <input type="file" name="image01" class="form-control">
            @error('image01')
                <div class="alert text-danger" role="alert"><small>{{ $message }}</small></div>
            @enderror
        </div>

        <button type="button" class="btn btn-secondary">返回</button>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>

</x-layout>