<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function showForm() {
        return view('custom_form');
    }

     public function submitForm(Request $request) {
       $validated = $request->validate([
        full_name => 'required|string|max:255',
        email     =>'required|string',
        mobile     =>'required|string|max:10',
        address     =>'required|string',
        dob     =>'required|string',
        course     =>'required|string',
        university     =>'required|string',
        passport     =>'required|string',
       ]);

       custom_form_data::create($validated);

       Mail::to('admin@gmail.com')->send(new AdminNotice($validated));
        Mail::to($validated(email))->send(new userNotice ($validated));

        return back()-with('success' 'Form is submitted succesfully')
    }
}
