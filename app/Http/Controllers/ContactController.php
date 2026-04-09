<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts=Contact::all();
        return view('index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
        public function create()
        {
            return view('create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {   
            $validated=$request->validate([
            "nom_du_contact"=>'required|string|max:250',
            "email"=>'required|string|max:200',
            "telephone"=>'required|string|max:20'
            ]);
            Contact::create($validated);
            return redirect()->route('contacts.index');




        }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $data=Contact::findOrFail($id);

    return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $contact_modif = Contact::findOrFail($id);

        $validated = $request->validate([
            "nom_du_contact"=>'required|string|max:250',
            "email"=>'required|string|max:200',
            "telephone"=>'required|string|max:20'
            ]);

            $contact_modif->update($validated);

            return redirect()->route('contacts.index');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
