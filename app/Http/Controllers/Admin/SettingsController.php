<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Currency;
use App\Models\Setting;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SettingsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $settings = Setting::all();

        return view('admin.settings.index', compact('settings'));
    }

    public function edit(Setting $setting)
    {
        abort_if(Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $currencies = Currency::all()->pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $setting->load('currency', 'created_by');

        return view('admin.settings.edit', compact('currencies', 'setting'));
    }

    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());

        return redirect()->route('admin.settings.index');
    }
}
