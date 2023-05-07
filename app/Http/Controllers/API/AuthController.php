<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Validator;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(),[

        // ]);/
    }
}
