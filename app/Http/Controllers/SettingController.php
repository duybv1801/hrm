<?php

namespace App\Http\Controllers;

use App\Services\SettingService;
use App\Http\Requests\UpdateSettingRequest;


class SettingController extends Controller
{
    protected $settingService;

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    public function index()
    {
        $settings = $this->settingService->getAllSettings();
        $keyLabels = trans('setting');
        return view('setting.setting', compact('settings', 'keyLabels'));
    }

    public function update(UpdateSettingRequest $request)
    {
        $data = $request->except('_token');
        $this->settingService->updateSettings($data);

        return redirect()->route('settings.index')->with('success', 'Cập nhật thành công');
    }
}
