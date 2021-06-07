<?php
//Assumes that the data here is read from the database and sorted according to date ASCENDING:
$rows =	[
			'title' => 'Business Partner Conference',
			'days' =>
			[
				//Day 1:
				[
					'session_title'		=> 'CONFERENCE PROGRAMME FOR WE-LINK', 	//should not be mandatory
					'date'				=> '2021-06-22',	//required - let's us know which tab it should be placed in
					'sessions'			=>
					[
						[	//Row 2
							'title'			=> 'Session 1',
							'image'			=> '/images/schedule-icons/SET C-01.jpg',
							'start_time'	=> '12:30',
							'end_time'		=> '13:30',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Room 1', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Claims',
														'room_info'		=> 	'Who We Are and What We Do',
														'link'			=>	'#',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/
																			[
																				'pic'			=> '/images/profile/Reynier-Rautenbach.jpg',
																				'name'			=> 'Reynier Rautenbach', 
																				'designation'	=> ' Head: General Claims'
																			], 
																			[
																				'pic'			=> '/images/profile/Ellen-Engelbrecht.jpg',
																				'name'			=> 'Ellen Engelbrecht', 
																				'designation'	=> 'Head: Claims Operations'																					
																			], 
																			[
																				'pic'			=> '/images/profile/Kishore-Maharaj.jpg',
																				'name'			=> 'Kishore Maharaj', 
																				'designation'	=> 'Head: Group Services'
																			]
																		]
													],
													[	//Room 2 - Underwriting														
														'room_name'		=> 	'Room 2',
														'room_desc'		=> 	'Underwriting',
														'room_info'		=> 	'Policy Insights and Managing Risks',
														'link'			=>	'#',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/
																			[
																				'pic'			=> '/images/profile/Sedick-Isaacs.jpg',
																				'name'			=> 'Sedick Isaacs', 
																				'designation'	=> 'Head: Business Support Service'
																			], 
																			[
																				'pic'			=> '/images/profile/Shupikayi-Kasayi.jpg',
																				'name'			=> 'Shupikayi Kasayi', 
																				'designation'	=> 'Head: Centre of Excellence'																					
																			], 
																			[
																				'pic'			=> '/images/profile/Robert-Hodgkiss.jpg',
																				'name'			=> 'Rob Hodgkiss', 
																				'designation'	=> 'Head: Risk Engineering'
																			]
																		]
													],
													[	//Room 3 - Product														
														'room_name'		=> 	'Room 3',
														'room_desc'		=> 	'Product',
														'room_info'		=> 	'Agri Offering',
														'link'			=>	'#',
														'speakers'		=> 	[
																				[
																					'pic'			=> '/images/profile/Pieter-Pieterse.jpg',
																					'name'			=> 'Pieter Pieterse', 
																					'designation'	=> 'Regional Manager: Free State Region'
																				], 
																				[
																					'pic'			=> '/images/profile/Eddie-Mc-Kenzie.jpg',
																					'name'			=> 'Eddie Mc Kenzie', 
																					'designation'	=> 'BDM Production Underwriter'																					
																				]
																		]
													],
													[	//Room 4 - Bryte Life														
														'room_name'		=> 	'Room 4',
														'room_desc'		=> 	'Bryte Life',
														'room_info'		=> 	'Bryte Life Offering',
														'link'			=>	'#',
														'speakers'		=> 	[
																				[
																					'pic'			=> '/images/profile/Moroesi-Mokhabi.jpg',
																					'name'			=> 'Moroesi Mokhabi', 
																					'designation'	=> 'Business Consultant'
																				]
																		]
													],
													[	//Room 5 - Bryte Risk Services Botswana
														'room_name'		=> 	'Room 5',
														'room_desc'		=> 	'Bryte Risk Services Botswana',
														'room_info'		=> 	'New Product offering - Bonds & Guarantees',
														'link'			=>	'#',
														'speakers'		=> 	[
																				[
																					'pic'			=> '/images/profile/Dziki-Nganunu.jpg',
																					'name'			=> 'Dziki Nganunu', 
																					'designation'	=> 'Chief Executive Officer: Botswana'
																				],
																				[
																					'pic'			=> '/images/profile/Lukas-Marquart.jpg',
																					'name'			=> 'Lukas Marquart', 
																					'designation'	=> 'Director: PCBS Construction & Customs'
																				]
																		]
													],
												]
						],
						[	//Break 1
							'title'			=> 'break',
							'image'			=> '/images/schedule-icons/seal-01.jpg',
							'start_time'	=> '13:30',
							'end_time'		=> '13:45',
							'interval'		=>	true
						],
						[	//Row 3
							'title'			=> 'Session 2',
							'image'			=> '/images/schedule-icons/SET C-02.jpg',
							'start_time'	=> '13:45',
							'end_time'		=> '14:45',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Room 1', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Claims',
														'room_info'		=> 	'Who We Are and What We Do',
														'link'			=>	'#',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/
																			[
																				'pic'			=> '/images/profile/Reynier-Rautenbach.jpg',
																				'name'			=> 'Reynier Rautenbach', 
																				'designation'	=> ' Head: General Claims'
																			], 
																			[
																				'pic'			=> '/images/profile/Ellen-Engelbrecht.jpg',
																				'name'			=> 'Ellen Engelbrecht', 
																				'designation'	=> 'Head: Claims Operationsr'																					
																			], 
																			[
																				'pic'			=> '/images/profile/Kishore-Maharaj.jpg',
																				'name'			=> 'Kishore Maharaj', 
																				'designation'	=> 'Head: Group Services'
																			]
																		]
													],
													[	//Room 2 - Underwriting														
														'room_name'		=> 	'Room 2',
														'room_desc'		=> 	'Underwriting',
														'room_info'		=> 	'Policy Insights and Managing Risks',
														'link'			=>	'#',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/
																			[
																				'pic'			=> '/images/profile/Sedick-Isaacs.jpg',
																				'name'			=> 'Sedick Isaacs', 
																				'designation'	=> 'Head: Business Support Service'
																			], 
																			[
																				'pic'			=> '/images/profile/Shupikayi-Kasayi.jpg',
																				'name'			=> 'Shupikayi Kasayi', 
																				'designation'	=> 'Head: Centre of Excellence'																					
																			], 
																			[
																				'pic'			=> '/images/profile/Robert-Hodgkiss.jpg',
																				'name'			=> 'Rob Hodgkiss', 
																				'designation'	=> 'Head: Risk Engineering'
																			]
																		]
													],
													[	//Room 3 - Product														
														'room_name'		=> 	'Room 3',
														'room_desc'		=> 	'Product',
														'room_info'		=> 	'Agri Offering',
														'link'			=>	'#',
														'speakers'		=> 	[
																				[
																					'pic'			=> '/images/profile/Pieter-Pieterse.jpg',
																					'name'			=> 'Pieter Pieterse', 
																					'designation'	=> 'Regional Manager: Free State Region'
																				], 
																				[
																					'pic'			=> '/images/profile/Eddie-Mc-Kenzie.jpg',
																					'name'			=> 'Eddie Mc Kenzie', 
																					'designation'	=> 'BDM Production Underwriter'																					
																				]
																		]
													],
													[	//Room 4 - Bryte Life														
														'room_name'		=> 	'Room 4',
														'room_desc'		=> 	'Bryte Life',
														'room_info'		=> 	'Bryte Life Offering',
														'link'			=>	'#',
														'speakers'		=> 	[
																				[
																					'pic'			=> '/images/profile/Moroesi-Mokhabi.jpg',
																					'name'			=> 'Moroesi Mokhabi', 
																					'designation'	=> 'Business Consultant'
																				]
																		]
													],
													[	//Room 5 - Bryte Risk Services Botswana
														'room_name'		=> 	'Room 5',
														'room_desc'		=> 	'Bryte Risk Services Botswana',
														'room_info'		=> 	'Bespoke Solutions for the Hospitality Sector',
														'link'			=>	'#',
														'speakers'		=> 	[
																				[
																					'pic'			=> '/images/profile/Akanyang-Masole.jpg',
																					'name'			=> 'Akanyang Masole', 
																					'designation'	=> 'Production Underwriting Manager'
																				],
																				[
																					'pic'			=> '/images/profile/Lukas-Marquart.jpg',
																					'name'			=> 'Lukas Marquart', 
																					'designation'	=> 'Director: PCBS Construction & Customs'
																				]
																		]
													],
												]
						],
						[	//Break 2
							'title'			=> 'break',
							'image'			=> '/images/schedule-icons/seal-01.jpg',
							'start_time'	=> '14:45',
							'end_time'		=> '15:00',
							'interval'		=>	true
						],						
						[	//Row 4
							'title'			=> 'Session 3',
							'image'			=> '/images/schedule-icons/SET C-03.jpg',
							'start_time'	=> '15:00',
							'end_time'		=> '16:00',
							'interval'		=>	false,
							'rooms'			=> 	[	//Should have a value that determines the number of rooms available.
													[	//Room 1 - Claims
														'room_name'		=> 	'Room 1', //ideally a table and this should be an id referencing that row
														'room_desc'		=> 	'Claims',
														'room_info'		=> 	'Who We Are and What We Do',
														'link'			=>	'#',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/
																			[
																				'pic'			=> '/images/profile/Reynier-Rautenbach.jpg',
																				'name'			=> 'Reynier Rautenbach', 
																				'designation'	=> ' Head: General Claims'
																			], 
																			[
																				'pic'			=> '/images/profile/Ellen-Engelbrecht.jpg',
																				'name'			=> 'Ellen Engelbrecht', 
																				'designation'	=> 'Head: Claims Operations'																					
																			], 
																			[
																				'pic'			=> '/images/profile/Kishore-Maharaj.jpg',
																				'name'			=> 'Kishore Maharaj', 
																				'designation'	=> 'Head: Group Services'
																			]
																		]
													],
													[	//Room 2 - Underwriting														
														'room_name'		=> 	'Room 2',
														'room_desc'		=> 	'Underwriting',
														'room_info'		=> 	'Policy Insights and Managing Risks',
														'link'			=>	'#',
														'speakers'		=> 	[	
																			/*
																			Ideally also a table and this array should hold the user id's.
																			Having a table means we have access to any other relevant data if necessary,
																			such as email, phone no, website, etc.
																			*/
																			[
																				'pic'			=> '/images/profile/Sedick-Isaacs.jpg',
																				'name'			=> 'Sedick Isaacs', 
																				'designation'	=> 'Head: Business Support Service'
																			], 
																			[
																				'pic'			=> '/images/profile/Shupikayi-Kasayi.jpg',
																				'name'			=> 'Shupikayi Kasayi', 
																				'designation'	=> 'Head: Centre of Excellence'																					
																			], 
																			[
																				'pic'			=> '/images/profile/Robert-Hodgkiss.jpg',
																				'name'			=> 'Rob Hodgkiss', 
																				'designation'	=> 'Head: Risk Engineering'
																			]
																		]
													],
													[	//Room 3 - Product														
														'room_name'		=> 	'Room 3',
														'room_desc'		=> 	'Product',
														'room_info'		=> 	'Agri Offering',
														'link'			=>	'#',
														'speakers'		=> 	[
																				[
																					'pic'			=> '/images/profile/Pieter-Pieterse.jpg',
																					'name'			=> 'Pieter Pieterse', 
																					'designation'	=> 'Regional Manager: Free State Region'
																				], 
																				[
																					'pic'			=> '/images/profile/Eddie-Mc-Kenzie.jpg',
																					'name'			=> 'Eddie Mc Kenzie', 
																					'designation'	=> 'BDM Production Underwriter'																					
																				]
																		]
													],
													[	//Room 4 - Bryte Life														
														'room_name'		=> 	'Room 4',
														'room_desc'		=> 	'Bryte Life',
														'room_info'		=> 	'Bryte Life Offering',
														'link'			=>	'#',
														'speakers'		=> 	[
																				[
																					'pic'			=> '/images/profile/Moroesi-Mokhabi.jpg',
																					'name'			=> 'Moroesi Mokhabi', 
																					'designation'	=> 'Business Consultant'
																				]
																		]
													],
													[	//Room 5 - Bryte Risk Services Botswana
														'room_name'		=> 	'Room 5',
														'room_desc'		=> 	'Bryte Risk Services Botswana',
														'room_info'		=> 	'Claims and Procurement',
														'link'			=>	'#',
														'speakers'		=> 	[
																				[
																					'pic'			=> '/images/profile/John-Heldsinger.jpg',
																					'name'			=> 'John Heldsinger', 
																					'designation'	=> 'Claims Manager'
																				]
																		]
													],
												]
						],						
					]
				],
			]
		];