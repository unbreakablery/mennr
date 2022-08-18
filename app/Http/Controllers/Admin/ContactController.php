<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactSave;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $data['savedContacts'] = ContactSave::orderBy('id','DESC')->paginate(20);
        return view('admin.contact.index',$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['contact'] = Contact::where('id',1)->first();
        return view('admin.contact.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email'=> 'email',
        ]);
        $input = $request->all();
        $contact = Contact::where('id',$id)->first();
        $contact->update($input);
        return redirect()->back()->with('message', 'Contact details has been updated successfully');
    }

    public function destroy($id)
    {
        $saveContact = ContactSave::where('id',$id)->first();
        $saveContact->delete();
        return redirect()->back()->with('message', 'Contact has been deleted successfully');
    }
}
