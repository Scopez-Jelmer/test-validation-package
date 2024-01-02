<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use src\ValidationHelper;

class FormController extends Controller
{
    public function store(Request $request)
    {
        var_dump($request);
        die();
        $validated = $request->validate([
            'name' => ValidationHelper::validateString(true),
            'age'  => ValidationHelper::validateInteger(true),
            // 'happiness' => ValidationHelper::validateBoolean(true),
        ]);

        if ($validated) {
            return redirect('/validation-works');
        }
    }
}
