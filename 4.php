<?php

class VendingMachine 
{

	public $changes = [
		50000,
		20000,
		10000,
		5000,
		2000,
		1000,
		500
	
	];




	public $product = [
		"Cola" => 10000,
		"Milk" => 15000,
		"Coffee" => 20000,
		"Teh sisri" => 2500,
	];





	public function getChange($money, $price)
	{

		$change = $money - $price;
		$result = 0;
		$i = 0;
		$changelist = [
			50000 => 0,
			20000 => 0,
			10000 => 0,
			5000 => 0,
			2000 => 0,
			500 => 0,

		];
		
		while($result != $change)
		{
			
			$cal= ( ($result + $this->changes[$i]) <= $change ? $this->changes[$i] : 0);
			if( $cal > 0 )
			{
				
				$changelist[$cal] += 1;

				$i=0;
				$result += $cal;
				continue;

			} 


			$result += $cal;
			$i++;
			
			
		}

		foreach( $changelist as $key => $val ){
			if( 0 == $val ){
				continue;
			}
			if( 1 <  $val ){
				$message = "- {$val} ";
				$message .= ($key == 500 ? "koin " : "lembar ");
			} else {
				$message = ($key == 500 ?  "- Satu koin " : "- Selembar ");
			}
			$message .= $key;
			echo $message;
			echo "\n";
		}

	}

	static function main(){
		$vm = new VendingMachine;

		foreach($vm->product as $title => $price )
		{
			echo "Saya membeli $title seharga $price dengan uang 50000 berapa kembaliannya?\n";
			$vm->getChange(50000, $price);
			echo "\n\n";
		}
	}
}


VendingMachine::main();
