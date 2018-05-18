<?php


define('VALID_USERNAME',1);
define('VALID_EMAIL',2);
define('VALID_PHONE_NUMBER',3);

function validate($flag, $userInput )
{
	switch($flag){
	case VALID_USERNAME:
		return preg_match('~(^[a-z]+)$~s',$userInput,$m);
		break;

	case VALID_EMAIL:
		return filter_var($userInput, FILTER_VALIDATE_EMAIL);
		break;

	case VALID_PHONE_NUMBER:
		return preg_match('~^([\+]{0,1}[\d ]{10,17})$~s', $userInput,$m);

	default:
		return false;
	}
}


$data = [
		VALID_USERNAME => [
			"amsid",
			"Amsid",
			

		],
		VALID_EMAIL => [
			"dezavue3@gmail.com",
			"@gmail.com",
			"gmail.com",

		],

		VALID_PHONE_NUMBER => [
			"+62 895600291311",
			"+62 8956 0029 1311",
			"+62 8956oo291311",

		],

];
foreach($data as $flag => $input){
	for($i=0; $i<count($input); $i++){
		echo "<b>";
		if( $flag == VALID_USERNAME ){
			echo "Validating username";
		} else if( $flag == VALID_EMAIL ) {
			echo "Validating email";
		} else {
			echo "Validating phone number";
		}
		
		echo "</b>\n";

		echo sprintf("\tUser input: %s\n\tIs valid: %s\n",
			$input[$i],
			(validate($flag, $input[$i]) ? "yes" : "no")
		);
	}

}

