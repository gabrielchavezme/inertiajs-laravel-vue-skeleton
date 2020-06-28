<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HelloController extends Controller
{
    public function hello()
    {
        return Inertia::render('Hello', [
            'foo' => 'bar'
        ]);
    }
}
