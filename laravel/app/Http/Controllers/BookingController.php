<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request) {
        $name = $request->input('name');
    }

    public function update(Request $request, string $id) {
        $name = $request->input('name');
    }
}
