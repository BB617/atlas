<?php

namespace App\Http\Requests\BulletinBoard;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Categories\SubCategory;

class CategoryFormRequest extends FormRequest
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
            'main_category_id' => 'required',
            'sub_category' => 'required|max:100|string|unique:sub_categories',
        ];
    }

    public function messages()
    {
        return [
            'main_category_id.required' => '必須項目です。',
            'main_category_id.exists' => 'このメインカテゴリはありません。',
            'sub_category.required' => '必須項目です。',
            'sub_category.max' => '最大100文字です。',
            'sub_category.string' => '文字で入力してください。',
            'sub_category.unique' => 'このサブカテゴリはすでに作成済みです。',
        ];
    }
}
