<?php

namespace App\Http\Controllers;

use App\Events\OrderShipmentStatusUpdated;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
       OrderShipmentStatusUpdated::dispatch('hello event');
    }
}
