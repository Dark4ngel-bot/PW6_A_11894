<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use Illuminate\Http\Request;

class IphoneController extends Controller
{
    public function index() {
        $iphone = Iphone::get();

        return view( 'iphone', data: compact( 'iphones'));
    }
}
