<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Handle the form submission (e.g., save to database)
        $name = $request->input('name');

        // Redirect back with success message
        return redirect()->route('form.show')->with('success', 'Form submitted successfully without CSRF protection!');
    }
}
