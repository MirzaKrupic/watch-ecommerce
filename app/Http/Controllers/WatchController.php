<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function index()
    {
        $watches = Watch::all()->orderBy('created_at', 'desc')->paginate(20);

        dd($watches);

        return view('home', [
            'watches' => $watches
        ]);
    }
}
