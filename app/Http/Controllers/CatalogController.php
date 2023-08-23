<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function show()
    {
        return view('app.catalog', ['clothes' => Clothes::all()]);
    }
}
