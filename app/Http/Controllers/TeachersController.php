<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function add_teacher(Request $request)
    {
        $table = new Teachers();
        $table->name = $request->name();
        $table->email = $request->email();
        $table->address = $request->address();
        $table->password = $request->password();
        $table->save();
    }
}
