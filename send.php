<?php

if (isset($_POST['name']) && isset($_POST['phone'])) {
	$message = new Sender(
		'admin@app.com',
		'Заявка с сайта Carleone',
		$_POST['name'],
		$_POST['phone']
	);

	$message->mail()->redirect('thanks');
}