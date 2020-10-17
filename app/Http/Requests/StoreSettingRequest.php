<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('setting_create');
    }

    public function rules()
    {
        return [
            'company_name'   => [
                'string',
                'required',
            ],
            'address'        => [
                'required',
            ],
            'tel'            => [
                'string',
                'required',
            ],
            'fax'            => [
                'string',
                'nullable',
            ],
            'currency_id'    => [
                'required',
                'integer',
            ],
            'receipt_prefix' => [
                'string',
                'required',
            ],
            'number_digit'   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'next_number'    => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
