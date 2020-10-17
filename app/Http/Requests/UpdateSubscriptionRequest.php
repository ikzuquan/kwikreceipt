<?php

namespace App\Http\Requests;

use App\Models\Subscription;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSubscriptionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('subscription_edit');
    }

    public function rules()
    {
        return [
            'payment_gateway' => [
                'string',
                'required',
            ],
            'price'           => [
                'numeric',
                'required',
            ],
            'start_date'      => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date'        => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
        ];
    }
}