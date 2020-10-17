<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyReceiptRequest;
use App\Http\Requests\StoreReceiptRequest;
use App\Http\Requests\UpdateReceiptRequest;
use App\Models\Receipt;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ReceiptsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('receipt_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Receipt::with(['created_by'])->select(sprintf('%s.*', (new Receipt)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'receipt_show';
                $editGate      = 'receipt_edit';
                $deleteGate    = 'receipt_delete';
                $crudRoutePart = 'receipts';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('customer_name', function ($row) {
                return $row->customer_name ? $row->customer_name : "";
            });
            $table->editColumn('amount', function ($row) {
                return $row->amount ? $row->amount : "";
            });
            $table->editColumn('balance', function ($row) {
                return $row->balance ? $row->balance : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.receipts.index');
    }

    public function create()
    {
        abort_if(Gate::denies('receipt_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.receipts.create');
    }

    public function store(StoreReceiptRequest $request)
    {
        $receipt = Receipt::create($request->all());

        return redirect()->route('admin.receipts.index');
    }

    public function edit(Receipt $receipt)
    {
        abort_if(Gate::denies('receipt_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $receipt->load('created_by');

        return view('admin.receipts.edit', compact('receipt'));
    }

    public function update(UpdateReceiptRequest $request, Receipt $receipt)
    {
        $receipt->update($request->all());

        return redirect()->route('admin.receipts.index');
    }

    public function show(Receipt $receipt)
    {
        abort_if(Gate::denies('receipt_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $receipt->load('created_by');

        return view('admin.receipts.show', compact('receipt'));
    }

    public function destroy(Receipt $receipt)
    {
        abort_if(Gate::denies('receipt_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $receipt->delete();

        return back();
    }

    public function massDestroy(MassDestroyReceiptRequest $request)
    {
        Receipt::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
