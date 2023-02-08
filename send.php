<?php
	include 'config.php';



	if(isset($_POST["fnew"])) {
	    $text = htmlentities($_POST["fnew"]);
	} 
	else {   
	    echo "Введенные данные некорректны!";
	}

	$token = 'vk1.a._WqmLC-1aJcaHmNbfZmINy5YD6XvFGxnDwdP5WJZgjy5sOlvjsodS0UztlJEOCtKVDexZ3csmhF7i3585zgiHw-tdvjoCSJzt46IFDiKRLbzjLfUCIrwG1naruUfwJZlL1dtFX58DymNhXlyP4zQZ4JzN_YQUbcPCWpxOaexCsdkcL-_HKUpSpdsRLKNKNfbhpMvICIvaGt1kUlZzPxTZQ';

	// $att = 'photo41381383_306443310';

	$query = file_get_contents("https://api.vk.com/method/wall.post?owner_id=".'-'.$club_id."&message=".urlencode($text)."&from_group=1"."&access_token=".$token."&v=5.131");

	echo $query;


?>