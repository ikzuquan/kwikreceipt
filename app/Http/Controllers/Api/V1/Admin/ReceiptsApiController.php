<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReceiptRequest;
use App\Http\Requests\UpdateReceiptRequest;
use App\Http\Resources\Admin\ReceiptResource;
use App\Models\Receipt;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReceiptsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('receipt_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ReceiptResource(Receipt::with(['created_by'])->get());
    }

    public function store(StoreReceiptRequest $request)
    {
        $receipt = Receipt::create($request->all());

        return (new ReceiptResource($receipt))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Receipt $receipt)
    {
        abort_if(Gate::denies('receipt_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ReceiptResource($receipt->load(['created_by']));
    }

    public function update(UpdateReceiptRequest $request, Receipt $receipt)
    {
        $receipt->update($request->all());

        return (new ReceiptResource($receipt))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Receipt $receipt)
    {
        abort_if(Gate::denies('receipt_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $receipt->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
