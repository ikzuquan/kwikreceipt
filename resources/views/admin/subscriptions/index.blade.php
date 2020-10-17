@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.subscription.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Subscription">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.payment_gateway') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.end_date') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subscriptions as $key => $subscription)
                        <tr data-entry-id="{{ $subscription->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $subscription->id ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->payment_gateway ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->price ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->end_date ?? '' }}
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
  let table = $('.datatable-Subscription:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection