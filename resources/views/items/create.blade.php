<x-layout>
    <h2>我撿到...</h2>

    <form action="#" enctype="multipart/form-data">

        <div class="">
            <label for="category_slug" class="form-label">物品類型</label>
            <select name="category_slug" id="category_slug" class="form-control">
                <option value="">請選擇</option>
                <option value="3c">3C產品</option>
                <option value="clothes">衣物</option>
            </select>
        </div>

        <div class="">
            <label for="category_slug" class="form-label">放置位置</label>
            <select name="box_slug" id="category_slug" class="form-control">
                <option value="">請選擇</option>
                <option value="mis-1f">資管大樓1F</option>
            </select>
        </div>

        <div class="">
            <label for="place" class="form-label">拾獲地點</label>
            <input type="text" name="place" id="place" class="form-control">
        </div>

        <div class="">
            <label for="pickup_at" class="form-label">拾獲時間</label>
            <input type="date" name="pickup_at" id="pickup_at" class="form-control">
        </div>

        <div class="">
            <label for="image01">上傳圖檔</label>
            <input type="file" name="image01" class="form-control">
        </div>

        <button type="button" class="btn btn-secondary">返回</button>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>

</x-layout>