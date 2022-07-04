<?php

namespace App\Http\Requests\BulletinBoard;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Categories\MainCategory;

class PostFormRequest extends FormRequest
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
            // Post
            'post_title' => 'min:4|max:50',
            'post_body' => 'min:10|max:500',
            // Category
            // 'main_category_id' => 'required|exists:main_categories, id',
            'main_category_id' => 'required',
            'sub_category' => 'required|max:100|string|unique:sub_categories',
        ];
    }

    public function messages()
    {
        return [
            // Post
            'post_title.min' => 'タイトルは4文字以上入力してください。',
            'post_title.max' => 'タイトルは50文字以内で入力してください。',
            'post_body.min' => '内容は10文字以上入力してください。',
            'post_body.max' => '最大文字数は500文字です。',
            // Category
            'main_category_id.required' => '必須項目です。',
            'main_category_id.exists' => 'このメインカテゴリはありません。',
            'sub_category.required' => '必須項目です。',
            'sub_category.max' => '最大100文字です。',
            'sub_category.string' => '文字で入力してください。',
            'sub_category.unique' => 'このサブカテゴリはすでに作成済みです。',
        ];
    }
}
