@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.setting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.id') }}
                        </th>
                        <td>
                            {{ $setting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.company_name') }}
                        </th>
                        <td>
                            {{ $setting->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.address') }}
                        </th>
                        <td>
                            {{ $setting->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.tel') }}
                        </th>
                        <td>
                            {{ $setting->tel }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.email') }}
                        </th>
                        <td>
                            {{ $setting->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.fax') }}
                        </th>
                        <td>
                            {{ $setting->fax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.currency') }}
                        </th>
                        <td>
                            {{ $setting->currency->code ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.receipt_prefix') }}
                        </th>
                        <td>
                            {{ $setting->receipt_prefix }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.number_digit') }}
                        </th>
                        <td>
                            {{ $setting->number_digit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.next_number') }}
                        </th>
                        <td>
                            {{ $setting->next_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.notes') }}
                        </th>
                        <td>
                            {{ $setting->notes }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection