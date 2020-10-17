<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CurrencyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('currency_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $currencies = Currency::all();

        return view('admin.currencies.index', compact('currencies'));
    }
}
