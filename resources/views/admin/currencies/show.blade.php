@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.currency.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.currencies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.currency.fields.id') }}
                        </th>
                        <td>
                            {{ $currency->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currency.fields.code') }}
                        </th>
                        <td>
                            {{ $currency->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currency.fields.name') }}
                        </th>
                        <td>
                            {{ $currency->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currency.fields.enabled') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $currency->enabled ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currency.fields.precision') }}
                        </th>
                        <td>
                            {{ $currency->precision }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currency.fields.symbol') }}
                        </th>
                        <td>
                            {{ $currency->symbol }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currency.fields.symbol_first') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $currency->symbol_first ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currency.fields.thousand_seperator') }}
                        </th>
                        <td>
                            {{ $currency->thousand_seperator }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.currency.fields.decimal_mark') }}
                        </th>
                        <td>
                            {{ $currency->decimal_mark }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.currencies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection