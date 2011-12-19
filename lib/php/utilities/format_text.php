<?php
//Functions that deal with formatting text

//Return a snippet
function snippet($number_of_words,$txt)
{
	$parts = explode(' ',$txt);
	
	$snippet = array_slice($parts,0,$number_of_words);
	
	if (count($parts) > $number_of_words)
		{
	
			$snippet_string = implode(' ', $snippet) . "...";
	
		}
		else
		{
	
		$snippet_string = implode(' ', $snippet);
	
		}

return $snippet_string;

}

