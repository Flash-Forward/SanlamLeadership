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
					'date'				=> '2021-06-22',	//required - let's us know which tab it should be placed in
					'sessions'			=>
					[
						[	//Row 2
							'title'			=> 'Entrepreneurship 101',
							'image'			=> '/img/schedule/session1.png',
							'start_time'	=> '12:00',
							'end_time'		=> '13:30',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Entrepreneurship 101',
														'room_info'		=> 	'This session will start off with our opening speaker giving students an introductory view of how entrepreneruship looks like in reality. After this intro, students will have a crush course on entrepreneurship, introducing students to the BUILD Model as a way for them to learn how to start approaching their entrepreneurial ideas.',
														'link'			=>	'/room/99',
														'speakers'		=> 	[	
															/*
															Ideally also a table and this array should hold the user id's.
															Having a table means we have access to any other relevant data if necessary,
															such as email, phone no, website, etc.
															*/
 
															[
																'pic'			=> '/img/schedule/profile/ThokozaMjo.png',
																'name'			=> 'Thokoza Mjo', 
																'designation'	=> 'Program Lead, Very Young Entrepreneur Acceleration, Anzisha Prize Program'																					
															], 
															[
																'pic'			=> '/img/schedule/profile/DaveTait.png',
																'name'			=> 'David Tait', 
																'designation'	=> 'HOD Entrepreneurial Leadership, African Leadership Academy'
															],



														]
													],
													
												]
						],

						[	//Row 2
							'title'			=> 'Session 2',
							'image'			=> '/img/schedule/session2.png',
							'start_time'	=> '13:30',
							'end_time'		=> '14:30',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Understanding your Way to Solutions that Work',
														'room_info'		=> 	'During this session, students will get 15 minutes to brainstorm opportunities or challenges in their environment. This session will happen in the plenary where they will get to brainstorm ideas with a facilitator prompting their thought process. They will get into small groups of 5 each to share their ideas with the goal of sharing ideas and brainstrorming with their peers. During this group conversation, they will also deeply interogate what underlies the challenge / opportunity that they identified so as to strengthen their idea. From this, students will have some time to create a story that will help them solify ideas into business or side hustle. This session will teach students that grappeling with the root cause is at the heart of entrepreneurship and building sustainable solutions, as opposed to finding a solution and then working to fit the problem into it.',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/DaveTait.png',
																				'name'			=> 'David Tait', 
																				'designation'	=> 'HOD Entrepreneurial Leadership, African Leadership Academy'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/OluwabusolaMajekodunmi.png',
																				'name'			=> 'Busola Majekodunmi', 
																				'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
																			], 
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Group 1', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Breakaway Room 1',
														'room_info'		=> 	'During this session, students will get 15 minutes to brainstorm opportunities or challenges in their environment. This session will happen in the plenary where they will get to brainstorm ideas with a facilitator prompting their thought process. They will get into small groups of 5 each to share their ideas with the goal of sharing ideas and brainstrorming with their peers. During this group conversation, they will also deeply interogate what underlies the challenge / opportunity that they identified so as to strengthen their idea. From this, students will have some time to create a story that will help them solify ideas into business or side hustle. This session will teach students that grappeling with the root cause is at the heart of entrepreneurship and building sustainable solutions, as opposed to finding a solution and then working to fit the problem into it.',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/DaveTait.png',
																				'name'			=> 'David Tait', 
																				'designation'	=> 'HOD Entrepreneurial Leadership, African Leadership Academy'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/OluwabusolaMajekodunmi.png',
																				'name'			=> 'Busola Majekodunmi', 
																				'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
																			], 
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Group 2', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Breakaway Room 2',
														'room_info'		=> 	'During this session, students will get 15 minutes to brainstorm opportunities or challenges in their environment. This session will happen in the plenary where they will get to brainstorm ideas with a facilitator prompting their thought process. They will get into small groups of 5 each to share their ideas with the goal of sharing ideas and brainstrorming with their peers. During this group conversation, they will also deeply interogate what underlies the challenge / opportunity that they identified so as to strengthen their idea. From this, students will have some time to create a story that will help them solify ideas into business or side hustle. This session will teach students that grappeling with the root cause is at the heart of entrepreneurship and building sustainable solutions, as opposed to finding a solution and then working to fit the problem into it.',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/DaveTait.png',
																				'name'			=> 'David Tait', 
																				'designation'	=> 'HOD Entrepreneurial Leadership, African Leadership Academy'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/OluwabusolaMajekodunmi.png',
																				'name'			=> 'Busola Majekodunmi', 
																				'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
																			], 
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Group 3', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Breakaway Room 3',
														'room_info'		=> 	'During this session, students will get 15 minutes to brainstorm opportunities or challenges in their environment. This session will happen in the plenary where they will get to brainstorm ideas with a facilitator prompting their thought process. They will get into small groups of 5 each to share their ideas with the goal of sharing ideas and brainstrorming with their peers. During this group conversation, they will also deeply interogate what underlies the challenge / opportunity that they identified so as to strengthen their idea. From this, students will have some time to create a story that will help them solify ideas into business or side hustle. This session will teach students that grappeling with the root cause is at the heart of entrepreneurship and building sustainable solutions, as opposed to finding a solution and then working to fit the problem into it.',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/DaveTait.png',
																				'name'			=> 'David Tait', 
																				'designation'	=> 'HOD Entrepreneurial Leadership, African Leadership Academy'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/OluwabusolaMajekodunmi.png',
																				'name'			=> 'Busola Majekodunmi', 
																				'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
																			], 
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Group 4', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Breakaway Room 4',
														'room_info'		=> 	'During this session, students will get 15 minutes to brainstorm opportunities or challenges in their environment. This session will happen in the plenary where they will get to brainstorm ideas with a facilitator prompting their thought process. They will get into small groups of 5 each to share their ideas with the goal of sharing ideas and brainstrorming with their peers. During this group conversation, they will also deeply interogate what underlies the challenge / opportunity that they identified so as to strengthen their idea. From this, students will have some time to create a story that will help them solify ideas into business or side hustle. This session will teach students that grappeling with the root cause is at the heart of entrepreneurship and building sustainable solutions, as opposed to finding a solution and then working to fit the problem into it.',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/DaveTait.png',
																				'name'			=> 'David Tait', 
																				'designation'	=> 'HOD Entrepreneurial Leadership, African Leadership Academy'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/OluwabusolaMajekodunmi.png',
																				'name'			=> 'Busola Majekodunmi', 
																				'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
																			], 
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Group 5', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Breakaway Room 5',
														'room_info'		=> 	'During this session, students will get 15 minutes to brainstorm opportunities or challenges in their environment. This session will happen in the plenary where they will get to brainstorm ideas with a facilitator prompting their thought process. They will get into small groups of 5 each to share their ideas with the goal of sharing ideas and brainstrorming with their peers. During this group conversation, they will also deeply interogate what underlies the challenge / opportunity that they identified so as to strengthen their idea. From this, students will have some time to create a story that will help them solify ideas into business or side hustle. This session will teach students that grappeling with the root cause is at the heart of entrepreneurship and building sustainable solutions, as opposed to finding a solution and then working to fit the problem into it.',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/DaveTait.png',
																				'name'			=> 'David Tait', 
																				'designation'	=> 'HOD Entrepreneurial Leadership, African Leadership Academy'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/OluwabusolaMajekodunmi.png',
																				'name'			=> 'Busola Majekodunmi', 
																				'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
																			], 
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Group 6', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Breakaway Room 6',
														'room_info'		=> 	'During this session, students will get 15 minutes to brainstorm opportunities or challenges in their environment. This session will happen in the plenary where they will get to brainstorm ideas with a facilitator prompting their thought process. They will get into small groups of 5 each to share their ideas with the goal of sharing ideas and brainstrorming with their peers. During this group conversation, they will also deeply interogate what underlies the challenge / opportunity that they identified so as to strengthen their idea. From this, students will have some time to create a story that will help them solify ideas into business or side hustle. This session will teach students that grappeling with the root cause is at the heart of entrepreneurship and building sustainable solutions, as opposed to finding a solution and then working to fit the problem into it.',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/DaveTait.png',
																				'name'			=> 'David Tait', 
																				'designation'	=> 'HOD Entrepreneurial Leadership, African Leadership Academy'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/OluwabusolaMajekodunmi.png',
																				'name'			=> 'Busola Majekodunmi', 
																				'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
																			], 
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Group 7', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Breakaway Room 7',
														'room_info'		=> 	'During this session, students will get 15 minutes to brainstorm opportunities or challenges in their environment. This session will happen in the plenary where they will get to brainstorm ideas with a facilitator prompting their thought process. They will get into small groups of 5 each to share their ideas with the goal of sharing ideas and brainstrorming with their peers. During this group conversation, they will also deeply interogate what underlies the challenge / opportunity that they identified so as to strengthen their idea. From this, students will have some time to create a story that will help them solify ideas into business or side hustle. This session will teach students that grappeling with the root cause is at the heart of entrepreneurship and building sustainable solutions, as opposed to finding a solution and then working to fit the problem into it.',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/DaveTait.png',
																				'name'			=> 'David Tait', 
																				'designation'	=> 'HOD Entrepreneurial Leadership, African Leadership Academy'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/OluwabusolaMajekodunmi.png',
																				'name'			=> 'Busola Majekodunmi', 
																				'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
																			], 
																		]
													],
													[	//Room 1 - Claims
														'room_name'		=> 	'Group 8', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Breakaway Room 8',
														'room_info'		=> 	'During this session, students will get 15 minutes to brainstorm opportunities or challenges in their environment. This session will happen in the plenary where they will get to brainstorm ideas with a facilitator prompting their thought process. They will get into small groups of 5 each to share their ideas with the goal of sharing ideas and brainstrorming with their peers. During this group conversation, they will also deeply interogate what underlies the challenge / opportunity that they identified so as to strengthen their idea. From this, students will have some time to create a story that will help them solify ideas into business or side hustle. This session will teach students that grappeling with the root cause is at the heart of entrepreneurship and building sustainable solutions, as opposed to finding a solution and then working to fit the problem into it.',
														'link'			=>	'/room/101',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/

																			[
																				'pic'			=> '/img/schedule/profile/DaveTait.png',
																				'name'			=> 'David Tait', 
																				'designation'	=> 'HOD Entrepreneurial Leadership, African Leadership Academy'
																			],
																			[
																				'pic'			=> '/img/schedule/profile/OluwabusolaMajekodunmi.png',
																				'name'			=> 'Busola Majekodunmi', 
																				'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
																			], 
																		]
													],
												]
						],
						[	//Break 1
							'title'			=> 'break',
							'image'			=> '/img/schedule/seal-01.jpg',
							'start_time'	=> '14:30',
							'end_time'		=> '14:45',
							'interval'		=>	true
						],
						[	//Row 3
							'title'			=> 'Session 2',
							'image'			=> '/img/schedule/session3.png',
							'start_time'	=> '14:45',
							'end_time'		=> '16:00',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.

								[	//Room 1 - Claims
									'room_name'		=> 	'Group 1', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Breakaway Room 1',
									'room_info'		=> 	'Students will get into different break out rooms of 5 each and share their challenge / opportunity indepth with their peers, and in the presence of an Anzisha fellow. During this session, students will receive indepth feedback on their problem solving process and well as conclusions andbusiness ideas. This feedback session will provide students with the tools to interogate their problem further, as this will bring them closer to a sustainable solution (idea for a venture)',
									'link'			=>	'/room/101',
									'speakers'		=> 	[	
														/*
														Ideally also a table and this array should hold the user id's.
														Having a table means we have access to any other relevant data if necessary,
														such as email, phone no, website, etc.
														*/

														[
															'pic'			=> '/img/schedule/profile/JoshAdler.png',
															'name'			=> 'Josh Adler', 
															'designation'	=> 'VP, Growth & Entrepreneurship, African Leadership Academy'
														],
														[
															'pic'			=> '/img/schedule/profile/KissekaSamson.png',
															'name'			=> 'Kisseka Samson', 
															'designation'	=> 'Founder, Hello Mushrooms'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/NoahWalakira.png',
															'name'			=> 'Noah Walakira', 
															'designation'	=> 'CEO, Namirember Sweater Makers'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/KolawoleOlajide.png',
															'name'			=> 'Kolawole Olajide', 
															'designation'	=> 'Founder & CTO, Bridge labs'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/VanessaShemIshimwe.png',
															'name'			=> 'Vanessa Shem Ishimwe', 
															'designation'	=> 'Founder, YIDA'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/SalySarr.png',
															'name'			=> 'Saly Sarr', 
															'designation'	=> 'Founder, SallyMaaShoes'																					
														],
														[
															'pic'			=> '/img/schedule/profile/AlaaMoatamed.png',
															'name'			=> 'Alaa Moatamed', 
															'designation'	=> 'Co-Founder & Head of Sales, Presto'																					
														],
														[
															'pic'			=> '/img/schedule/profile/AlyAbdelazan.png',
															'name'			=> 'Aly Abdelazan', 
															'designation'	=> 'Founder, Teens Club'																					
														],
														[
															'pic'			=> '/img/schedule/profile/AseituOliviaKipo.png',
															'name'			=> 'Aseitu Olivia Kipo', 
															'designation'	=> 'Founder & CEO, Kobaa-Ok Enterprise'																					
														], 
														[
															'pic'			=> '/img/schedule/profile/Busola.png',
															'name'			=> 'Busola Majekodunmi', 
															'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
														], 
													]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Group 2', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Breakaway Room 2',
									'room_info'		=> 	'Students will get into different break out rooms of 5 each and share their challenge / opportunity indepth with their peers, and in the presence of an Anzisha fellow. During this session, students will receive indepth feedback on their problem solving process and well as conclusions andbusiness ideas. This feedback session will provide students with the tools to interogate their problem further, as this will bring them closer to a sustainable solution (idea for a venture)',
									'link'			=>	'/room/101',
									'speakers'		=> 	[	
										/*
										Ideally also a table and this array should hold the user id's.
										Having a table means we have access to any other relevant data if necessary,
										such as email, phone no, website, etc.
										*/

										[
											'pic'			=> '/img/schedule/profile/JoshAdler.png',
											'name'			=> 'Josh Adler', 
											'designation'	=> 'VP, Growth & Entrepreneurship, African Leadership Academy'
										],
										[
											'pic'			=> '/img/schedule/profile/KissekaSamson.png',
											'name'			=> 'Kisseka Samson', 
											'designation'	=> 'Founder, Hello Mushrooms'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/NoahWalakira.png',
											'name'			=> 'Noah Walakira', 
											'designation'	=> 'CEO, Namirember Sweater Makers'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/KolawoleOlajide.png',
											'name'			=> 'Kolawole Olajide', 
											'designation'	=> 'Founder & CTO, Bridge labs'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/VanessaShemIshimwe.png',
											'name'			=> 'Vanessa Shem Ishimwe', 
											'designation'	=> 'Founder, YIDA'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/SalySarr.png',
											'name'			=> 'Saly Sarr', 
											'designation'	=> 'Founder, SallyMaaShoes'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlaaMoatamed.png',
											'name'			=> 'Alaa Moatamed', 
											'designation'	=> 'Co-Founder & Head of Sales, Presto'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlyAbdelazan.png',
											'name'			=> 'Aly Abdelazan', 
											'designation'	=> 'Founder, Teens Club'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AseituOliviaKipo.png',
											'name'			=> 'Aseitu Olivia Kipo', 
											'designation'	=> 'Founder & CEO, Kobaa-Ok Enterprise'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/Busola.png',
											'name'			=> 'Busola Majekodunmi', 
											'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
										], 
									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Group 3', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Breakaway Room 3',
									'room_info'		=> 	'Students will get into different break out rooms of 5 each and share their challenge / opportunity indepth with their peers, and in the presence of an Anzisha fellow. During this session, students will receive indepth feedback on their problem solving process and well as conclusions andbusiness ideas. This feedback session will provide students with the tools to interogate their problem further, as this will bring them closer to a sustainable solution (idea for a venture)',
									'link'			=>	'/room/101',
									'speakers'		=> 	[	
										/*
										Ideally also a table and this array should hold the user id's.
										Having a table means we have access to any other relevant data if necessary,
										such as email, phone no, website, etc.
										*/

										[
											'pic'			=> '/img/schedule/profile/JoshAdler.png',
											'name'			=> 'Josh Adler', 
											'designation'	=> 'VP, Growth & Entrepreneurship, African Leadership Academy'
										],
										[
											'pic'			=> '/img/schedule/profile/KissekaSamson.png',
											'name'			=> 'Kisseka Samson', 
											'designation'	=> 'Founder, Hello Mushrooms'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/NoahWalakira.png',
											'name'			=> 'Noah Walakira', 
											'designation'	=> 'CEO, Namirember Sweater Makers'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/KolawoleOlajide.png',
											'name'			=> 'Kolawole Olajide', 
											'designation'	=> 'Founder & CTO, Bridge labs'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/VanessaShemIshimwe.png',
											'name'			=> 'Vanessa Shem Ishimwe', 
											'designation'	=> 'Founder, YIDA'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/SalySarr.png',
											'name'			=> 'Saly Sarr', 
											'designation'	=> 'Founder, SallyMaaShoes'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlaaMoatamed.png',
											'name'			=> 'Alaa Moatamed', 
											'designation'	=> 'Co-Founder & Head of Sales, Presto'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlyAbdelazan.png',
											'name'			=> 'Aly Abdelazan', 
											'designation'	=> 'Founder, Teens Club'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AseituOliviaKipo.png',
											'name'			=> 'Aseitu Olivia Kipo', 
											'designation'	=> 'Founder & CEO, Kobaa-Ok Enterprise'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/Busola.png',
											'name'			=> 'Busola Majekodunmi', 
											'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
										], 
									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Group 4', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Breakaway Room 4',
									'room_info'		=> 	'Students will get into different break out rooms of 5 each and share their challenge / opportunity indepth with their peers, and in the presence of an Anzisha fellow. During this session, students will receive indepth feedback on their problem solving process and well as conclusions andbusiness ideas. This feedback session will provide students with the tools to interogate their problem further, as this will bring them closer to a sustainable solution (idea for a venture)',
									'link'			=>	'/room/101',
									'speakers'		=> 	[	
										/*
										Ideally also a table and this array should hold the user id's.
										Having a table means we have access to any other relevant data if necessary,
										such as email, phone no, website, etc.
										*/

										[
											'pic'			=> '/img/schedule/profile/JoshAdler.png',
											'name'			=> 'Josh Adler', 
											'designation'	=> 'VP, Growth & Entrepreneurship, African Leadership Academy'
										],
										[
											'pic'			=> '/img/schedule/profile/KissekaSamson.png',
											'name'			=> 'Kisseka Samson', 
											'designation'	=> 'Founder, Hello Mushrooms'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/NoahWalakira.png',
											'name'			=> 'Noah Walakira', 
											'designation'	=> 'CEO, Namirember Sweater Makers'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/KolawoleOlajide.png',
											'name'			=> 'Kolawole Olajide', 
											'designation'	=> 'Founder & CTO, Bridge labs'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/VanessaShemIshimwe.png',
											'name'			=> 'Vanessa Shem Ishimwe', 
											'designation'	=> 'Founder, YIDA'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/SalySarr.png',
											'name'			=> 'Saly Sarr', 
											'designation'	=> 'Founder, SallyMaaShoes'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlaaMoatamed.png',
											'name'			=> 'Alaa Moatamed', 
											'designation'	=> 'Co-Founder & Head of Sales, Presto'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlyAbdelazan.png',
											'name'			=> 'Aly Abdelazan', 
											'designation'	=> 'Founder, Teens Club'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AseituOliviaKipo.png',
											'name'			=> 'Aseitu Olivia Kipo', 
											'designation'	=> 'Founder & CEO, Kobaa-Ok Enterprise'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/Busola.png',
											'name'			=> 'Busola Majekodunmi', 
											'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
										], 
									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Group 5', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Breakaway Room 5',
									'room_info'		=> 	'Students will get into different break out rooms of 5 each and share their challenge / opportunity indepth with their peers, and in the presence of an Anzisha fellow. During this session, students will receive indepth feedback on their problem solving process and well as conclusions andbusiness ideas. This feedback session will provide students with the tools to interogate their problem further, as this will bring them closer to a sustainable solution (idea for a venture)',
									'link'			=>	'/room/101',
									'speakers'		=> 	[	
										/*
										Ideally also a table and this array should hold the user id's.
										Having a table means we have access to any other relevant data if necessary,
										such as email, phone no, website, etc.
										*/

										[
											'pic'			=> '/img/schedule/profile/JoshAdler.png',
											'name'			=> 'Josh Adler', 
											'designation'	=> 'VP, Growth & Entrepreneurship, African Leadership Academy'
										],
										[
											'pic'			=> '/img/schedule/profile/KissekaSamson.png',
											'name'			=> 'Kisseka Samson', 
											'designation'	=> 'Founder, Hello Mushrooms'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/NoahWalakira.png',
											'name'			=> 'Noah Walakira', 
											'designation'	=> 'CEO, Namirember Sweater Makers'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/KolawoleOlajide.png',
											'name'			=> 'Kolawole Olajide', 
											'designation'	=> 'Founder & CTO, Bridge labs'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/VanessaShemIshimwe.png',
											'name'			=> 'Vanessa Shem Ishimwe', 
											'designation'	=> 'Founder, YIDA'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/SalySarr.png',
											'name'			=> 'Saly Sarr', 
											'designation'	=> 'Founder, SallyMaaShoes'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlaaMoatamed.png',
											'name'			=> 'Alaa Moatamed', 
											'designation'	=> 'Co-Founder & Head of Sales, Presto'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlyAbdelazan.png',
											'name'			=> 'Aly Abdelazan', 
											'designation'	=> 'Founder, Teens Club'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AseituOliviaKipo.png',
											'name'			=> 'Aseitu Olivia Kipo', 
											'designation'	=> 'Founder & CEO, Kobaa-Ok Enterprise'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/Busola.png',
											'name'			=> 'Busola Majekodunmi', 
											'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
										], 
									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Group 6', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Breakaway Room 6',
									'room_info'		=> 	'Students will get into different break out rooms of 5 each and share their challenge / opportunity indepth with their peers, and in the presence of an Anzisha fellow. During this session, students will receive indepth feedback on their problem solving process and well as conclusions andbusiness ideas. This feedback session will provide students with the tools to interogate their problem further, as this will bring them closer to a sustainable solution (idea for a venture)',
									'link'			=>	'/room/101',
									'speakers'		=> 	[	
										/*
										Ideally also a table and this array should hold the user id's.
										Having a table means we have access to any other relevant data if necessary,
										such as email, phone no, website, etc.
										*/

										[
											'pic'			=> '/img/schedule/profile/JoshAdler.png',
											'name'			=> 'Josh Adler', 
											'designation'	=> 'VP, Growth & Entrepreneurship, African Leadership Academy'
										],
										[
											'pic'			=> '/img/schedule/profile/KissekaSamson.png',
											'name'			=> 'Kisseka Samson', 
											'designation'	=> 'Founder, Hello Mushrooms'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/NoahWalakira.png',
											'name'			=> 'Noah Walakira', 
											'designation'	=> 'CEO, Namirember Sweater Makers'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/KolawoleOlajide.png',
											'name'			=> 'Kolawole Olajide', 
											'designation'	=> 'Founder & CTO, Bridge labs'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/VanessaShemIshimwe.png',
											'name'			=> 'Vanessa Shem Ishimwe', 
											'designation'	=> 'Founder, YIDA'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/SalySarr.png',
											'name'			=> 'Saly Sarr', 
											'designation'	=> 'Founder, SallyMaaShoes'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlaaMoatamed.png',
											'name'			=> 'Alaa Moatamed', 
											'designation'	=> 'Co-Founder & Head of Sales, Presto'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlyAbdelazan.png',
											'name'			=> 'Aly Abdelazan', 
											'designation'	=> 'Founder, Teens Club'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AseituOliviaKipo.png',
											'name'			=> 'Aseitu Olivia Kipo', 
											'designation'	=> 'Founder & CEO, Kobaa-Ok Enterprise'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/Busola.png',
											'name'			=> 'Busola Majekodunmi', 
											'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
										], 
									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Group 7', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Breakaway Room 7',
									'room_info'		=> 	'Students will get into different break out rooms of 5 each and share their challenge / opportunity indepth with their peers, and in the presence of an Anzisha fellow. During this session, students will receive indepth feedback on their problem solving process and well as conclusions andbusiness ideas. This feedback session will provide students with the tools to interogate their problem further, as this will bring them closer to a sustainable solution (idea for a venture)',
									'link'			=>	'/room/101',
									'speakers'		=> 	[	
										/*
										Ideally also a table and this array should hold the user id's.
										Having a table means we have access to any other relevant data if necessary,
										such as email, phone no, website, etc.
										*/

										[
											'pic'			=> '/img/schedule/profile/JoshAdler.png',
											'name'			=> 'Josh Adler', 
											'designation'	=> 'VP, Growth & Entrepreneurship, African Leadership Academy'
										],
										[
											'pic'			=> '/img/schedule/profile/KissekaSamson.png',
											'name'			=> 'Kisseka Samson', 
											'designation'	=> 'Founder, Hello Mushrooms'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/NoahWalakira.png',
											'name'			=> 'Noah Walakira', 
											'designation'	=> 'CEO, Namirember Sweater Makers'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/KolawoleOlajide.png',
											'name'			=> 'Kolawole Olajide', 
											'designation'	=> 'Founder & CTO, Bridge labs'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/VanessaShemIshimwe.png',
											'name'			=> 'Vanessa Shem Ishimwe', 
											'designation'	=> 'Founder, YIDA'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/SalySarr.png',
											'name'			=> 'Saly Sarr', 
											'designation'	=> 'Founder, SallyMaaShoes'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlaaMoatamed.png',
											'name'			=> 'Alaa Moatamed', 
											'designation'	=> 'Co-Founder & Head of Sales, Presto'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlyAbdelazan.png',
											'name'			=> 'Aly Abdelazan', 
											'designation'	=> 'Founder, Teens Club'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AseituOliviaKipo.png',
											'name'			=> 'Aseitu Olivia Kipo', 
											'designation'	=> 'Founder & CEO, Kobaa-Ok Enterprise'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/Busola.png',
											'name'			=> 'Busola Majekodunmi', 
											'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
										], 
									]
								],
								[	//Room 1 - Claims
									'room_name'		=> 	'Group 8', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'Breakaway Room 8',
									'room_info'		=> 	'Students will get into different break out rooms of 5 each and share their challenge / opportunity indepth with their peers, and in the presence of an Anzisha fellow. During this session, students will receive indepth feedback on their problem solving process and well as conclusions andbusiness ideas. This feedback session will provide students with the tools to interogate their problem further, as this will bring them closer to a sustainable solution (idea for a venture)',
									'link'			=>	'/room/101',
									'speakers'		=> 	[	
										/*
										Ideally also a table and this array should hold the user id's.
										Having a table means we have access to any other relevant data if necessary,
										such as email, phone no, website, etc.
										*/

										[
											'pic'			=> '/img/schedule/profile/JoshAdler.png',
											'name'			=> 'Josh Adler', 
											'designation'	=> 'VP, Growth & Entrepreneurship, African Leadership Academy'
										],
										[
											'pic'			=> '/img/schedule/profile/KissekaSamson.png',
											'name'			=> 'Kisseka Samson', 
											'designation'	=> 'Founder, Hello Mushrooms'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/NoahWalakira.png',
											'name'			=> 'Noah Walakira', 
											'designation'	=> 'CEO, Namirember Sweater Makers'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/KolawoleOlajide.png',
											'name'			=> 'Kolawole Olajide', 
											'designation'	=> 'Founder & CTO, Bridge labs'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/VanessaShemIshimwe.png',
											'name'			=> 'Vanessa Shem Ishimwe', 
											'designation'	=> 'Founder, YIDA'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/SalySarr.png',
											'name'			=> 'Saly Sarr', 
											'designation'	=> 'Founder, SallyMaaShoes'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlaaMoatamed.png',
											'name'			=> 'Alaa Moatamed', 
											'designation'	=> 'Co-Founder & Head of Sales, Presto'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AlyAbdelazan.png',
											'name'			=> 'Aly Abdelazan', 
											'designation'	=> 'Founder, Teens Club'																					
										],
										[
											'pic'			=> '/img/schedule/profile/AseituOliviaKipo.png',
											'name'			=> 'Aseitu Olivia Kipo', 
											'designation'	=> 'Founder & CEO, Kobaa-Ok Enterprise'																					
										], 
										[
											'pic'			=> '/img/schedule/profile/Busola.png',
											'name'			=> 'Busola Majekodunmi', 
											'designation'	=> 'Entrepreneurial Leadership Faculty, African Leadership Academy'																					
										], 
									]
								],
												]
						],
						[	//Break 2
							'title'			=> 'break',
							'image'			=> '/img/schedule/seal-01.jpg',
							'start_time'	=> '16:00',
							'end_time'		=> '16:45',
							'interval'		=>	true
						],						
						[	//Row 4
							'title'			=> 'Session 3',
							'image'			=> '/img/schedule/session4.png',
							'start_time'	=> '16:45',
							'end_time'		=> '17:45',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
								[	//Room 1 - Claims
									'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
									'room_desc'		=> 	'The Realities of Starting Your Own Business',
									'room_info'		=> 	'4 young entrepreneurs talk about their ventures in a moderated conversation.',
									'link'			=>	'/room/99',
									'speakers'		=> 	[	
										/*
										Ideally also a table and this array should hold the user id's.
										Having a table means we have access to any other relevant data if necessary,
										such as email, phone no, website, etc.
										*/

									
									[
										'pic'			=> '/img/schedule/profile/SalySarr.png',
										'name'			=> 'Saly Sarr', 
										'designation'	=> 'Founder, SallyMaaShoes'																					
									],
									[
										'pic'			=> '/img/schedule/profile/AlaaMoatamed.png',
										'name'			=> 'Alaa Moatamed', 
										'designation'	=> 'Co-Founder & Head of Sales, Presto'																					
									],
									[
										'pic'			=> '/img/schedule/profile/AseituOliviaKipo.png',
										'name'			=> 'Aseitu Olivia Kipo', 
										'designation'	=> 'Founder & CEO, Kobaa-Ok Enterprise'																					
									],
									[
										'pic'			=> '/img/schedule/profile/JoshuaArmah.png',
										'name'			=> 'Joshua Armah', 
										'designation'	=> 'Founder, PopKing Ghana'																					
									], 



									]
								],
												]
						],
						[	//Row 2
							'title'			=> 'The Realities of Starting Your Own Business',
							'image'			=> '/img/schedule/session5.png',
							'start_time'	=> '18:00',
							'end_time'		=> '18:45',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Main Room', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Keynote',
														'room_info'		=> 	'The Launchpad will come together with this session during which students will learn about the status of entrepreneurship on the continent and why it\'s important that they want to become entrepreneurs.',
														'link'			=>	'/room/99',
														'speakers'		=> 	[	
															/*
															Ideally also a table and this array should hold the user id's.
															Having a table means we have access to any other relevant data if necessary,
															such as email, phone no, website, etc.
															*/
 
															[
																'pic'			=> '/img/schedule/profile/JoshuaArmah.png',
																'name'			=> 'Joshua Armah', 
																'designation'	=> 'Founder, PopKing Ghana'																					
															], 



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
