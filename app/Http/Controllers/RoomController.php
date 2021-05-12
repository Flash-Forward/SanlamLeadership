<?php

namespace App\Http\Controllers;

use App\Models\config;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function breakawayRoom(config $config)
    {
        $bg = $config::where("key", "general_background")->first();
        //dd($bg->value);
        return view('breakaway', [
            'bg' => $bg
        ]);
    }
}
