@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.setting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Setting">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.tel') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.fax') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.currency') }}
                        </th>
                        <th>
                            {{ trans('cruds.currency.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.receipt_prefix') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.number_digit') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.next_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.notes') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($settings as $key => $setting)
                        <tr data-entry-id="{{ $setting->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $setting->id ?? '' }}
                            </td>
                            <td>
                                {{ $setting->company_name ?? '' }}
                            </td>
                            <td>
                                {{ $setting->address ?? '' }}
                            </td>
                            <td>
                                {{ $setting->tel ?? '' }}
                            </td>
                            <td>
                                {{ $setting->email ?? '' }}
                            </td>
                            <td>
                                {{ $setting->fax ?? '' }}
                            </td>
                            <td>
                                {{ $setting->currency->code ?? '' }}
                            </td>
                            <td>
                                {{ $setting->currency->name ?? '' }}
                            </td>
                            <td>
                                {{ $setting->receipt_prefix ?? '' }}
                            </td>
                            <td>
                                {{ $setting->number_digit ?? '' }}
                            </td>
                            <td>
                                {{ $setting->next_number ?? '' }}
                            </td>
                            <td>
                                {{ $setting->notes ?? '' }}
                            </td>
                            <td>

                                @can('setting_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.settings.edit', $setting->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan


                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Setting:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection