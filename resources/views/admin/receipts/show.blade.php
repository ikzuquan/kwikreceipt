@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.receipt.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.receipts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.id') }}
                        </th>
                        <td>
                            {{ $receipt->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.date') }}
                        </th>
                        <td>
                            {{ $receipt->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $receipt->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.phone') }}
                        </th>
                        <td>
                            {{ $receipt->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.address') }}
                        </th>
                        <td>
                            {{ $receipt->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.email') }}
                        </th>
                        <td>
                            {{ $receipt->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.payment_method') }}
                        </th>
                        <td>
                            {{ $receipt->payment_method }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.reference') }}
                        </th>
                        <td>
                            {{ $receipt->reference }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.description') }}
                        </th>
                        <td>
                            {{ $receipt->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.amount') }}
                        </th>
                        <td>
                            {{ $receipt->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.discount') }}
                        </th>
                        <td>
                            {{ $receipt->discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.paid') }}
                        </th>
                        <td>
                            {{ $receipt->paid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.receipt.fields.balance') }}
                        </th>
                        <td>
                            {{ $receipt->balance }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.receipts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection