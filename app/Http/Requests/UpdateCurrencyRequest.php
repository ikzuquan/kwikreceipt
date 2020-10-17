<?php

namespace App\Http\Requests;

use App\Models\Currency;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCurrencyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('currency_edit');
    }

    public function rules()
    {
        return [
            'code'               => [
                'string',
                'min:3',
                'max:3',
                'required',
                'unique:currencies,code,' . request()->route('currency')->id,
            ],
            'name'               => [
                'string',
                'required',
                'unique:currencies,name,' . request()->route('currency')->id,
            ],
            'precision'          => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'symbol'             => [
                'string',
                'required',
            ],
            'thousand_seperator' => [
                'string',
                'nullable',
            ],
            'decimal_mark'       => [
                'string',
                'required',
            ],
        ];
    }
}
