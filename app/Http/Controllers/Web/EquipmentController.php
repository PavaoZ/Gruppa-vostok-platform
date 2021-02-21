<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index() {
        return view('layouts.web.content.equipment.equipment');
    }
}
