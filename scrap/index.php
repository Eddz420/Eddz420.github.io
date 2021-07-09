<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<title>Caracts</title>

</head>

<body>

	<center>



		<?php 

require_once 'simple_html_dom.php';



	$URL="https://www.game-state.com/185.198.188.98:7777/";



	//get hmtl content from the website

	$html = file_get_html($URL);

	$dom = file_get_html($URL, false);



	//collect product info:

	$arr=array();

	$divclass=$cract="";

	$i=0;

	$k=0;

	if(!empty($dom)) {

		//specs-wrapper : the div that encapluslates all characteristics 

		foreach($dom->find(".box") as $divClass) {

			//get characts:

			foreach($divClass->find(".players") as $title ) {

				$arr[$i]['player'] = $title->plaintext;

				$i++;

			}

			



		}



	}



for ($j = 0; $j < $i; $j++) {

    print_r('<b>'.$arr[$j]['player'].'</b>');
    echo "<br>";

}

exit();





?>

	</center>

</body>

</html>





