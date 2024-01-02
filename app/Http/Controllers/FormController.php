<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            // 'iets' => 'required',
        ]);
        // dd($validated);
        if ($validated) {
            return redirect('/validation-works');
        }
        die();
    }
}
