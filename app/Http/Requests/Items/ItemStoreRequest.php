<?php

namespace App\Http\Requests\Items;

use Illuminate\Foundation\Http\FormRequest;

class ItemStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'box_id' => 'required|exists:boxes,id',
            'place' => 'required|max:50',
            'pickup_at' => 'sometimes|date_format:Y-m-d\TH:i',
            'image01' => 'sometimes|image',
            'description' => 'required|max:50'
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => '請選擇',
            'category_id.exists' => '類別不存在',
            'box_id.required' => '請選擇',
            'box_id.exists' => '位置不存在',
            'place.required' => '必填',
            'place.max' => '至多50個字',
            'pickup_at.date_format' => '日期時間格式錯誤',
            'image01.image' => '須為圖檔',
            'description.required' => '必填',
            'description.max' => '至多50個字'
        ];
    }
}
