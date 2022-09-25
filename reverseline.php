<?php
function rfgets($handle) {
    $line = null;
    $n = 0;

    if ($handle) {
        $line = '';

        $started = false;
        $gotline = false;

        while (!$gotline) {
            if (ftell($handle) == 0) {
                fseek($handle, -1, SEEK_END);
            } else {
                fseek($handle, -2, SEEK_CUR);
            }

            $readres = ($char = fgetc($handle));

            if (false === $readres) {
                $gotline = true;
            } elseif ($char == "\n" || $char == "\r") {
                if ($started)
                    $gotline = true;
                else
                    $started = true;
            } elseif ($started) {
                $line .= $char;
            }
        }
    }

    fseek($handle, 1, SEEK_CUR);

    return strrev($line);
}



$handle = @fopen($filename, 'r');

for ($i = 0; $i < $lines; $i++) {
    $buffer = rfgets($handle);
	
		$buffer = preg_replace('/\<([a-z]\w*)\s.*?\>/im', '<\1>', $buffer); 
$buffer = preg_replace( "/\r|\n/", "<br>", $buffer );
$buffer = preg_replace( "/\r|\n/", "<br>", $buffer );
$buffer = str_replace("<br><br>","<br>\n", $buffer);
$buffer = str_replace("LogChat: Display: ","", $buffer);
$buffer = preg_replace("(\d\d\d\d\d\d\d\d\d\d\d\d\d\d\d\d\d) ","", $buffer);
$buffer = str_replace("()","", $buffer);
$buffer = str_replace("[2022.","</span><span class='chatdn'>2022.", $buffer);
$buffer = preg_replace("~\[\d\d\d]~","", $buffer);
$buffer = preg_replace("~\[ \d\d]~","", $buffer);
$buffer = preg_replace("~\[  \d]~","", $buffer);
$buffer = preg_replace("~\:\d\d\d]~"," | ", $buffer);
$buffer = str_replace(" 𝙅𝙖𝙨𝙩𝙧𝙯𝙖𝙗 "," Jastrzab", $buffer);
$buffer = str_replace(" ✙"," +", $buffer);
$buffer = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', $buffer);
$buffer = str_replace("Team 1 Chat:","</span><span class='chatt1'>", $buffer);
$buffer = str_replace("Team 0 Chat:","</span><span class='chatt0'>", $buffer);
$buffer = str_replace("Global Chat:","</span><span class='chatg'>", $buffer);


    echo $buffer . PHP_EOL;

}

fclose($handle);

?>