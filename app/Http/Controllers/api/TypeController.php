<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        return response(ProductType::all(), 200);
    }
}
