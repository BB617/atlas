<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|katakana|max:30',
            'under_name_kana' => 'required|string|katakana|max:30',
            'mail_address' => 'required|email|unique:users|max:100',
            'sex' => 'required',
            'old_year' => 'required',
            'old_month' => 'required',
            'old_day' => 'required',
            'role' => 'required',
            'password' => 'required|min:8|max:30|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'over_name.required' => '必須項目です。',
            'over_name.string' => '使用できない文字が使われています。',
            'over_name.max' => '最大10文字です。',
            'under_name.required' => '必須項目です。',
            'under_name.string' => '使用できない文字が使われています。',
            'under_name.max' => '最大10文字です。',
            'over_name_kana.required' => '必須項目です。',
            'over_name_kana.string' => '使用できない文字が使われています。',
            'over_name_kana.max' => '最大10文字です。',
            'over_name_kana.katakana' => 'カタカナで入力してください。',
            'under_name_kana.required' => '必須項目です。',
            'under_name_kana.string' => '使用できない文字が使われています。',
            'under_name_kana.katakana' => 'カタカナで入力してください。',
            'under_name_kana.max' => '最大10文字です。',
            'mail_address.required' => '必須項目です。',
            'mail_address.email' => 'メール形式で入力してください。',
            'mail_address.unique' => 'このメールアドレスは使えません。',
            'mail_address.max' => '最大100文字です。',
            'password.required' => '必須項目です。',
            'password.min' => '8文字以上で入力してください。',
            'password.max' => '最大30文字です。',
            'password.confirmed' => 'パスワードが一致しません。',
        ];
    }
}
