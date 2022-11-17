<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookingController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'bookings' => Booking::query()->orderBy('date', 'desc')->get()
        ]);
    }
}
