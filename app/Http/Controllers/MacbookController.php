<?php

namespace App\Http\Controllers;

use App\Models\Macbook;
use Illuminate\Http\Request;

class MacbookController extends Controller
{
    public function index() {
        $macbook = Macbook::get();

        return view( 'macbook', data: compact( 'macbooks'));
    }
}
