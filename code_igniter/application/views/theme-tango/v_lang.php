<?php

if (!isset($this->session->userdata["user_lang"]) or $this->session->userdata["user_lang"] == "") {
	$user_lang = "en";
	$GLOBALS["user_lang"] = 'en';
} else {
	$user_lang = $this->session->userdata["user_lang"];
	$GLOBALS["user_lang"] = $this->session->userdata["user_lang"];
}

$language_file = APPPATH . "/views/lang/" . $user_lang . ".inc";

include($language_file);

function __($word){

	// $user_lang = 'en';
	$user_lang = $GLOBALS["user_lang"];

	//Learning-Mode
	//Only for Developers !!!!
	$language_learning_mode=0;
	
	if($language_learning_mode==1)  
	{
		$language_file = APPPATH . "views/lang/" . $user_lang . ".inc";
		include($language_file);
	}

	if(isset($GLOBALS["lang"][$word]))
	{
		return $GLOBALS["lang"][$word];
	} else {
		//Learning-Mode
		if($language_learning_mode==1 AND isset($word) AND $word!="")  
		{
			if(is_writable($language_file))
			{
				//Deleting
				$buffer="";
				$handle = fopen($language_file, "r");
				while (!feof($handle)) 
				{
					$line = fgets($handle, 4096);
					if(!preg_match('/\?>/',$line))
					{
						$buffer .= $line;
					}
				}
				fclose ($handle);
				//Writing new Variables
				$handle = fopen($language_file, "w+");
				fwrite($handle, $buffer.""."\$GLOBALS[\"lang\"][\"$word\"]=\"$word\";\n?>");
				fclose($handle);
			} else {
				die("Language-Learning-Mode, but $language_file not writeable");
			}
		}
		return $word;
	}
}
?>
