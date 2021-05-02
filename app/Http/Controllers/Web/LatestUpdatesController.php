<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LatestUpdatesController extends Controller
{
    public function index() {
        return view('layouts.web.content.latest_updates.latest_updates');
    }
}
