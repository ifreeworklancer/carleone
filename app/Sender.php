<?php

class Sender
{
	private $to;
	private $name;
	private $phone;
	private $subject;

	public function __construct($to, $subject, $name, $phone)
	{
		$this->to = $to;
		$this->name = $name;
		$this->phone = $phone;
		$this->subject = $subject;
	}

	public function mail()
	{
		$headers = "From: info@impressionbureau.pro\r\nReply-To: \r\n" .
				   'X-Mailer: PHP/' . phpversion();
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

		mail($this->to, $this->subject, $this->makeMailMessage(), $headers);

		return $this;
	}

	private function makeMailMessage()
	{
		/** @var string $message */
		$message = "
	    <html>
	        <head>
	        <title>{$this->subject}</title>
	        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
	        </head>
	        <body>
	        <h2>Заявка от {$this->name}</h2>
	        <p>Телефон: {$this->phone}</p>
	        </body>
	        </html>
	    ";

		return $message;
	}

	public function redirect($path)
	{
		header("Location: /{$path}");
	}
}