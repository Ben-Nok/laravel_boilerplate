<?php

namespace App\Http\Controllers;


class ExampleController extends Controller
{
    public function show(): string
    {
        return response()->json(['message' => 'Hello World!']);
    }
}
