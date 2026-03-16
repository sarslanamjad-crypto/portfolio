<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;

class AdminPartnersController extends Controller
{
    public function index()
    {
        $Name = session('first_name') . " " . session('last_name');
        return view('backend.partners', ['partners' => Partner::all(), 'Name' => $Name]);
    }

    public function addPartner()
    {
        $Name = session('first_name') . " " . session('last_name');
        return view('backend.partner-add', ['Name' => $Name]);
    }

    public function submitPartnerRecord(Request $request)
    {
        $request->validate([
            'name' => 'nullable|min:2',
            'image' => 'required|mimes:jpeg,jpg,png,gif,svg|max:10000',
        ]);

        $ImageName = 'partner_' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('backend/images/partners'), $ImageName);

        Partner::create([
            'name' => $request->name,
            'image' => $ImageName
        ]);

        return back()->withSuccess('Partner/Client Record Added Successfully');
    }

    public function editPartner($id)
    {
        $partner = Partner::findOrFail($id);
        $Name = session('first_name') . " " . session('last_name');
        return view('backend.partner-edit', ['partner' => $partner, 'Name' => $Name]);
    }

    public function updatePartner(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|min:2',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif,svg|max:10000',
        ]);

        $partner = Partner::findOrFail($id);

        if ($request->hasFile('image')) {
            $ImageName = 'partner_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('backend/images/partners'), $ImageName);
            $partner->image = $ImageName;
        }

        $partner->name = $request->name;
        $partner->save();

        return back()->withSuccess('Partner/Client Record Updated Successfully');
    }

    public function deletePartner($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return back()->withSuccess('Partner Record Deleted Successfully');
    }
}
