<?php

namespace Kaythinks;

class Goodthoughts {

	/**
	 * This static method generates a "Good Thought" from an array of "Good Thought"
	 * 
	 * @return String
	 */
	public static function generateThought()
	{
		$thoughtArray = [
			"You are a great programmer !",
			"Relax, try again later mate !",
			"Don't stop till you finish !",
			"Tomorrow is another day !",
			"Your codes will compile now ,Trust me !",
			"You can do this !",
			"Yeah, You did it ! Congrats !",
			"Well done , Champ !",
			"Keep at it, Victory is sure !",
			"You are a freaking Genius !",
		];

		$index = mt_rand(0,9);

		return $thoughtArray[$index];
	}

}