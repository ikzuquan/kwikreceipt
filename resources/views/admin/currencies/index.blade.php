@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.currency.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Currency">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.currency.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.currency.fields.code') }}
                        </th>
                        <th>
                            {{ trans('cruds.currency.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.currency.fields.enabled') }}
                        </th>
                        <th>
                            {{ trans('cruds.currency.fields.precision') }}
                        </th>
                        <th>
                            {{ trans('cruds.currency.fields.symbol') }}
                        </th>
                        <th>
                            {{ trans('cruds.currency.fields.symbol_first') }}
                        </th>
                        <th>
                            {{ trans('cruds.currency.fields.thousand_seperator') }}
                        </th>
                        <th>
                            {{ trans('cruds.currency.fields.decimal_mark') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($currencies as $key => $currency)
                        <tr data-entry-id="{{ $currency->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $currency->id ?? '' }}
                            </td>
                            <td>
                                {{ $currency->code ?? '' }}
                            </td>
                            <td>
                                {{ $currency->name ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $currency->enabled ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $currency->enabled ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $currency->precision ?? '' }}
                            </td>
                            <td>
                                {{ $currency->symbol ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $currency->symbol_first ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $currency->symbol_first ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $currency->thousand_seperator ?? '' }}
                            </td>
                            <td>
                                {{ $currency->decimal_mark ?? '' }}
                            </td>
                            <td>



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
  let table = $('.datatable-Currency:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection