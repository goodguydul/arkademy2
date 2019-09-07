<?php 
	function countVowel($string){
		// menggunakan regex yang mendeteksi huruf vokal a,i,u,e,o.
		return preg_match_all('/[aiueo]/i',$string);

	}

	echo countVowel("hmmm");
?>
