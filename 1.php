<?php

// claass Skill
//
class Skill {

	/**
	 * @var string $name
	 */
	public $name;

	/**
	 * @var int $percentage
	 */
	public $percentage;


	/**
	 * The construcror
	 * assign name and percentage of skill
	 *
	 * @var string $name
	 * @var string $percentage
	 * 
	 */
	public function __construct( $name, $percentage )
	{
		$this->name = $name;
		$this->percentage = $percentage;
	}
}








class Biodata {



	public function mine()
	{
	$data = [
		"name" => "Amsit Suryadin",
		"Address" => "Kp. Kebon Kalapa RT 03/04, Cimandala, Sukaraja, Kab. Bogor",
		"hobbies" => "Programming",
		"is_merried" => false,
		"school" => (object) [
			"highSchool" => "Smk PGRI 2 Bogor",
			"university" => null,
			"skill" => [
				new Skill("Php",85),
				new Skill("Java",40),
				new Skill("Go",40),
				new Skill("Javascript",60),
				new Skill("Bash",50),
				new Skill("Html",60),
				new Skill("Css",40),
				
			],
		],
	];

	return json_encode($data);
	}


}

$bio = new Biodata;
echo $bio->mine();
