<?php

namespace App\Http\Requests;

use App\Models\Receipt;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateReceiptRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('receipt_edit');
    }

    public function rules()
    {
        return [
            'customer_name'  => [
                'string',
                'required',
            ],
            'phone'          => [
                'string',
                'nullable',
            ],
            'date'           => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'payment_method' => [
                'string',
                'required',
            ],
            'reference'      => [
                'string',
                'nullable',
            ],
            'description'    => [
                'required',
            ],
            'amount'         => [
                'numeric',
                'required',
                'min:0',
            ],
            'discount'       => [
                'numeric',
            ],
            'paid'           => [
                'numeric',
                'required',
            ],
            'balance'        => [
                'numeric',
                'required',
            ],
        ];
    }
}
