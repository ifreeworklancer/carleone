<?php
$app_title = 'Carleone';
$phone = '0 800 211 585';
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
	'subtitle' => 'Берем всё на себя: от выбора качественного авто, доставки и растаможки, до постановки автомобиля на украинские номера',
];

$advantages = [
	'list' => [
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
			'item' => 'Приезжаете смотреть авто и оно абсолютно не товарного вида. Хотя хозяин уверяет, что машина “как новая”',
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
	'title' => 'Сравните цены на некоторые популярные модели',
	'subtitle' => 'Которые мы уже пригнали для наших клиентов',
	'slider_items' => [
		[
			'card' => [
				[
					'title' => 'BMW 535i GT',
					'image' => '/images/content/comparison/comparison-item-1.jpg',
					'priceInUA' => '39 500',
					'priceInUSA' => '28 193',
					'settings' => [16500, 773, 98, 1250, 15, 450, 400, 7707, 1000, 28193, 350, 720],
				],
				[
					'title' => 'BMW X5 35I',
					'image' => '../../images/content/comparison/comparison-item-2.jpg',
					'priceInUA' => '34 000',
					'priceInUSA' => '24 054',
					'settings' => [13100, 739, 81, 1250, 15, 450, 400, 7018, 1000, 24054, 350, 583],
				],
				[
					'title' => 'FORD EDGE 2017',
					'image' => '../../images/content/comparison/comparison-item-3.jpg',
					'priceInUA' => '35 100',
					'priceInUSA' => '24 675',
					'settings' => [15200, 760, 91, 1250, 15, 450, 400, 5508, 1000, 24675, 350, 668],
				],
				[
					'title' => 'FORD FOCUS',
					'image' => '../../images/content/comparison/comparison-item-4.jpg',
					'priceInUA' => '13 900',
					'priceInUSA' => '7 489',
					'settings' => [2000, 473, 24, 1250, 15, 450, 400, 1876, 1000, 7489, 350, 104],
				],
			],
		],
		[
			'card' => [
				[
					'title' => 'VOLKSWAGEN PASSAT',
					'image' => '../../images/content/comparison/comparison-item-5.jpg',
					'priceInUA' => '16 780',
					'priceInUSA' => '9 121',
					'settings' => [3400, 563, 31, 1250, 15, 450, 400, 2011, 1000, 9121, 350, 148],
				],
				[
					'title' => 'LEXUS ES 300h 2016',
					'image' => '../../images/content/comparison/comparison-item-6.jpg',
					'priceInUA' => '43 240',
					'priceInUSA' => '29 465',
					'settings' => [18600, 794, 108, 1250, 15, 450, 400, 6847, 1000, 29465, 350, 805],
				],
				[
					'title' => 'HONDA CRV 2016',
					'image' => '../../images/content/comparison/comparison-item-7.jpg',
					'priceInUA' => '23 300',
					'priceInUSA' => '15 259',
					'settings' => [8000, 688, 55, 1250, 15, 450, 400, 3400, 1000, 15259, 350, 290],
				],
				[
					'title' => 'FORD MUSTANG 2017',
					'image' => '../../images/content/comparison/comparison-item-8.jpg',
					'priceInUA' => '28 500',
					'priceInUSA' => '19 850',
					'settings' => [11550, 723, 73, 1250, 15, 450, 400, 4370, 1000, 19832, 350, 520],
				],
			],
		],
		[
			'card' => [
				[
					'title' => 'NISSAN LEAF 2013',
					'image' => '../../images/content/comparison/comparison-item-9.jpg',
					'priceInUA' => '19 300',
					'priceInUSA' => '14 200',
					'settings' => [10300, 711, 67, 1250, 15, 450, 400, 0, 1000, 14193, 350, 360],
				],
				[
					'title' => 'CHEVROLET VOLT 2014',
					'image' => '../../images/content/comparison/comparison-item-10.jpg',
					'priceInUA' => '16 800',
					'priceInUSA' => '10 903',
					'settings' => [4850, 608, 39, 1250, 15, 450, 400, 2353, 1000, 10965, 350, 193],
				],
				[
					'title' => 'TOYOTA RAV4 2017',
					'image' => '../../images/content/comparison/comparison-item-11.jpg',
					'priceInUA' => '27 680',
					'priceInUSA' => '19 900',
					'settings' => [11700, 725, 74, 1250, 15, 450, 400, 4446, 1000, 20060, 350, 527],
				],
				[
					'title' => 'TOYOTA CAMRY SE 2017',
					'image' => '../../images/content/comparison/comparison-item-12.jpg',
					'priceInUA' => '24 500',
					'priceInUSA' => '14 974',
					'settings' => [7900, 687, 54, 1250, 15, 450, 400, 3217, 1000, 14974, 350, 287],
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
			'text' => 'Давно хотел x5. Обратился в компанию, всё объяснили, предоставили варианты авто на выбор. Долго решал заказывать или нет, в итоге решился. Менеджеры проконтролировали все этапы, в итоге я просто дождался свою мечту. Огромное спасибо!',
			'description' => 'Александр, 34 года, бизнесмен',
		],
		[
			'image' => '../../images/content/reviews/reviews-item-2.jpg',
			'text' => 'Приехала машина, состояние отличное, в 100 раз лучше нашего рынка, сразу видно разницу. Сделал замену бампера и теперь катаюсь.',
			'description' => 'Михаил, 42 года, менеджер',
		],
		[
			'image' => '../../images/content/reviews/reviews-item-3.jpg',
			'text' => 'Решил купить машину жене, компания сработала профессионально, машина пришла без задержек и в лучшем состояние чем я расчитывал, думаю нужно было брать и себе.',
			'description' => 'Александр, 38 года, юрист',
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
			'name' => 'Александр Студзинский',
		],
		[
			'image' => '../../images/content/teams/teams-item-2.jpg',
			'name' => 'Виталик Шешуков',
		],
		[
			'image' => '../../images/content/teams/teams-item-3.jpg',
			'name' => 'Татьяна Мозговая',
		],
		[
			'image' => '../../images/content/teams/teams-item-4.jpg',
			'name' => 'Руслан Ткаченко',
		],
		[
			'image' => '../../images/content/teams/teams-item-5.jpg',
			'name' => 'Никита Бубнов',
		],
		[
			'image' => '../../images/content/teams/teams-item-6.jpg',
			'name' => 'Дмитрий Доленко',
		],
	],
];

$contacts = [
	'title' => 'Наш офис в Киеве',
	'subtitle' => 'Наши контакты',
	'items' => [
		[
			'name' => 'place',
			'info' => 'Проспект Валерия Лобановского 54',
			'link' => 'https://www.openstreetmap.org/directions?from=54%2C%20%D0%92%D0%B0%D0%BB%D0%B5%D1%80%D0%B8%D1%8F%20%D0%9B%D0%BE%D0%B1%D0%B0%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%20%D0%BF%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82%2C%20%D0%94%D0%B5%D0%BC%D0%B8%D0%B5%D0%B2%D0%BA%D0%B0%2C%20%D0%93%D0%BE%D0%BB%D0%BE%D1%81%D0%B5%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%D0%B9%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%2C%20%D0%9A%D0%B8%D0%B5%D0%B2%2C%2003039%2C%20%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0#map=19/50.41826/30.47608',
		],
		[
			'name' => 'place',
			'info' => 'Проспект Степана Бандеры 21',
			'link' => 'https://www.openstreetmap.org/directions?from=&to=50.48781%2C30.50986#map=19/50.48775/30.51028',
		],
		[
			'name' => 'phone',
			'info' => $phone,
			'link' => 'tel:+38' . str_replace([' '], '', $phone),
		],
		[
			'name' => 'email',
			'info' => 'Carleone.usa@gmail.com',
			'link' => 'mailto:Carleone.usa@gmail.com',
		],
	],
];