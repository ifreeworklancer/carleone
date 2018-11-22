<?php
$app_title = 'Carleone';
$phone = '+380 99 333 77 00';
$phone_link = str_replace([' ', '(', ')', '-'], '', $phone);
$header_nav_menu = [
	'comparison' => 'Сравнить цены',
	'advantages' => 'Почему мы?',
	'contacts' => 'Наши офисы',
];

$nav = [
	'pain' => 'Вы хотите хорошее авто за адекватные деньги?',
	'comparison' => 'Сравните цены на некоторые популярные модели',
	'sale' => 'Оставьте заявку и мы найдем авто по лучшей цене',
	'reviews' => 'Отзывы',
	'saving' => 'Зачем переплачивать?',
	'stages' => 'Сотрудничество',
	'teams' => 'Команда',
	'contacts' => 'Контакты',
];

$intro = [
	'title' => 'Подберем авто из США под Ваш бюджет',
	'subtitle' => 'Берем всё на себя: от от выбора качественного авто, доставки и растаможки, до постановки автомобиля на украинские номера',
];

$advantages = [
	'list' =>  [
		[   
			'item' => 'Получится <span class="text-primary font-weight-bold">дешевле на 30-50%</span>,чем покупать в Украине.  Даже с учетом доставки и растаможки',
		],
		[   
			'item' => 'Проверяем авто в 11 этапов. Привезем Вам <span class="text-primary font-weight-bold">качественный автомобиль</span>, который не нужно будет возить на СТО каждый месяц',
		],
		[   
			'item' => 'Вам не нужно платить всю сумму сразу. Оплата осуществляется в несколько этапов',
		],
	],
];

$pain = [
    'title' => 'Вы хотите хорошее авто за адекватные деньги?',
	'subtitle' => 'Но украинские реалии таковы, что:',
	'list' => [
		[   
			'item' => 'В интернете много недобросовестных продавцов. Фото в объявлении красивое и отличное описание - а на самом деле, данной машины не существует или машина битая с крученным пробегом в 2-4 раза',
		],
		[   
			'item' => 'Приезжаете смотреть авто и а оно абсолютно не товарного вида. Хотя хозяин уверяет, что машина “как новая”',
		],
		[   
			'item' => 'Цены очень завышены за стоимость машины на украинском рынке - в США можно купить машину с чистой историей и на несколько лет новее',
		],
	],
	'secondary_title' => 'И что остается?',
	'secondary_subtitle' => 'Переплачивать за автомобиль и каждый месяц отвозить ее на СТО?	Или еще подкопить и взять что-то нормальное?...',
];

$response = [
	'title' => 'Нет, это не выход',
	'text' => 'Вы тяжело работали и отложили приличную сумму. И заслуживаете за эти деньги получить качественную иномарку, которая <span class="text-primary font-weight-bold">престижно выглядит и долго прослужит!</span>',
];

$comparison = [
    'title' => 'Сравните цены некоторые популярные модели',
	'subtitle' => 'Которые мы уже пригнали для наших клиентов',
	'slider_items' => [
		[
			'card' => [
				[
					'title' => 'Peugeot 508 BlueHDI 2016',
					'image' => '../../images/content/comparison/comparison-item-1.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '14 900',
					'priceInUSA' => '8 500',
				],
				[
					'title' => 'Volkswagen Arteon 2.0TSI AT Motion Elegance 2017',
					'image' => '../../images/content/comparison/comparison-item-2.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '52 500',
					'priceInUSA' => '35 500',
				],
				[
					'title' => 'Mitsubishi Outlander 2010',
					'image' => '../../images/content/comparison/comparison-item-3.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '8 500',
					'priceInUSA' => ' 6 300',
				],
				[
					'title' => 'Ford Mondeo 2.0 2011',
					'image' => '../../images/content/comparison/comparison-item-4.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '13 900',
					'priceInUSA' => '9 200',
				],
			],
		],
		[
			'card' => [
				[
					'title' => 'Peugeot 508 BlueHDI 2016',
					'image' => '../../images/content/comparison/comparison-item-1.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '14 900',
					'priceInUSA' => '8 500',
				],
				[
					'title' => 'Volkswagen Arteon 2.0TSI AT Motion Elegance 2017',
					'image' => '../../images/content/comparison/comparison-item-2.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '52 500',
					'priceInUSA' => '35 500',
				],
				[
					'title' => 'Mitsubishi Outlander 2010',
					'image' => '../../images/content/comparison/comparison-item-3.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '8 500',
					'priceInUSA' => ' 6 300',
				],
				[
					'title' => 'Ford Mondeo 2.0 2011',
					'image' => '../../images/content/comparison/comparison-item-4.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '13 900',
					'priceInUSA' => '9 200',
				],
			],
		],
		[
			'card' => [
				[
					'title' => 'Peugeot 508 BlueHDI 2016',
					'image' => '../../images/content/comparison/comparison-item-1.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '14 900',
					'priceInUSA' => '8 500',
				],
				[
					'title' => 'Volkswagen Arteon 2.0TSI AT Motion Elegance 2017',
					'image' => '../../images/content/comparison/comparison-item-2.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '52 500',
					'priceInUSA' => '35 500',
				],
				[
					'title' => 'Mitsubishi Outlander 2010',
					'image' => '../../images/content/comparison/comparison-item-3.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '8 500',
					'priceInUSA' => ' 6 300',
				],
				[
					'title' => 'Ford Mondeo 2.0 2011',
					'image' => '../../images/content/comparison/comparison-item-4.jpg',
					'logoInUa' => '../../images/content/comparison/comparison-logo-1.png',
					'logoInUSA' => '../../images/content/comparison/comparison-logo-2.png',
					'priceInUA' => '13 900',
					'priceInUSA' => '9 200',
				],
			],
		],
	],
	
];

$sale = [
	'title' => 'Оставьте заявку, мы найдем его для Вас по лучшей цене',
	'subtitle' => 'Мечтаете об  авто',
];

$reviews = [
	'title' => 'Отзывы',
	'items' => [
		[	
			'image' => '../../images/content/reviews/reviews-item-1.jpg',
			'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed eiusmod tempor incididunt ut labore et dolore na aliqua. Ut enim ad , quis nostrud exercitation rem ipsum dolor sit amet, consectet eiusmod tempor incididunt sed fot.Lorem ipsum dolor sit amet, consectetur adipiscing sed eiusmod tempor incididunt ut labore et dolore na aliqua. Ut enim ad.',
			'description' => 'Александр, 32 года, бизнесмен',
		],
		[	
			'image' => '../../images/content/reviews/reviews-item-1.jpg',
			'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed eiusmod tempor incididunt ut labore et dolore na aliqua. Ut enim ad , quis nostrud exercitation rem ipsum dolor sit amet, consectet eiusmod tempor incididunt sed fot.',
			'description' => 'Александр, 32 года, бизнесмен',
		],
		[	
			'image' => '../../images/content/reviews/reviews-item-1.jpg',
			'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed eiusmod tempor incididunt ut labore et dolore na aliqua. Ut enim ad , quis nostrud exercitation rem.',
			'description' => 'Александр, 32 года, бизнесмен',
		],
	],
];

$saving = [
	'items' => [
		[	
			'title' => 'Почему стоит работать с нами?',
			'subtitle' => 'Можно не пользоваться нашими услугами и пригнать себе авто самостоятельно. Но учтите, с чем Вам придется столкнуться:',   
			'image' => '../../images/content/saving/saving-item-1.jpg',
			'list' => '<ul class="custom-list custom-list--light"><li>Мы работаем только на проверенных аукционах</li><li>Мы проверяем авто в 11 этапов, учитывая все нюансы: количество владельцев, историю обслуживания, степень повреждений и т.д.</li><li>Оформляя покупку, Вы можете упустить какие-то документы. Мы снимаем с Вас эту головную боль и берем оформление на себя. Вы можете быть уверены, что мы ничего не упустим</li><li>Когда машина уже тут, нужно её растаможить и отремонтировать. Это может затянуться надолго, но с нами получится в 2-3 раза быстрее и дешевле, так как мы работаем с проверенными СТО</li></ul>',
		],
		[	
			'title' => 'За счет чего цена ниже?',
			'subtitle' => 'На это влияет несколько факторов:',   
			'image' => '../../images/content/saving/saving-item-2.jpg',
			'list' => '<ul class="custom-list custom-list--light"><li><div class="text-primary">Рынок США</div> В Штатах автомобили в целом более доступны. А в Украине их в основном продают перекупщики, по сильно завышенной цене</li><li><div class="text-primary">Аукционы</div> Мы покупаем авто на специальных аукционах. Цены там низкие, потому что большинство машин требуют ремонта. А ремонт в Штатах стоит очень дорого</li><li><div class="text-primary">Льготный закон</div> Пока он еще действует в Украине, нужно пользоваться моментом и пригнать себе качественное авто из США</li></ul>',
		],
		[	
			'title' => 'Мы всегда знаем,<br/> где Ваш автомобиль',
			'subtitle' => 'Пока автомобиль едет из США:',   
			'image' => '../../images/content/saving/saving-item-3.jpg',
			'list' => '<ul class="custom-list custom-list--light"><li>Вы в любой момент можете набрать своего персонального менеджера чтобы уточнить,где авто и как скоро прибудет в Украину</li></ul>',
		],
	],
];

$stages = [
	'title' => 'Работая с нами, не просто получаете помощь на всех этапах',
	'subtitle' => 'Мы берем полностью все процессы на себя:',
	'items' => [
		[
			'svg' => '<svg width="30" height="30"><use xlink:href="#search-icon"></use></svg>',
			'title' => 'Подбираем',
			'text' => 'Авто на проверенных аукционах. Находим машину в оптимальном состоянии и по лучшей цене',
		],
		[
			'svg' => '<svg width="30" height="30"><use xlink:href="#checked-icon"></use></svg>',
			'title' => 'Проверяем',
			'text' => 'Автомобиль в 11 этапов. Вы будете в курсе как обслуживалось это авто, кто и как им пользовался, в каком состоянии ходовая и тд.',
		],
		[
			'svg' => '<svg width="30" height="30"><use xlink:href="#edit-icon"></use></svg>',
			'title' => 'Оформляем',
			'text' => 'Все необходимые документы для покупки автомобиля в США',
		],
		[
			'svg' => '<svg width="25" height="30"><use xlink:href="#control-icon"></use></svg>',
			'title' => 'Контролируем',
			'text' => 'Логистику автомобиля сначала по США, а потом обеспечиваем его безопасную доставку в Украину',
		],
		[
			'svg' => '<svg width="30" height="20"><use xlink:href="#clearance-icon"></use></svg>',
			'title' => 'Растамаживаем',
			'text' => 'И готовим все необходимые документы для растаможки',
		],
		[
			'svg' => '<svg width="40" height="30"><use xlink:href="#delivery-icon"></use></svg>',
			'title' => 'Доставляем',
			'text' => 'Автомобиль и передаем его Вам. А также ключи и все необходимые документы к нему',
		],
	],
	'tabs' => [
		[
			'image' => '../../images/content/stages/stages-tabs-item-1.png',
		],
		[
			'image' => '../../images/content/stages/stages-tabs-item-2.png',
		],
		[
			'image' => '../../images/content/stages/stages-tabs-item-3.png',
		],
		[
			'image' => '../../images/content/stages/stages-tabs-item-4.png',
		],
		[
			'image' => '../../images/content/stages/stages-tabs-item-5.png',
		],
		[
			'image' => '../../images/content/stages/stages-tabs-item-6.png',
		],
	],
];

$order = [
	'title' => 'Снимите с себя головную боль и позвольте нам подобрать авто Вашей мечты!',
];

$teams = [
	'title' => 'Наша команда',
	'subtitle' => 'Высококлассые профессионалы своего дела',
	'items' => [
		[
			'image' => '../../images/content/teams/teams-item-1.jpg',
			'name' => 'Александр Петров',
		],
		[
			'image' => '../../images/content/teams/teams-item-1.jpg',
			'name' => 'Александр Петров',
		],
		[
			'image' => '../../images/content/teams/teams-item-1.jpg',
			'name' => 'Александр Петров',
		],
		[
			'image' => '../../images/content/teams/teams-item-1.jpg',
			'name' => 'Александр Петров',
		],
	],
];

$contacts = [
	'title' => 'Наш офис в Киеве',
	'subtitle' => 'Наши контакты',
	'items' => [
		[	
			'name' => 'place',
			'info' => 'г. Киев, Дніпровська наб., 26',
			'link' => 'https://www.google.com.ua/maps/place/%D0%94%D0%BD%D0%B5%D0%BF%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BD%D0%B0%D0%B1%D0%B5%D1%80%D0%B5%D0%B6%D0%BD%D0%B0%D1%8F,+26,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.3932892,30.61484,19.75z/data=!4m13!1m7!3m6!1s0x40d4c5b6229edda1:0x7f8f57a6abd36eee!2z0JTQvdC10L_RgNC-0LLRgdC60LDRjyDQvdCw0LHQtdGA0LXQttC90LDRjywgMjYsINCa0LjQtdCyLCAwMjAwMA!3b1!8m2!3d50.3932735!4d30.615095!3m4!1s0x40d4c5b6229edda1:0x7f8f57a6abd36eee!8m2!3d50.3932735!4d30.615095',
		],
		[	
			'name' => 'phone',
			'info' => '+380 99 777 33 44',
			'link' => 'tel:+380997773344',
		],
		[	
			'name' => 'email',
			'info' => 'corleone@gmail.com',
			'link' => 'mailto:corleone@gmail.com',
		],
	],
];