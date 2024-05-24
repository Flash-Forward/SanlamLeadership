<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use App\Models\config;
use App\Models\RegisterWhitelist;
use App\Models\User;
use App\Models\Exhibitor;
use App\Models\Speaker;

use App\Classes\ClickMeetingRestClient;


define('NO_IMAGE', url('/').'/img/schedule/nopic.png');
define ('SHOW_EXPAND_HELP', false);


use Illuminate\Http\Request;

class RoomController extends Controller
{

	public $rows =	[
		'title' => '',
		'days' =>
		[
			//Day 1:
			[
				'session_title'		=> 'Lexis Internal Launch', 	//should not be mandatory
				'date'				=> '2022-06-21',	//required - let's us know which tab it should be placed in
				'sessions'			=>
				[
					[	//Break 1
						'title'			=> 'EXHIBITION HALL OPEN',
						'image'			=> '/img/schedule/seal-01.jpg',
						'start_time'	=> '07:00',
						'end_time'		=> '00:00',
						'interval'		=>	true,
						'alert'         => true,
						'route'         => 'exhibition',
						'route_time'         => 'room_two_open_time'


					],
					[	//Break 1
						'title'			=> 'NETWORKING LOUNGES OPEN',
						'image'			=> '/img/schedule/seal-01.jpg',
						'start_time'	=> '07:00',
						'end_time'		=> '00:00',
						'interval'		=>	true,
						'alert'         => true,
						'route'         => 'networking',
						'route_time'         => 'room_five_open_time'
					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session1.png',
						'start_time'	=> '09:00',
						'end_time'		=> '09:10',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Welcoming',
													'room_info'		=> 	'Welcoming',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/sanlam.webp',
															'name'			=> 'Luna Sibanyoni', 
															'designation'	=> 'SSF: Strategic Implementation'																					
														], 


													]
												],
						]
												
					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session2.png',
						'start_time'	=> '09:10',
						'end_time'		=> '09:30',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Strategy Review - Sanlam Group Strategy',
													'room_info'		=> 	'Strategy Review - Sanlam Group Strategy',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/paul.png',
															'name'			=> 'Paul Hanratty', 
															'designation'	=> 'Sanlam Group Chief Executive Officer'																					
														],
														 


													]
												],
						]

					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session3.png',
						'start_time'	=> '09:30',
						'end_time'		=> '10:15',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Strategy Review - Business Unit Strategies',
													'room_info'		=> 	'Strategy Review - Business Unit Strategies',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/paul.png',
															'name'			=> 'Paul Hanratty', 
															'designation'	=> 'Sanlam Group Chief Executive Officer'																					
														],
														[
															'pic'			=> '/img/schedule/profile/kan.png',
															'name'			=> 'Kanyisa Mkhize', 
															'designation'	=> 'Chief Executive: Sanlam Corporate'																					
														],
														[
															'pic'			=> '/img/schedule/profile/ant.png',
															'name'			=> 'Anton Gildenhuys', 
															'designation'	=> 'Chief Executive: Retail Affluent'																					
														],
														[
															'pic'			=> '/img/schedule/profile/bon.png',
															'name'			=> 'Bongani Madikiza', 
															'designation'	=> 'Chief Executive: SA Retail Mass'																					
														],
														[
															'pic'			=> '/img/schedule/profile/carl.png',
															'name'			=> 'Carl Roothman', 
															'designation'	=> 'Chief Executive: Sanlam Investment Group'																					
														],
														[
															'pic'			=> '/img/schedule/profile/hei.png',
															'name'			=> 'Heinie Werth', 
															'designation'	=> 'Chief Executive: Sanlam Emerging Markets'																					
														],
														[
															'pic'			=> '/img/schedule/profile/tava.png',
															'name'			=> 'Tavaziva Madzinga', 
															'designation'	=> 'Chief Executive: Santam'																					
														],


													]
												],
						]

					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session4.png',
						'start_time'	=> '10:15',
						'end_time'		=> '10:20',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Growing our People',
													'room_info'		=> 	'Growing our People',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/sanlam.webp',
															'name'			=> 'Portia Mogale', 
															'designation'	=> 'Head: Change Management • Santam: Human Resources'																					
														], 


													]
												],
						]

					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session5.png',
						'start_time'	=> '10:20',
						'end_time'		=> '11:00',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Growing our People - Investing in our People and Culture',
													'room_info'		=> 	'Growing our People - Investing in our People and Culture',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/sanlam.webp',
															'name'			=> 'Jeanett Modise', 
															'designation'	=> 'Sanlam Group Human Capital Director'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/khw.png',
															'name'			=> 'Khwathelani Tshikovh', 
															'designation'	=> 'Head: Santam Experience Senior Management'																					
														],
														[
															'pic'			=> '/img/schedule/profile/gaf.png',
															'name'			=> 'Gaffar Hassam', 
															'designation'	=> 'Regional Executive SEM'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/dum.png',
															'name'			=> 'Dumisani Gumbi', 
															'designation'	=> 'Governance Architect SGT'																					
														], 



													]
												],
												
												
											]
					],
					[	//Break 2
						'title'			=> 'break',
						'image'			=> '/img/schedule/seal-01.jpg',
						'start_time'	=> '11:00',
						'end_time'		=> '11:25',
						'route_time'	=> '11:25',
						'route'	=> 'networking',


						'interval'		=>	true
					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session6.png',
						'start_time'	=> '11:25',
						'end_time'		=> '11:30',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Growing our Communities & Environment',
													'room_info'		=> 	'Growing our Communities & Environment',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/sanlam.webp',
															'name'			=> 'Karima Midra', 
															'designation'	=> 'Communication Digital Manager, Santam'																					
														], 



													]
												],
												
												
											]
					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session7.png',
						'start_time'	=> '11:30',
						'end_time'		=> '12:10',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Growing our Communities & Environment - Foundation Showcase',
													'room_info'		=> 	'Growing our Communities & Environment - Foundation Showcase',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/noz.png',
															'name'			=> 'Nozizwe Vundla', 
															'designation'	=> 'Head: Sanlam Foundation'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/aic.png',
															'name'			=> 'Aicha Lebsir', 
															'designation'	=> 'Head Ennajah Foundation (Saham)'																					
														], 



													]
												],
												
												
											]
					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session8.png',
						'start_time'	=> '12:10',
						'end_time'		=> '13:00',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Growing our Communities & Environment - Living Our Purpose',
													'room_info'		=> 	'Growing our Communities & Environment - Living Our Purpose',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/tin.png',
															'name'			=> 'Tinyiko Ribisi', 
															'designation'	=> 'Chief Legal Officer: Santam Limited Group'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/the.png',
															'name'			=> 'Thabiso Rulashe', 
															'designation'	=> 'Group Strategic & Market Intelligence Manager'																					
														],
														[
															'pic'			=> '/img/schedule/profile/teb.png',
															'name'			=> 'Teboho Makhabane', 
															'designation'	=> 'ESG & Impact Implementation Specialist: Sanlam Investment Group'																					
														],
														[
															'pic'			=> '/img/schedule/profile/sanlam.webp',
															'name'			=> 'Mark Moorhouse', 
															'designation'	=> 'Head of Infrastructure Finance • SSF: Equities & Debt: Debt'																					
														],
														[
															'pic'			=> '/img/schedule/profile/and.png',
															'name'			=> 'Andrew Johnstone', 
															'designation'	=> 'CEO Climate Fund Managers'																					
														], 



													]
												],
												
												
											]
					],
					[	//Break 2
						'title'			=> 'break',
						'image'			=> '/img/schedule/seal-01.jpg',
						'start_time'	=> '13:00',
						'end_time'		=> '13:45',
						'route_time'	=> '11:25',
						'route'	=> 'networking',


						'interval'		=>	true
					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session9.png',
						'start_time'	=> '13:45',
						'end_time'		=> '13:50',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Growing Our Business',
													'room_info'		=> 	'Growing Our Business',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/sanlam.webp',
															'name'			=> 'Atang Matebesi', 
															'designation'	=> 'Senior Consultant • Group: Group Strategy'																					
														], 




													]
												],
												
												
											]
					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session10.png',
						'start_time'	=> '13:50',
						'end_time'		=> '14:40',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Growing Our Business - Partnership for growth',
													'room_info'		=> 	'Growing Our Business - Partnership for growth',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/nat.png',
															'name'			=> 'Natalie Jabangwe', 
															'designation'	=> 'Group Digital Transformation Officer, Sanlam Group'																					
														],
														[
															'pic'			=> '/img/schedule/profile/sanlam.webp',
															'name'			=> 'Charles Savage', 
															'designation'	=> 'CEO Easy Equities'																					
														],
														[
															'pic'			=> '/img/schedule/profile/bur.png',
															'name'			=> 'Burton Naicker', 
															'designation'	=> 'CEO MiWay'																					
														],
														[
															'pic'			=> '/img/schedule/profile/pie.png',
															'name'			=> 'Piet van Der Walt', 
															'designation'	=> 'Business Head: Sanlam Retail Credit'																					
														],
														[
															'pic'			=> '/img/schedule/profile/edw.png',
															'name'			=> 'Edwin Theron', 
															'designation'	=> 'Head: Sanlam Indie'																					
														],
														[
															'pic'			=> '/img/schedule/profile/nee.png',
															'name'			=> 'Neelan Narasimulu', 
															'designation'	=> 'Head: Multi Data'																					
														],






													]
												],
												
												
											]
					],

					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session11.png',
						'start_time'	=> '14:40',
						'end_time'		=> '15:25',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Growing Our Business - MTN Partnership',
													'room_info'		=> 	'Growing Our Business - MTN Partnership',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/ger.png',
															'name'			=> 'Gerrit Van Heerde', 
															'designation'	=> 'Executive: Strategic Ventures, Sanlam Pan Africa Life'																					
														], 

														[
															'pic'			=> '/img/schedule/profile/ser.png',
															'name'			=> 'Serigne Dioum', 
															'designation'	=> 'Chief Digital and Fintech Officer, MTN Group'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/sanlam.webp',
															'name'			=> 'Ebenezer Asante', 
															'designation'	=> 'Senior Vice President, Markets. MTN Group'																					
														],
														[
															'pic'			=> '/img/schedule/profile/mar.png',
															'name'			=> 'Marius Botha', 
															'designation'	=> 'CEO, aYo Holdings'																					
														],





													]
												],
												
												
											]
					],
					[	//Break 2
						'title'			=> 'break',
						'image'			=> '/img/schedule/seal-01.jpg',
						'start_time'	=> '15:25',
						'end_time'		=> '15:50',
						'route_time'	=> '11:25',
						'route'	=> 'networking',


						'interval'		=>	true
					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session12.png',
						'start_time'	=> '15:50',
						'end_time'		=> '16:30',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'Growing Our Business - Allianz Partnership',
													'room_info'		=> 	'Growing Our Business - Allianz Partnership',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/tha.png',
															'name'			=> 'Thabied Majal', 
															'designation'	=> 'Group Executive: Corporate Affairs and Services of Sanlam Emerging Markets'																					
														], 

														[
															'pic'			=> '/img/schedule/profile/hei.png',
															'name'			=> 'Heinie Werth', 
															'designation'	=> 'CEO Sanlam Emerging Markets'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/tava.png',
															'name'			=> 'Tavaziva Madzinga', 
															'designation'	=> 'CEO Santam'																					
														],
														[
															'pic'			=> '/img/schedule/profile/chr.png',
															'name'			=> 'Christopher Townsend', 
															'designation'	=> 'Member of the Board of Management Allianz SE, Global Insurance Lines, Anglophone markets, Reinsurance, ME/A'																					
														],
														[
															'pic'			=> '/img/schedule/profile/del.png',
															'name'			=> 'Delphine Traore', 
															'designation'	=> 'Regional CEO, Allianz Africa'																					
														],





													]
												],
												
												
											]
					],
					[	//Row 2
						'title'			=> 'Welcome',
						'image'			=> '/img/schedule/session13.png',
						'start_time'	=> '16:30',
						'end_time'		=> '16:50',
						'interval'		=>	false,
						'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
												[	//Room 1 - Claims
													'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
													'room_desc'		=> 	'CEO Closing remarks',
													'room_info'		=> 	'CEO Closing remarks',
													'link'			=>	'/mainmid',
													'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/paul.png',
															'name'			=> 'Paul Hanratty', 
															'designation'	=> 'Sanlam Group Chief Executive'																					
														], 




													]
												],
												
												
											]
					],

					
					
					
									


				
				]
			],
			
		]
	];
    
	public function storeSchedule(){
		$data = json_encode($this->rows);
		$config = Config::create([
			'key' => 'schedule_data',
			'value' => $data,
		]);
	}
	public function checkRoom(Request $request){
		date_default_timezone_set('Africa/Johannesburg');
        $room = $request->get('r');
		$time = Config::where("key", $room)->first()->value;
		if (date('H:i') >= date('H:i', strtotime($time)))
			return "1";
		return $time;
	}

	public function contenthub(){
		return view('contenthub');
	}

	public function instructions(Request $request){
		$message = Config::where("key", "popup_message")->first()->value;
		$redirect = Config::where("key", "redirect")->first()->value;

		$retObj["message"] = $message;
		$retObj["redirect"] = $redirect;

        return response()->json($retObj);

	}
	
	public function openLogin(Request $request){
        $data = $request->all();
		$user = User::where('email', $data['email'])->first();
		if(!$user){
			$user = User::create([
				'name' => $data['name'] . " " . $data['last_name'],
				'email' => $data['email'],
				'password' => "test",
				'position' => "test",
				'company' => "test",
				'contact_no' => "test",
				'extra' => "{}",
				'user_roles_id' => 2,
			]);
		}
		// if($user->user_roles_id == 2){
		// 	\Session::put('status', 1);
		// 	return redirect()->route('login');
		// }else{
		// 	\Auth::login($user, true);
		// 	return redirect()->route('lobby');
		// }
		\Auth::login($user, true);
		return redirect()->route('lobby');


	}

	public function login(config $config){
        $type = $config::where("key", "login_type")->first();
        $banner = $config::where("key", "login_banner")->first();
        $bg = $config::where("key", "login_background")->first();
		$whitelist_switch = $config::where("key", "whitelist_switch")->first();
		
		switch($type->value){
			case "OPEN":
				return view('auth.openLogin', [
					'banner' => $banner,
					'bg' => $bg,
					'whitelist_switch' => $whitelist_switch,
				]);
				break;
			case "CLOSED":
				return view('auth.login3', [
					'banner' => $banner,
					'bg' => $bg,
				]);

				break;
		}

	}

	public function zoomSignature(Request $request){
		// fill in your API Secret (probably from the JWT, not the SDK!)
		$apiSecret 		= 'nMJw9p3dm8o9xIKc7ukD6WJcv1EfRn2u2Bgy';

		// if you're passing in a JSON object, decode it first
		$meetingData 	= json_decode(file_get_contents('php://input'), true);
		//$meetingData = $request->all();

		// Make sure your variable names match; ex. "mn" and not "meetingNumber"
		$apiKey 		= isset( $meetingData['meetingData']['apiKey'] ) 		? $meetingData['meetingData']['apiKey'] 		: '';
		$meetingNumber 	= isset( $meetingData['meetingData']['meetingNumber'] ) ? $meetingData['meetingData']['meetingNumber'] 	: '';
		$role 			= isset( $meetingData['meetingData']['role'] ) 			? $meetingData['meetingData']['role'] 			: '';

		  //Set the timezone to UTC
		  date_default_timezone_set("UTC");

		  $time = time() * 1000 - 30000;//time in milliseconds (or close enough)
		  
		  $data = base64_encode($apiKey . $meetingNumber . $time . $role);
		  
		  $hash = hash_hmac('sha256', $data, $apiSecret, true);
		  
		  $_sig = $apiKey . "." . $meetingNumber . "." . $time . "." . $role . "." . base64_encode($hash);
		  
		  //return signature, url safe base64 encoded
		  print rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
	}

    public function checkEmail(Request $request){

        $email = $request->get('e');

        if($email == "")
            return "Email field is empty.";

        $res = User::where("email", $email)->first();
        if($res)
            return "This email has already been registered.";
        
        $res = RegisterWhitelist::where("email", $email)->first();
        if(!$res)
            return "This email does not appear to be on the invite list. Please contact the Group Events Team on groupevents@sanlam.co.za";
        
        return "1";

    }

    public function landingPage(config $config){
        $bgL = $config::where("key", "landing_background")->first();
        $bgC = $config::where("key", "landing_container")->first();
        $regStatus = $config::where("key", "reg_status")->first();



        $logo = $config::where("key", "landing_logo")->first();
        $headingColor = $config::where("key", "heading_color")->first();
        $headingContent = $config::where("key", "heading_content")->first();

        $conColor = $config::where("key", "con_color")->first();


        $subHeadingColor = $config::where("key", "sub_heading_color")->first();
        $subHeadingContent = $config::where("key", "sub_heading_content")->first();
        $mainContent = $config::where("key", "main_content")->first();

        $subHeadingColor = $config::where("key", "sub_heading_color")->first();

        $primColor = $config::where("key", "primary_color")->first();
        $secColor = $config::where("key", "secondary_color")->first();



       
        return view('auth.register', [
            'bgL' => $bgL,
            'bgC' => $bgC,
            'regStatus' => $regStatus,


            'logo' => $logo,
            'headingColor' => $headingColor,
            'conColor' => $conColor,

            'primColor' => $primColor,
            'secColor' => $secColor,


            'headingContent' => $headingContent,
            'subHeadingColor' => $subHeadingColor,
            'subHeadingContent' => $subHeadingContent,
            'mainContent' => $mainContent,



        ]);
    }
	public function registration(config $config){
        $bgL = $config::where("key", "reg_bg")->first();
        $bgC = $config::where("key", "reg_bg")->first();
        $banner = $config::where("key", "reg_banner")->first();
        $container = $config::where("key", "reg_container")->first();
        $whitelist_switch = $config::where("key", "whitelist_switch")->first();





		$fields = DB::table('registration_fields')->orderBy('order')->get();

        return view('auth.register2', [
            'bgL' => $bgL,
            'bgC' => $bgC,
            'banner' => $banner,
            'container' => $container,
            'whitelist_switch' => $whitelist_switch,
			


            'fields' => $fields,

        ]);
	}
	public function thankyou(config $config){
        $bgL = $config::where("key", "thankyou_background")->first();
        $bgC = $config::where("key", "ty_container")->first();

        $logo = $config::where("key", "thankyou_logo")->first();
        $headingColor = $config::where("key", "heading_color_ty")->first();
        $headingContent = $config::where("key", "heading_content_ty")->first();

        $subHeadingColor = $config::where("key", "sub_heading_color_ty")->first();
        $subHeadingContent = $config::where("key", "sub_heading_content_ty")->first();
        $mainContent = $config::where("key", "main_content_ty")->first();

        $conColor = $config::where("key", "con_color_ty")->first();





       
        return view('thankyou', [
            'bgL' => $bgL,
            'bgC' => $bgC,

            'logo' => $logo,
            'headingColor' => $headingColor,
            'headingContent' => $headingContent,
            'subHeadingColor' => $subHeadingColor,
            'conColor' => $conColor,

            'subHeadingContent' => $subHeadingContent,
            'mainContent' => $mainContent,



        ]);
    }



    private function printDays($rows)
	{
		$count = 0;
		$html = '';
		
		$days = sizeof($rows['days']);
		
		if ($days > 1)
		{
			//print the days in tabs for the user to select from.
			foreach($rows['days'] as $row)
			{
				$active = $count ? '' : 'active'; //first tab active on page load.
				$count++;
				$day = 'Day '.$count;
				$tabCtrlId = 'tab-'.sprintf('%02d', $count);
				$tabItemId = 'tab-item-'.sprintf('%02d', $count);
				$html .= '<a class="nav-item nav-link '.$active.'" id="'.$tabItemId.'" data-toggle="tab" href="#'.$tabCtrlId.'" role="tab" 
							aria-controls="'.$tabCtrlId.'" aria-selected="true">'.$day.'</a>';
			}
		}
		else
		{
			//if only 1 day, just print the title
			$html = '<h1>'.$rows['title'].'</h1>';
		}
		return $html; //print the tabs
	}

    private function getRoomTabs($room, $id)
	{
		//debug($session);
		//First add the tabs we need:
		//General
		$tabId			= 'inner-tab-'.$id.rand(0, 1000);
		$tabNavId		= 'room-tab-'.$id.rand(0, 1000);
		//speakers
		$speakerTabId 	= 'speaker-tab-'.$id.rand(0, 1000);
		$speakerRefId	= 'speaker-ref-'.$id.rand(0, 1000);
		$speakerAccrd	= 'speaker-acc-'.$id.rand(0, 1000);
		$speakerCard	= 'speaker-crd-'.$id.rand(0, 1000);
		//topics
		$topicTabId 	= 'topic-tab-'.$id.rand(0, 1000);
		$topicRefId		= 'topic-ref-'.$id.rand(0, 1000);
		$topicAccrd		= 'topic-acc-'.$id.rand(0, 1000);
		$topicCard		= 'topic-crd-'.$id.rand(0, 1000);
		
		
		$html  = '<nav class="inner-tab">
					<div class="nav nav-tabs" id="'.$tabNavId.'" role="tablist">
						<a class="nav-item nav-link active" id="'.$topicTabId.'" data-toggle="tab" href="#'.$topicRefId.'" 
							role="tab" aria-controls="'.$topicRefId.'" aria-selected="false">Description</a>					
						<a class="nav-item nav-link" id="'.$speakerTabId.'" data-toggle="tab" href="#'.$speakerRefId.'" 
							role="tab" aria-controls="'.$speakerRefId.'" aria-selected="true">Speakers</a>
					</div>
				</nav>
				
				<div class="tab-content" id="'.$tabId.'">
				
					<!--// DESCRIPTION TAB -->
					<div class="tab-pane fade show active" id="'.$topicRefId.'" role="tabpanel" aria-labelledby="'.$topicTabId.'">
						<div class="accordion-wrapper">
							<div class="accordion" id="'.$topicAccrd.'">
								<div class="card room-card">
									<div class="card-header" id="'.$topicCard.'">
										<div class="row" style="justify-content:center;">
											<div class="col-sm-12 topic-item">
												<div class="row text-center">
													<div class="col-sm-12" style="margin: 15px auto;">
														<span style="line-height: initial;">'.$room['room_info'].'</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- DESCRIPTION TAB //-->				
				
					<!--// SPEAKERS TAB -->
					<div class="tab-pane fade" id="'.$speakerRefId.'" role="tabpanel" aria-labelledby="'.$speakerTabId.'">
						<div class="accordion-wrapper">
							<div class="accordion" id="'.$speakerAccrd.'">
								<div class="card room-card">
									<div class="card-header" id="'.$speakerCard.'">
											<div class="row" style="justify-content:center;">';
		//here we add the speakers and topics data from the array (database):
		foreach($room['speakers'] as $speaker)
		{
			$spkrimg = isset($speaker['pic']) ? $speaker['pic'] : null;
			$pic = url('/').$spkrimg;
			$html .= '							<div class="col-sm-3 speaker-item">
													<div class="row text-center">
														<div class="col-sm-12">
															<div class="speaker-pic" style="background-image: url(\''.$pic.'\')"></div>
														</div>
													</div>
													<div class="row text-center">
														<div class="col-sm-12" style="margin:auto;">
															<h5 class="speaker" style=\'margin-top: 5px; margin-bottom: 2px;\'>'.$speaker['name'].'</h5>
															<span class="speaker">'.$speaker['designation'].'</span>
														</div>
													</div>
												</div>';
}
		$html .= '							</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- SPEAKERS TAB //-->
					
				</div>';
		return $html;
	}

    private function getRoomContent($room, $id, $idx, $eventDate, $startTime, $endTime)
	{
		//$image	= is_file(__DIR__.$room['image']) ? $room['image'] : NO_IMAGE;
		//If there is no image, do not display anything.
		$imgAttr = '';
		
		$rmimg = isset($room['image']) ? $room['image'] : null;

		// if (is_file(public_path().$rmimg))
		// 	$imgAttr = 'class="card-header-image" style="background-image:url(\''.url('/').$rmimg.'\')"';
		
		$ridx = $id.$idx;

		$ctrlId ='room-collapse'.$ridx;
		$hdrId	='room-heading'.$ridx;
		if($room['link'] == '/mainmid')
			$onclick = 'onClick="checkRoom(\'room_two_open_time\', \''.$room['link'].'\', event);"';
		else
			$onclick = 'onClick="checkRoom(\'room_four_open_time\', \''.$room['link'].'\', event);"';
		
		
		$calDate		= strtotime($eventDate);
		$calStrtTime 	= strtotime($startTime);
		$calEndTime 	= strtotime($endTime);
		
		//calendar event START date & time:
		$em = date('m', $calDate)-1; 	//month
		$ed = date('d', $calDate);	//day
		$eY = date('Y', $calDate);	//year
		
		$sH = date('H', $calStrtTime); 	//Hour
		$si = date('i', $calStrtTime); 	//minute

		//calendar event END date & time:
		$eH = date('H', $calEndTime); 	//Hour
		$eM = date('i', $calEndTime); 	//minute	
		
		$nm = 'cal_single_'.str_replace('-', '_', $hdrId).rand(0, 1000); //js variable name.
			
		$html = '<script>    
					var '.$nm.' = ics();
					var strt_'.$nm.' = new Date('.$eY.', '.$em.', '.$ed.', '.$sH.', '.$si.', 0, 0);
					var end_'.$nm.'  = new Date('.$eY.', '.$em.', '.$ed.', '.$eH.', '.$eM.', 0, 0);
					'.$nm.'.addEvent(\''.$room['room_desc'].'\', \''.$room['room_info'].'\', \'https://sanlam.welink.live'.$room['link'].'\', strt_'.$nm.', end_'.$nm.');
				</script>';
		$addevent = 'onClick="'.$nm.'.download(\''.$room['room_desc'].' - '.$room['room_name'].'\');"';
		
		if($idx == 1){
			$html  .='<div class="card room-card">
			<div style="background: none !important; margin-top:20;" class="container-fluid card-header" id="'.$hdrId.'">					
				<div class="row">
					<div class="col-sm-2">
						<div '.$imgAttr.'></div>
					</div>
					<div class="col-sm-10 room-strip">
						<div class="room-fold"></div>
						<h2 class="mb-0">
							<a href="#" class="btn-link collapsed room-card" data-toggle="collapse" data-target="#'.$ctrlId.'" 
							aria-expanded="false" aria-controls="'.$ctrlId.'">									
								<div class="row">
									<div class="col-sm-1">&nbsp;</div>
									<div class="col-sm-6">
										<div style="padding-left: 5%;">
											<span>'.$room['room_desc'].'</span>
											<p class="room-name">'.$room['room_name'].'</p>
										</div>
									</div>
									<div class="col-sm-2 join-link">
										<div '.$addevent.'>Add To Calendar</div>
									</div>
									<div class="col-sm-2 join-link">
										<div '.$onclick.'>
											Join '.$room['room_name'].'
										</div>
									</div>
									<div class="col-sm-1">&nbsp;</div>
								</div>
							</a>
						</h2>
					</div>
				</div>
			</div>
			<div id="'.$ctrlId.'" class="collapse" data-parent="#collapse'.$id.'">
				<div class="container-fluid card-body">
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-10" style="padding:0;">
					'.$this->getRoomTabs($room, $ridx).'
						</div>
					</div>
				</div>
			</div>
		</div>';
		}else{
			$html  .='<div class="card room-card">
			<div style="background: none !important;" class="container-fluid card-header" id="'.$hdrId.'">					
				<div class="row">
					<div class="col-sm-2">
						<div '.$imgAttr.'></div>
					</div>
					<div class="col-sm-10 room-strip">
						<div class="room-fold"></div>
						<h2 class="mb-0">
							<a href="#" class="btn-link collapsed room-card" data-toggle="collapse" data-target="#'.$ctrlId.'" 
							aria-expanded="false" aria-controls="'.$ctrlId.'">									
								<div class="row">
									<div class="col-sm-1">&nbsp;</div>
									<div class="col-sm-6">
										<div style="padding-left: 5%;">
											<span>'.$room['room_desc'].'</span>
											<p class="room-name">'.$room['room_name'].'</p>
										</div>
									</div>
									<div class="col-sm-2 join-link">
										<div '.$addevent.'>Add To Calendar</div>
									</div>
									<div class="col-sm-2 join-link">
										<div '.$onclick.'>
											Join '.$room['room_name'].'
										</div>
									</div>
									<div class="col-sm-1">&nbsp;</div>
								</div>
							</a>
						</h2>
					</div>
				</div>
			</div>
			<div id="'.$ctrlId.'" class="collapse" data-parent="#collapse'.$id.'">
				<div class="container-fluid card-body">
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-10" style="padding:0;">
					'.$this->getRoomTabs($room, $ridx).'
						</div>
					</div>
				</div>
			</div>
		</div>';
		}

		return $html;
	}

    private function getRooms($session, $id, $eventDate)
	{
		$idx = 0;
		$interval = 0; //testing
		//$interval = isset($session['interval']) ? $session['interval'] : false; //false = default
		
		$html ='<div class="tab-content" id="nav-room-content-'.$id.'">';
		
		
		
		if (!$interval)
		{
			if (SHOW_EXPAND_HELP)
			{
				$html .= '<div class="row">
								<div class="col-sm-2"></div>
								<div class="col-sm-10">
									<span>
										Click <i class="fa fa-chevron-up"></i> to view details. Click <i class="fa fa-chevron-down"></i> to hide.
									</span>
								</div>
							</div>';
			}
            // dd($session);
			if(isset($session['rooms'])){
                foreach($session['rooms'] as $room)
                {
                    $idx++;
                    $ridx = $id.$idx;
                    $html .= $this->getRoomContent($room, $id, $idx, $eventDate, $session['start_time'], $session['end_time']); //getRoomContent($room, $ridx, $interval);
                }
            }

		}
		else
		{
			$html .= '<div class="card room-card">
						<div class="container-fluid card-header" id="'.$hdrId.'">					
							<div class="row interval-item">
								<div class="col-sm-12" style="padding:0;">
									<h2 class="mb-0">
										<a href="#">
											<div class="row">
												<div class="col-sm-10">
													<div>
														<span>'.$room['room_desc'].'</span>
														<p class="room-name">'.$room['room_name'].'</p>
													</div>
												</div>
												<div class="col-sm-2">&nbsp;</div>
											</div>
										</a>
									</h2>
								</div>
							</div>
						</div>
					</div>';
		}

		$html .='</div>';
		return $html;
	}

    private function getSessions($sessions, $accId, $eventDate)
	{
		$sidx = 0;
		$html = '';
		foreach($sessions as $session)
		{
			$sesspic = isset($session['image']) ? $session['image'] : null;
			$image = url('/').$sesspic;

			$show = $sidx ? '' : ''; //'show'; //first tab active on page load, and expanded.
			$sidx++;
			$itemId = $sidx;
			$ctrlId = 'collapse'.$itemId;
			$hdrId	= 'heading'.$itemId;
			
			//Expand Collapse Button Link - only display if this is not an interval item.
			//Interval item could be any sort of "break" between sessions.
			/*
			$plainLnk = '	<span>'.$session['start_time'].' - '.$session['end_time'].'</span>
							<p>'.$session['title'].'</p>';	
			
			*/
			if(isset($session['alert'])){
				$plainLnk = '	<p></p>
				<span style="bottom: 3; position:relative;">'.$session['start_time'].'</span>
								<p></p>';	
			}else{
				$plainLnk = '	<p></p>
				<span>'.$session['start_time'].' - '.$session['end_time'].'</span>
								<p></p>';	
			}

			
			$btnAttrs = 'class="btn-link collapsed" data-toggle="collapse" data-target="#'.$ctrlId.'" 
				aria-expanded="false" aria-controls="'.$ctrlId.'"';
			$expndLnk = '<a href="#" '.$btnAttrs.'>'.$plainLnk .'</a>';
			if(isset($session['alert']))
				$expndBtn	= $session['interval'] ? '<div class="interval-item-alert">'.$plainLnk.'</div>'  : $expndLnk;
			else
				$expndBtn	= $session['interval'] ? '<div class="interval-item">'.$plainLnk.'</div>'  : $expndLnk;

			$cardHdrCls = $session['interval'] ? 'card-header interval-item' : 'card-header';
			$cardCls 	= $session['interval'] ? 'card interval-item' : 'card';
			$cardImg	= $session['interval'] ? '' : '<div class="card-header-image" style="background-image:url(\''.$image.'\')"></div>';

			$onclick = 'onClick="checkRoom(\'room_two_open_time\', \'/exhibition\', event);"';
			
			if ($session['interval'])
			{
				$onclick = 'onClick="checkRoom(\''.$session['route_time'].'\', \'/'.$session['route'].'\', event);"';

				if(isset($session['alert'])){
					$html .= '	<div class="'.$cardCls.'-alert" style="margin-bottom: 40px; margin-top: 40px;">
					<div class="'.$cardHdrCls.'-alert" id="'.$hdrId.'">
						<div class="row interval-row-alert">
							<div class="col-sm-3">
								<div class="card-break"><h2 style="font-size: 20px;">'.$session['title'].'</h2></div>
							</div>
							<div class="col-sm-5">	
								<h2 class="mb-0" style="color:#ffffff;">
									'.$expndBtn.'
								</h2>
							</div>
							<div class="col-sm-2 join-link" style="height: 60%; text-align: center; position:relative; bottom:4; display: flex;align-items: center;justify-content: center;" '.$onclick.'>
							Join
							</div>
						</div>
					</div>
					<div id="'.$ctrlId.'" class="collapse '.$show.'" aria-labelledby="'.$hdrId.'" data-parent="#'.$accId.'">
						<div class="card-body">												
							'.$this->getRooms($session, $itemId, $eventDate).'
						</div>
					</div>
				</div>';
				}else{
					$html .= '	<div class="'.$cardCls.'">
					<div class="'.$cardHdrCls.'" id="'.$hdrId.'">
						<div class="row interval-row">
							<div class="col-sm-2">
								<div class="card-break"><h2>BREAK</h2></div>
							</div>
							<div class="col-sm-9">	
								<h2 class="mb-0">
									'.$expndBtn.'
								</h2>
							</div>
						</div>
					</div>
					<div id="'.$ctrlId.'" class="collapse '.$show.'" aria-labelledby="'.$hdrId.'" data-parent="#'.$accId.'">
						<div class="card-body">												
							'.$this->getRooms($session, $itemId, $eventDate).'
						</div>
					</div>
				</div>';
				}

			}
			else
			{
				$html .= '	<div class="'.$cardCls.'">
								<div class="'.$cardHdrCls.'" id="'.$hdrId.'">
									<div class="row">
										<div class="col-sm-2">
											'.$cardImg.'
										</div>
										<div class="col-sm-10">	
											<h2 class="mb-0">
												'.$expndBtn.'
											</h2>
										</div>
									</div>
								</div>
								<div id="'.$ctrlId.'" class="collapse '.$show.'" aria-labelledby="'.$hdrId.'" data-parent="#'.$accId.'">
									<div class="card-body">												
										'.$this->getRooms($session, $itemId, $eventDate).'
									</div>
								</div>
							</div>';
			}
		}
		return $html;
	}

    private function printSchedule($rows)
	{
		$count	= 0;
		$idx	= 0;
		$sidx	= 0;
		$html	= '';
		
		foreach($rows['days'] as $row)
		{
			$idx++;
			$sidx 	= 0; //reset
			$active = $count ? '' : 'show active'; //first tab active on page load, and expanded.
			$count++;

			$accId 		= 'accordion'.sprintf('%02d', $idx);
			$tabCtrlId 	= 'tab-'.sprintf('%02d', $count);
			$tabItemId 	= 'tab-item-'.sprintf('%02d', $count);

			$html .= '<div class="tab-pane fade '.$active.'" id="'.$tabCtrlId.'" role="tabpanel" aria-labelledby="'.$tabItemId.'">
						<div class="row">
							<div class="col-sm-12">
								<div class="accordion-wrapper">
									<div class="accordion" id="'.$accId.'">';

			$html .= $this->getSessions($row['sessions'], $accId, $row['date']);

			$html .= '				</div>
								</div>
							</div>
						</div>
					</div>';
		}
		return $html;
	}

    public function schedule(config $config)
    {
        $bg = $config::where("key", "general_background")->first();
        $banner = $config::where("key", "reg_bg")->first();
		$scheduleObj = $this->rows;


        $primColor = $config::where("key", "primary_color")->first();
        $secColor = $config::where("key", "secondary_color")->first();

        //dd($bg->value);
        return view('schedule', [
            'bg' => $bg,
            'primColor' => $primColor,
            'secColor' => $secColor,

			'banner' => $banner,
            'days' =>  $this->printDays($scheduleObj),
            'schedule' => $this->printSchedule($scheduleObj),
            'showHelp' => SHOW_EXPAND_HELP
        ]);
    }

	public function sponsor(Exhibitor $sponsor){
        $extra = json_decode($sponsor->extra);
		$files[0] = json_decode($sponsor->file1);
		$files[1] = json_decode($sponsor->file2);
		$files[2] = json_decode($sponsor->file3);
		$files[3] = json_decode($sponsor->file4);

		$emails = explode(";", $extra->email);

        return view('sponsor', [
            'sponsor' => $sponsor,
            'extra' => $extra,
            'files' => $files,
			'emails' => $emails,


        ]);
	}

	public function mainMiddle(config $config){
        $bg = $config::where("key", "general_background")->first();

		return view('mainmiddle', [
			'bg' => $bg
		]);
	}

    public function conference(config $config, $order)
    {        
		$backRoute = "NONE";
		$biggerScreen = false;
		$speaker = false;
		$api_key = 'us8d244f61d3243dcfbfa3ca69f76bfe28e6f574b3';
		if($order == '99' || $order == '101')
			$biggerScreen = true;
        if($order == '100'){
            $backRoute = "NONE";
            $speaker = Speaker::where('users_id', \Auth::user()->id)->first();
            $exhibitor = Exhibitor::where('id', $speaker->exhibitors_id)->first();
			$speaker = true;
        }else{
            $exhibitor = Exhibitor::where('order', $order)->first();

        }
        $bg = $config::where("key", "general_background")->first();
        $heading = $exhibitor->name;
        $webinar = $exhibitor->webinar;
        $extra = json_decode($exhibitor->extra);
        //dd($extra);
        
        if($order >= 102){
			$api_key = 'us2ea485738582cb48f7deed922dca9fbdb9f7ae84';

			$biggerScreen = true;
            $backRoute = "breakaway";

		}
		if($order >= 200){
			$biggerScreen = true;

            $backRoute = "networking";

		}
		if($order >= 210){
			$biggerScreen = true;

            $backRoute = "networking.2";

		}
		if($order >= 499){
			$biggerScreen = true;

            $backRoute = "NONE";

		}
        if($order < 99)
            $backRoute = "exhibition";


		if(\Auth::user()->user_roles_id == 1 && $order != 100){
			$exhibitor = Exhibitor::where('order', $order)->first();
			$speaker1 = Speaker::where('users_id', \Auth::user()->id)->where('exhibitors_id', $exhibitor->id)->first();
			if($speaker1){
				$speaker = true;

			}
		}

		if($exhibitor->clickmeeting == 1){
			$params = array(
				'email' => \Auth::user()->email, // email address
				'nickname' => \Auth::user()->name, // user nickname
				'role' => 'listener', // user role, other: presenter, host
				'api_key' => $api_key, // user role, other: presenter, host

			);
			if(\Auth::user()->user_roles_id == 1){
				$exhibitor = Exhibitor::where('order', $order)->first();
				if($order != 100){
					$speaker1 = Speaker::where('users_id', \Auth::user()->id)->where('exhibitors_id', $exhibitor->id)->first();
					if($speaker1){
						$speaker = true;
						$params = array(
							'email' => \Auth::user()->email, // email address
							'nickname' => \Auth::user()->name, // user nickname
							'role' => 'presenter', // user role, other: presenter, host
				'api_key' => $api_key, // user role, other: presenter, host

						);
					}
				}else{
					$backRoute = "NONE";
					$speaker = Speaker::where('users_id', \Auth::user()->id)->first();
					$exhibitor = Exhibitor::where('id', $speaker->exhibitors_id)->first();
					$speaker = true;
					$params = array(
						'email' => \Auth::user()->email, // email address
						'nickname' => \Auth::user()->name, // user nickname
						'role' => 'presenter', // user role, other: presenter, host
				'api_key' => $api_key, // user role, other: presenter, host

					);
				}

			}

			$client = new ClickMeetingRestClient($params);
	
			$hash = $client->conferenceAutologinHash($exhibitor->room_id, $params);
			//dd($hash);
			$hash = json_decode($hash);

			$autologin_hash = $hash->autologin_hash;

			if($exhibitor->order == 99)
				$webinar = "https://lexisnexismain.clickmeeting.com/".$exhibitor->webinar."?skipPlatformChoice=1&l=".$autologin_hash;
			else{
				$webinar = "https://lexisnexisbreakaways.clickmeeting.com/".$exhibitor->webinar."?skipPlatformChoice=1&l=".$autologin_hash;

			}

		}



        return view('conference.room', [
			'biggerScreen' => $biggerScreen,
            'bg' => $bg,
            'exhibitor' => $exhibitor,

            'heading' => $heading,
            'webinar' => $webinar,
            'extra' => $extra,
            'backRoute' => $backRoute,
			'speaker' => $speaker
        ]);
    }

    public function exhibitionHallTest($stands){
        return view('exhibition_layouts.'.$stands);
    }

    public function exhibitionHall(config $config){
        $bg = $config::where("key", "general_background")->first();

        $stands = $config::where("key", "exhibition_size")->first();
        $exhibitors = Exhibitor::where('order', '<', '99')->get();
		//dd($exhibitors);
        return view('exhibition_layouts.'.$exhibitors->count(), [
            'bg' => $bg,

            'exhibitors' => $exhibitors
        ]);
    }
	public function sponsorsMiddle(config $config){
        $bg = $config::where("key", "general_background")->first();

        $stands = $config::where("key", "exhibition_size")->first();
        $exhibitors = Exhibitor::where('sponsor', '=', '1')->get();
		//dd($exhibitors);
        return view('sponsorsMiddle', [
            'bg' => $bg,

            'rooms' => $exhibitors
        ]);
    }

	public function breakawayRoom(config $config)
    {
        $bg = $config::where("key", "general_background")->first();
        $rooms = Exhibitor::where('order', '>', 99)->where('order', '<', 200)->get();

        //dd($bg->value);
        return view('middle_layouts.'.$rooms->count(), [
            'bg' => $bg,
			'rooms' => $rooms,
			'roomType' => 'breakaway'
        ]);
    }

	public function networkingLounge(config $config)
    {
        $bg = $config::where("key", "general_background")->first();
        $rooms = Exhibitor::where('order', '>', 199)->where('order', '<', 210)->get();

        //dd($bg->value);
        return view('middle_layouts.'.$rooms->count(), [
            'bg' => $bg,
			'rooms' => $rooms,
			'roomType' => 'networking'
        ]);
    }

	public function networkingLounge2(config $config)
    {
        $bg = $config::where("key", "general_background")->first();
        $rooms = Exhibitor::where('order', '>', 209)->where('order', '<', 220)->get();

        //dd($bg->value);
        return view('middle_layouts.'.$rooms->count(), [
            'bg' => $bg,
			'rooms' => $rooms,
			'roomType' => 'networking'
        ]);
    }

    public function mainLobby(config $config){
        $room_one_name = $config::where("key", "room_one_name")->first();
        $room_two_name = $config::where("key", "room_two_name")->first();
        $room_three_name = $config::where("key", "room_three_name")->first();
        $room_four_name = $config::where("key", "room_four_name")->first();
        $room_five_name = $config::where("key", "room_five_name")->first();

		$room_one_route = $config::where("key", "room_one_route")->first();
        $room_two_route = $config::where("key", "room_two_route")->first();
        $room_three_route = $config::where("key", "room_three_route")->first();
        $room_four_route = $config::where("key", "room_four_route")->first();
        $room_five_route = $config::where("key", "room_five_route")->first();


        $left_video = $config::where("key", "left_video")->first();
        $right_video = $config::where("key", "right_video")->first();


        $left_banner = $config::where("key", "left_banner")->first();
        $left_banner1 = $config::where("key", "left_banner1")->first();

        $right_banner = $config::where("key", "right_banner")->first();
        $right_banner1 = $config::where("key", "right_banner1")->first();

        $middle_banner = $config::where("key", "middle_banner")->first();

        $welcome_video = $config::where("key", "welcome_video")->first();
        $extra_banners = $config::where("key", "extra_banners")->first();






        return view('lobby2', [
            'room_one_name' => $room_one_name,
            'room_two_name' => $room_two_name,
            'room_three_name' => $room_three_name,
            'room_four_name' => $room_four_name,
            'room_five_name' => $room_five_name,
			'room_one_route' => $room_one_route,
            'room_two_route' => $room_two_route,
            'room_three_route' => $room_three_route,
            'room_four_route' => $room_four_route,
            'room_five_route' => $room_five_route,
            'left_banner' => $left_banner,
            'left_banner1' => $left_banner1,

            'left_video' => $left_video,
            'right_video' => $right_video,


            'right_banner' => $right_banner,
            'right_banner1' => $right_banner1,

            'middle_banner' => $middle_banner,
			'welcome_video' => $welcome_video,
			'extra_banners' => $extra_banners,

        ]);
    }
}
