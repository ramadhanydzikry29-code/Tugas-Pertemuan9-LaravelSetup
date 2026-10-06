<?php

namespace App\Http\Controllers;

use App\Models\Course;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = [
            ['label' => 'Email',     'value' => 'dzikry@email.com'],
            ['label' => 'GitHub',    'value' => 'https://github.com/ramadhanydzikry29-code'],
            ['label' => 'Instagram', 'value' => '@nemmomoo'],
        ];

        $courses = Course::all();

        return view('contact', compact('contacts', 'courses'));
    }
}
