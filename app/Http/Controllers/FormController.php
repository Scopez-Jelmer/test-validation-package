<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use src\ValidationHelper;

class FormController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => ValidationHelper::validateString(true),
        ]);
        if ($validated) {
            return redirect('/validation-works');
        }
    }
}
