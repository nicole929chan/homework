<x-layout>
    <h2>失物招領...</h2>

    <a href="{{ route('item.create') }}" class="btn btn-primary">
        發佈貼文
    </a>

    <hr class="mb-5 mt-5">

    <form action="{{ action([App\Http\Controllers\ItemsController::class, 'index']) }}" style="max-width: 600px; margin: auto;">

        <div class="row mb-3">
            <label for="category_id" class="col-sm-2 col-form-label">物品類型</label>
            <div class="col-sm-10">
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">請選擇</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="place" class="col-sm-2 col-form-label">拾獲地點</label>
            <div class="col-sm-10">
                <input type="text" name="place" id="place" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">物品簡述</label>
            <div class="col-sm-10">
                <input type="text" name="description" id="description" class="form-control">
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">搜尋</button>
        </div>
    </form>

</x-layout>