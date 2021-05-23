<?php

namespace App\Http\Controllers;

use App\Models\config;
use App\Models\RegisterWhitelist;
use App\Models\User;



use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function checkEmail(Request $request){

        $email = $request->get('e');

        $res = User::where("email", $email)->first();
        if($res)
            return "This email has already been registered.";
        
        $res = RegisterWhitelist::where("email", $email)->first();
        if(!$res)
            return "This email has not been invited to the Bryte Business Partner Conference";
        
        return "1";

    }

    public function landingPage(config $config){
        $logo = $config::where("key", "landing_logo")->first();
        $headingColor = $config::where("key", "heading_color")->first();
        $headingContent = $config::where("key", "heading_content")->first();

        $subHeadingColor = $config::where("key", "sub_heading_color")->first();
        $subHeadingContent = $config::where("key", "sub_heading_content")->first();
        $mainContent = $config::where("key", "main_content")->first();



        //dd($bg->value);
        return view('auth.register', [
            'logo' => $logo,
            'headingColor' => $headingColor,
            'headingContent' => $headingContent,
            'subHeadingColor' => $subHeadingColor,
            'subHeadingContent' => $subHeadingContent,
            'mainContent' => $mainContent,



        ]);
    }

    public function breakawayRoom(config $config)
    {
        $bg = $config::where("key", "general_background")->first();
        //dd($bg->value);
        return view('breakaway', [
            'bg' => $bg
        ]);
    }

    public function exhibitionHallTest($stands){
        return view('exhibition_layouts.'.$stands);
    }

    public function exhibitionHall(config $config){
        $stands = $config::where("key", "exhibition_size")->first();
        return view('exhibition_layouts.'.$stands->value);
    }

    public function mainLobby(config $config){
        $room_one_name = $config::where("key", "room_one_name")->first();
        $room_two_name = $config::where("key", "room_two_name")->first();
        $room_three_name = $config::where("key", "room_three_name")->first();
        $room_four_name = $config::where("key", "room_four_name")->first();
        $room_five_name = $config::where("key", "room_five_name")->first();


        $left_banner = $config::where("key", "left_banner")->first();
        $right_banner = $config::where("key", "right_banner")->first();
        $middle_banner = $config::where("key", "middle_banner")->first();




        return view('lobby2', [
            'room_one_name' => $room_one_name,
            'room_two_name' => $room_two_name,
            'room_three_name' => $room_three_name,
            'room_four_name' => $room_four_name,
            'room_five_name' => $room_five_name,
            'left_banner' => $left_banner,
            'right_banner' => $left_banner,
            'middle_banner' => $middle_banner,
        ]);
    }
}
