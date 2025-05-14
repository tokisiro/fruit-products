<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|integer|min:0|max:10000',
            'image' => 'required|mimes:jpeg,png',
            'description' => 'required|max:120',

            'season_id' => [
            'required',
            Rule::exists('product_season', 'season_id'),
            ],
        ];
    }
    public function messages()
    {
    return [
        'name.required' => '商品名を入力してください',
        'price.required' => '値段を入力してください',
        'price.integer' => '数値で入力してください',
        'price.min:0|max:10000' => '0〜10000円以内で入力してください',
        'season_id.required' => '季節を選択してください',
        'description.required' => '商品説明を入力してください',
        'description.max:120' => '120文字で入力してください',
        'image.requ' => '150以下の数値を入力してください',
        'nationality.required' => '国籍を入力してください',
    ];
    }
}
