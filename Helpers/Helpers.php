<?php

	function base_url()
	{
		return BASE_URL;
	}

	function dep($data)
	{
		$format = print_r('<pre>');
		$format = print_r($data);
		$format = print_r('</pre>');
		return $data;
	}

	function passGenerator($length = 10)
	{
		$pass = "";
		$lengthPass = $length;
		$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$lengthCadena = strlen($cadena);

		for ($i=1; $i <=$lengthPass ; $i++)
		{
			$pos = rand(0,$lengthCadena-1);
			$pass .= substr($cadena,$pos,1);
		}
		return $pass;
	}

	function token()
	{
		$r1 = bin2hex(random_bytes(10));
		$r2 = bin2hex(random_bytes(10));
		$r3 = bin2hex(random_bytes(10));
		$r4 = bin2hex(random_bytes(10));
		$token = $r1 . '-' . $r2 . '-' .$r3 . '-' .$r4;
		return $token;
	}

	function formatMoney($cantidad)
	{
		$cantidad = number_format($cantidad,2,SPD,SPM);
		return $cantidad;
	}

 ?>