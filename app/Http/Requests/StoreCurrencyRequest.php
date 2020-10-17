<?php

namespace App\Http\Requests;

use App\Models\Currency;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCurrencyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('currency_create');
    }

    public function rules()
    {
        return [
            'code'               => [
                'string',
                'min:3',
                'max:3',
                'required',
                'unique:currencies',
            ],
            'name'               => [
                'string',
                'required',
                'unique:currencies',
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
