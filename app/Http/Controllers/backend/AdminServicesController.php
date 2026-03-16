<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class AdminServicesController extends Controller
{
    public function index()
    {
        $Name = session('first_name') . " " . session('last_name');
        return view('backend.services', ['services' => Service::all(), 'Name' => $Name]);
    }

    public function addService()
    {
        $Name = session('first_name') . " " . session('last_name');
        return view('backend.service-add', ['Name' => $Name]);
    }

    public function submitServiceRecord(Request $request)
    {
        $request->validate([
            'icon_class' => 'required|min:2',
            'title' => 'required|min:3',
            'description' => 'required|min:10',
        ]);

        Service::create($request->all());
        return back()->withSuccess('Service Record Added Successfully');
    }

    public function editService($id)
    {
        $service = Service::findOrFail($id);
        $Name = session('first_name') . " " . session('last_name');
        return view('backend.service-edit', ['service' => $service, 'Name' => $Name]);
    }

    public function updateService(Request $request, $id)
    {
        $request->validate([
            'icon_class' => 'required|min:2',
            'title' => 'required|min:3',
            'description' => 'required|min:10',
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->all());
        return back()->withSuccess('Service Record Updated Successfully');
    }

    public function deleteService($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return back()->withSuccess('Service Record Deleted Successfully');
    }
}
