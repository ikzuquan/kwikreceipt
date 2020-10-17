<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSettingRequest;
use App\Http\Resources\Admin\SettingResource;
use App\Models\Setting;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SettingsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SettingResource(Setting::with(['currency', 'created_by'])->get());
    }

    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());

        return (new SettingResource($setting))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
