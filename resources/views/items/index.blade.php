<x-layout>
    <h2>失物招領...</h2>

    <a href="{{ route('item.create') }}" class="btn btn-primary">
        發佈貼文
    </a>

    <hr class="mb-5 mt-5">

    <form action="#" style="max-width: 600px; margin: auto;">

        <div class="row mb-3">
            <label for="place" class="col-sm-2 col-form-label">發現地</label>
            <div class="col-sm-10">
                <input type="text" name="place" id="place" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label for="category_slug" class="col-sm-2 col-form-label">物品類型</label>
            <div class="col-sm-10">
                <select name="category_slug" id="category_slug" class="form-control">
                    <option value="">請選擇</option>
                    <option value="3c">3C產品</option>
                    <option value="clothes">衣物</option>
                </select>
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">搜尋</button>
        </div>
    </form>

</x-layout>