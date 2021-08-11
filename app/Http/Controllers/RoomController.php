<?php

namespace App\Http\Controllers;

use App\Models\config;
use App\Models\RegisterWhitelist;
use App\Models\User;
use App\Models\Exhibitor;
use App\Models\Speaker;


define('NO_IMAGE', url('/').'/img/schedule/nopic.png');
define ('SHOW_EXPAND_HELP', false);


use Illuminate\Http\Request;

class RoomController extends Controller
{

    
//Assumes that the data here is read from the database and sorted according to date ASCENDING:
public $rows =	[
			'title' => 'African Leadership For Health Gathering',
			'days' =>
			[
				//Day 1:
				[
					'session_title'		=> 'CONFERENCE PROGRAMME FOR WE-LINK', 	//should not be mandatory
					'date'				=> '2021-08-13',	//required - let's us know which tab it should be placed in
					'sessions'			=>
					[
						[	//Row 2
							'title'			=> 'Welcome',
							'image'			=> '/img/schedule/session1.png',
							'start_time'	=> '14:40',
							'end_time'		=> '15:00',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Keynote Speakers Round 1',
														'room_info'		=> 	'Laurene to welcome and outline conference, Efua to MC and key note speaker to say a few notes.',
														'link'			=>	'/room/99',
														'speakers'		=> 	[	
															/*
															Ideally also a table and this array should hold the user id's.
															Having a table means we have access to any other relevant data if necessary,
															such as email, phone no, website, etc.
															*/
 
															[
																'pic'			=> '/img/schedule/profile/angel.jpg',
																'name'			=> 'Angel Chelwa', 
																'designation'	=> 'Forbes 30 under 30; Co-founders, Healthy Learners'																					
															], 
															[
																'pic'			=> '/img/schedule/profile/lonnie.jpg',
																'name'			=> 'Lonnie Hacket', 
																'designation'	=> 'Forbes 30 under 30; Co-founders, Healthy Learners'
															],



														]
													],
													
												]
						],
						[	//Row 2
							'title'			=> 'Welcome',
							'image'			=> '/img/schedule/session2.png',
							'start_time'	=> '15:00',
							'end_time'		=> '15:20',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Keynote Speakers Round 2',
														'room_info'		=> 	'Laurene to welcome and outline conference, Efua to MC and key note speaker to say a few notes.',
														'link'			=>	'/room/99',
														'speakers'		=> 	[	
															/*
															Ideally also a table and this array should hold the user id's.
															Having a table means we have access to any other relevant data if necessary,
															such as email, phone no, website, etc.
															*/
 
															[
																'pic'			=> '/img/schedule/profile/johnn.jpg',
																'name'			=> 'Dr John Nkengasong, MSc, PhD', 
																'designation'	=> 'Director, Africa CDC'																					
															], 



														]
													],
													
												]
						],

						[	//Row 2
							'title'			=> 'Session 2',
							'image'			=> '/img/schedule/session3.png',
							'start_time'	=> '15:20',
							'end_time'		=> '16:10',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Speaker Session 1: Vaccine Equity - An attainable goal or a myth?',
														'room_info'		=> 	'How might we adjust Intellectual property laws to allow for faster reaction in the midst of pandemics while still promoting research? 
														Who is responsible for promoting vaccine confidence and how might lessons from past vaccination efforts guide these decisions? 
														What is the role of politics in vaccine equity?',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/Fatima.jpeg',
																				'name'			=> 'Dr Fatima Hassan', 
																				'designation'	=> 'Founder & Director, Health Justice Initiative'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/michello.jpg',
																				'name'			=> 'Michelo Simuyandi, PhD', 
																				'designation'	=> 'Researcher, Centre for Infectious Disease Research in Zambia'																					
																			], 
																			[
																				'pic'			=> '/img/schedule/profile/nelima.png',
																				'name'			=> 'Nelima Otipa', 
																				'designation'	=> 'Data and Project Manager, Nexleaf Analytics'																					
																			], 
																			[
																				'pic'			=> '/img/schedule/profile/mark.jpg',
																				'name'			=> 'Mark Chilongu', 
																				'designation'	=> 'Executive Director, Africa Directions'																					
																			], 
																		]
													],

												]
						],

						[	//Row 3
							'title'			=> 'Session 2',
							'image'			=> '/img/schedule/session4.png',
							'start_time'	=> '16:10',
							'end_time'		=> '16:40',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.

								[	//Room 1 - Claims
									'room_name'		=> 	'Room 1', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Responding to Vaccine Hesitancy',
									'room_info'		=> 	'What are viable methods to respond to vaccine apprehension and fear?',
									'link'			=>	'/room/101',
									'speakers'		=> 	[	


													]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Room 2', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'What are health industry “wins” you’ve seen on a local, national, and international level?',
									'room_info'		=> 	'How do we scale-up?',
									'link'			=>	'/room/102',
									'speakers'		=> 	[	

 
									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Room 3', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'COVID Chronicles.',
									'room_info'		=> 	'What is your story - as a frontline healthcare worker, university student, entrepreneur - during this pandemic?',
									'link'			=>	'/room/103',
									'speakers'		=> 	[	

									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Room 4', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Workplace, Unraveled',
									'room_info'		=> 	'Managing a workforce in the middle of disruption - policy change and maintaining an attractive work environment.',
									'link'			=>	'/room/104',
									'speakers'		=> 	[	

									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Room 5', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Pursuits for Justice',
									'room_info'		=> 	'Staying informed on social and health justice movements in our communities',
									'link'			=>	'/room/105',
									'speakers'		=> 	[	

									]
								],
								

												]
						],
						[	//Break 2
							'title'			=> 'break',
							'image'			=> '/img/schedule/seal-01.jpg',
							'start_time'	=> '16:40',
							'end_time'		=> '17:00',
							'interval'		=>	true
						],
						[	//Row 2
							'title'			=> 'Session 2',
							'image'			=> '/img/schedule/session5.png',
							'start_time'	=> '17:00',
							'end_time'		=> '17:45',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Panel discussion: Disease Equity -Maintaining a long term perspective in the midst of reactionary pandemic measures.',
														'room_info'		=> 	'How has the pandemic affected research programs that for a long time provided support to combat infectious diseases in Africa?',
														'link'			=>	'/room/99',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/Mohammed.jpeg',
																				'name'			=> 'Dr Mohammed Lamorde', 
																				'designation'	=> 'Head of Global Health Security Programme, Infectious Diseases Institute'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/richard.jpg',
																				'name'			=> 'Richard Brough, PhD', 
																				'designation'	=> 'Former Executive Director, Infectious Diseases Institute'																					
																			], 
																			[
																				'pic'			=> '/img/schedule/profile/tobi.jpg',
																				'name'			=> 'Dr Tobi Nagel', 
																				'designation'	=> 'Founder and Director, Phages for Global Health'																					
																			], 
																			[
																				'pic'			=> '/img/schedule/profile/thumbi.png',
																				'name'			=> 'Prof Thumbi Ndung’u', 
																				'designation'	=> 'Deputy Director (Science), Africa Health Research Institute'																					
																			],
																			[
																				'pic'			=> '/img/schedule/profile/Caroline.png',
																				'name'			=> 'Caroline Njoroge', 
																				'designation'	=> 'South Sudan Health Coordinator, Medicos Del Mundo'																					
																			], 
																		]
													],

												]
						],
						[	//Row 3
							'title'			=> 'Session 2',
							'image'			=> '/img/schedule/session6.png',
							'start_time'	=> '17:45',
							'end_time'		=> '18:25',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.

								[	//Room 1 - Claims
									'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Reproductive Health Equity',
									'room_info'		=> 	'Breaking norms and taking ownership of our health.',
									'link'			=>	'/room/99',
									'speakers'		=> 	[	
										[
											'pic'			=> '/img/schedule/profile/sol.jpg',
											'name'			=> 'Solange Impanoyimana', 
											'designation'	=> 'Executive Director and Co-Founder, Generation Rise'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/bon.jpg',
											'name'			=> 'Bonita Beatrice Nanziri', 
											'designation'	=> 'Founder, Afrigal Tech'																					
										],
										[
											'pic'			=> '/img/schedule/profile/bland.jpg',
											'name'			=> 'Blandine Umuziranenge', 
											'designation'	=> 'Founder and CEO , Kosmotive'																					
										], 

													]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Room 2', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Staying Hot in Health',
									'room_info'		=> 	'Valuable healthcare skill sets and expertise sharing among attendees -how do you stay in-demand as a professional?',
									'link'			=>	'/room/102',
									'speakers'		=> 	[	

 
									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Room 3', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Challenges',
									'room_info'		=> 	'What are health industry “challenges” you’ve seen on a local, national, and international level? How can we respond?',
									'link'			=>	'/room/103',
									'speakers'		=> 	[	

									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Room 4', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Taking Action',
									'room_info'		=> 	'building viable projects post-Gathering and how to do it best',
									'link'			=>	'/room/104',
									'speakers'		=> 	[	

									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Room 5', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Health 4.0',
									'room_info'		=> 	'How can technology be leveraged in the fight for health equity?',
									'link'			=>	'/room/105',
									'speakers'		=> 	[	

									]
								],
								

												]
						],
						[	//Break 2
							'title'			=> 'break',
							'image'			=> '/img/schedule/seal-01.jpg',
							'start_time'	=> '18:25',
							'end_time'		=> '18:50',
							'interval'		=>	true
						],
						[	//Row 2
							'title'			=> 'Session 2',
							'image'			=> '/img/schedule/session7.png',
							'start_time'	=> '18:50',
							'end_time'		=> '19:35',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Speaker Session 2: Equitable Access to Quality Healthcare',
														'room_info'		=> 	'Can grassroots movements and community-based organizations accelerate a bottom-up approach?',
														'link'			=>	'/room/99',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/hil.jpg',
																				'name'			=> 'Hillary Omala', 
																				'designation'	=> 'Executive Director, Carolina for Kibera'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/peace.jpg',
																				'name'			=> 'Dr Peace Amaraegbulam', 
																				'designation'	=> 'Founder, The Straight Child Foundation'																					
																			], 
																			[
																				'pic'			=> '/img/schedule/profile/lyda.jpg',
																				'name'			=> 'Dr Lynda Toussaint', 
																				'designation'	=> 'CEO, Unjani Clinics NPC'																					
																			],  
																		]
													],

												]
						],
						[	//Row 2
							'title'			=> 'Session 2',
							'image'			=> '/img/schedule/session8.png',
							'start_time'	=> '19:35',
							'end_time'		=> '20:20',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'“Little Bets” Pitches',
														'room_info'		=> 	'Winner pitch ideas, audience ask questions through moderator. Audience votes and the winner is announced',
														'link'			=>	'/room/99',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/maia.jpg',
																				'name'			=> 'Maia Matshikiza', 
																				'designation'	=> ''
																			],
																			[
																				'pic'			=> '/img/schedule/profile/peace.jpg',
																				'name'			=> 'Dr Peace Amaraegbulam', 
																				'designation'	=> 'Founder, The Straight Child Foundation'																					
																			], 
																			[
																				'pic'			=> '/img/schedule/profile/Marion.jpg',
																				'name'			=> 'Marion Ntiiru', 
																				'designation'	=> ''																					
																			],  
																		]
													],

												]
						],
						[	//Row 2
							'title'			=> 'Session 2',
							'image'			=> '/img/schedule/session9.png',
							'start_time'	=> '20:20',
							'end_time'		=> '20:30',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Closing note',
														'room_info'		=> 	'Closing',
														'link'			=>	'/room/99',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/efua.jpg',
																				'name'			=> 'Efua Adabie', 
																				'designation'	=> 'MC'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/laurene.png',
																				'name'			=> 'Laurene Amoit', 
																				'designation'	=> 'AL Health Sector Leader'																					
																			],   
																		]
													],

												]
						],
						[	//Row 2
							'title'			=> 'Session 2',
							'image'			=> '/img/schedule/session10.png',
							'start_time'	=> '20:30',
							'end_time'		=> '21:00',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Music, networking, and attendees leave at own pleasure',
														'room_info'		=> 	'Attendees that pre-select those they want to interview with would be matched. Attendees that opt to have a randomly selected attendee would also be matched based on their preference',
														'link'			=>	'/room/99',
														'speakers'		=> 	[	
  
																		]
													],

													[	//Room 1 - Claims
														'room_name'		=> 	'Room 1', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Room 1',
														'room_info'		=> 	'',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
  
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Room 2', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Room 2',
														'room_info'		=> 	'',
														'link'			=>	'/room/102',
														'speakers'		=> 	[	
  
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Room 3', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Room 3',
														'room_info'		=> 	'',
														'link'			=>	'/room/103',
														'speakers'		=> 	[	
  
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Room 4', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Room 4',
														'room_info'		=> 	'',
														'link'			=>	'/room/104',
														'speakers'		=> 	[	
  
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Room 5', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Room 5',
														'room_info'		=> 	'',
														'link'			=>	'/room/105',
														'speakers'		=> 	[	
  
																		]
													],

												]
						],				


					
					]
				],
			]
		];

	public function checkRoom(Request $request){
		date_default_timezone_set('Africa/Johannesburg');
        $room = $request->get('r');
		$time = Config::where("key", $room)->first()->value;
		if (date('H:i') >= date('H:i', strtotime($time)))
			return "1";
		return $time;
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
            return "This email has not been invited to the Bryte Business Partner Conference. Please contact Roxanne : Roxanne.Ho-Tong@brytesa.com";
        
        return "1";

    }

    public function landingPage(config $config){
        $bgL = $config::where("key", "landing_background")->first();

        $logo = $config::where("key", "landing_logo")->first();
        $headingColor = $config::where("key", "heading_color")->first();
        $headingContent = $config::where("key", "heading_content")->first();

        $subHeadingColor = $config::where("key", "sub_heading_color")->first();
        $subHeadingContent = $config::where("key", "sub_heading_content")->first();
        $mainContent = $config::where("key", "main_content")->first();



       
        return view('auth.register', [
            'bgL' => $bgL,
            'logo' => $logo,
            'headingColor' => $headingColor,
            'headingContent' => $headingContent,
            'subHeadingColor' => $subHeadingColor,
            'subHeadingContent' => $subHeadingContent,
            'mainContent' => $mainContent,



        ]);
    }
	public function thankyou(config $config){
        $bgL = $config::where("key", "thankyou_background")->first();

        $logo = $config::where("key", "thankyou_logo")->first();
        $headingColor = $config::where("key", "heading_color_ty")->first();
        $headingContent = $config::where("key", "heading_content_ty")->first();

        $subHeadingColor = $config::where("key", "sub_heading_color_ty")->first();
        $subHeadingContent = $config::where("key", "sub_heading_content_ty")->first();
        $mainContent = $config::where("key", "main_content_ty")->first();



       
        return view('thankyou', [
            'bgL' => $bgL,
            'logo' => $logo,
            'headingColor' => $headingColor,
            'headingContent' => $headingContent,
            'subHeadingColor' => $subHeadingColor,
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
		$tabId			= 'inner-tab-'.$id;
		$tabNavId		= 'room-tab-'.$id;
		//speakers
		$speakerTabId 	= 'speaker-tab-'.$id;
		$speakerRefId	= 'speaker-ref-'.$id;
		$speakerAccrd	= 'speaker-acc-'.$id;
		$speakerCard	= 'speaker-crd-'.$id;
		//topics
		$topicTabId 	= 'topic-tab-'.$id;
		$topicRefId		= 'topic-ref-'.$id;
		$topicAccrd		= 'topic-acc-'.$id;
		$topicCard		= 'topic-crd-'.$id;
		
		
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
		if($room['link'] == '/room/99')
			$onclick = 'onClick="checkRoom(\'room_three_open_time\', \''.$room['link'].'\', event);"';
		else
			$onclick = 'onClick="checkRoom(\'room_four_open_time\', \''.$room['link'].'\', event);"';
		
		
		$calDate		= strtotime($eventDate);
		$calStrtTime 	= strtotime($startTime);
		$calEndTime 	= strtotime($endTime);
		
		//calendar event START date & time:
		$em = 5; 	//month
		$ed = 22;	//day
		$eY = 2021;	//year
		
		$sH = date('H', $calStrtTime); 	//Hour
		$si = date('i', $calStrtTime); 	//minute

		//calendar event END date & time:
		$eH = date('H', $calEndTime); 	//Hour
		$eM = date('i', $calEndTime); 	//minute	
		
		$nm = 'cal_single_'.str_replace('-', '_', $hdrId); //js variable name.
			
		$html = '<script>    
					var '.$nm.' = ics();
					var strt_'.$nm.' = new Date('.$eY.', '.$em.', '.$ed.', '.$sH.', '.$si.', 0, 0);
					var end_'.$nm.'  = new Date('.$eY.', '.$em.', '.$ed.', '.$eH.', '.$eM.', 0, 0);
					'.$nm.'.addEvent(\''.$room['room_desc'].'\', \''.$room['room_info'].'\', \'https://bryte.welink.live'.$room['link'].'\', strt_'.$nm.', end_'.$nm.');
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
				if(isset($session['alert'])){
					$html .= '	<div class="'.$cardCls.'-alert">
					<div class="'.$cardHdrCls.'-alert" id="'.$hdrId.'">
						<div class="row interval-row-alert">
							<div class="col-sm-3">
								<div class="card-break"><h2>Exhibition Hall Open</h2></div>
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

        //dd($bg->value);
        return view('schedule', [
            'bg' => $bg,
			'banner' => $banner,
            'days' =>  $this->printDays($this->rows),
            'schedule' => $this->printSchedule($this->rows),
            'showHelp' => SHOW_EXPAND_HELP
        ]);
    }

    public function conference(config $config, $order)
    {        
		$backRoute = "NONE";
		$biggerScreen = false;
		$speaker = false;
		if($order == '99')
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
        
        if($order >= 101){
            $backRoute = "breakaway";

		}
        if($order < 99)
            $backRoute = "exhibition";
        return view('conference.room', [
			'biggerScreen' => $biggerScreen,
            'bg' => $bg,
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
        $stands = $config::where("key", "exhibition_size")->first();
        $exhibitors = Exhibitor::where('order', '<', '99')->get();
		//dd($exhibitors);
        return view('exhibition_layouts.'.$exhibitors->count(), [
            'exhibitors' => $exhibitors
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
        $rooms = Exhibitor::where('order', '>', 200)->where('order', '<', 300)->get();

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


        $left_banner = $config::where("key", "left_banner")->first();
        $right_banner = $config::where("key", "right_banner")->first();
        $middle_banner = $config::where("key", "middle_banner")->first();

        $welcome_video = $config::where("key", "welcome_video")->first();





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
            'right_banner' => $right_banner,
            'middle_banner' => $middle_banner,
			'welcome_video' => $welcome_video,
        ]);
    }
}
