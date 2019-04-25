<HTML>
<head>
<meta http-equiv="Cache-Control" content="no-cache" max-age="0" must-revalidate>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Аварийное сообщение via Yandex TTS</title>
</head>
<body>
<div class=container>
	<div class=row>
		<div class=col>
			<h1><center><font color=red>please use Microsoft edge for better experience </font></center></h1>
		</div>
	</div>
</div>



<div class=container>
<div class=row>
	<div class=col>
	<form action="function.php" method="post">
    <h3>Аварийное сообщение:</h3>
    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <p><input type="submit" value="Отправить"></p>
  </form>

	<h3>Текущее сообщение:</h3>
	
	<?php
		$message=shell_exec('./check_alarm.sh');
    	if ($message != "") {
 			echo '
 			<h3>Включено</h3>
 			<audio controls="controls" preload=none>
				Your browser does not support the audio element.
				<source src="alarm_message.wav" type="audio/wav">
			</audio>

			<form method="post">
    			<input type="submit" name="clear" id="clear" value="Выключить" /><br/>
			</form>';
		}
		else {
			echo '<p>Выключено</p>';
		}
    	
	?>
<br>

<?php

function clearMessage() {
	$remoteIP = $_SERVER['REMOTE_ADDR'];
    $time = date("Y-m-d H:i:s"); 
   $message=shell_exec('./alert_off.sh');
   $log=shell_exec("echo '".$time."' '".$remoteIP."' 'Turn off last message' >> log");
   print_r($message);
}

if(array_key_exists('clear',$_POST)) {
   clearMessage();
}

?>
</div>
<div class=col>

<h2>Настройка голосового синтеза</h2>

<b>Советы по использованию TTS-разметки:</b>
<br>
<p>При необходимости ударные гласные в словах следует отмечать знаком «+», например:</p>

<li>остр+ота,</li>
<li>м+ука.</li>
<br>
<p>Длинные слова можно разбить на слова покороче и проставить ударения для каждого из этих коротких слов, например:</p>

<li>мн+ого пр+офильный,</li>
<li>с+еми пал+атинск.</li>
<br>
<p>Некоторые слова можно попробовать писать так, как они слышатся:</p>

<li>«ненастный» — нен+асный;</li>
<li>«пожалуйста» — пож+алуста.</li>
<br>
<p>Каждый отделенный пробелами пунктуационный знак преобразуется в фонему pau (пауза в 50-100 мс). Таким образом в тексте можно задавать небольшие паузы последовательностью дефисов. <br>Например: </p>
<li>Смелость - - - - - - город+а берет.</li>
<br>
<p>Не стоит создавать таким образом паузы больше 10 секунд — длинная последовательность pau-фонем может привести к звуковым артефактам при синтезе.</p>
	</p>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</HTML>
