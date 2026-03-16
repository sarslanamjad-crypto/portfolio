<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;

class AdminSettingsController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        $Name = session('first_name') . " " . session('last_name');
        return view('backend.settings', ['settings' => $settings, 'Name' => $Name]);
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token']);
        
        $imageFields = ['profile_image', 'sidebar_image'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $image = $request->file($field);
                $filename = time() . '_' . $field . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('backend/images/settings'), $filename);
                $data[$field] = 'backend/images/settings/' . $filename;
            }
        }

        foreach ($data as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return back()->withSuccess('Settings Updated Successfully');
    }
}
