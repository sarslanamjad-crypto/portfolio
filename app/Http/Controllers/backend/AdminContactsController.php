<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactsController extends Controller
{
    // basic session-based protection used elsewhere in this project
    public function index(Request $request)
    {
        // assuming admin session is 'admin'
        if (!$request->session()->has('admin')) {
            return redirect('/admin/login');
        }

        $contacts = Contact::orderBy('created_at', 'desc')->paginate(20);
        return view('backend.contacts.index', compact('contacts'));
    }

    public function show(Request $request, $id)
    {
        if (!$request->session()->has('admin')) {
            return redirect('/admin/login');
        }

        $contact = Contact::findOrFail($id);
        // mark as read
        if (!$contact->read) {
            $contact->read = true;
            $contact->save();
        }

        return view('backend.contacts.show', compact('contact'));
    }

    public function destroy(Request $request, $id)
    {
        if (!$request->session()->has('admin')) {
            return redirect('/admin/login');
        }

        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted');
    }
}
