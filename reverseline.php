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
	


$buffer = str_replace("LogChat: Display: ","", $buffer);
$buffer = str_replace("LogRcon: ","", $buffer);

$buffer = str_replace("<< say ","Admin: ", $buffer);


$buffer = preg_replace("(\d\d\d\d\d\d\d\d\d\d\d\d\d\d\d\d\d) ","",$buffer);

$buffer = preg_replace("(\d+.\d+.\d+.\d+:\d\d\d\d\d )","",$buffer);

$buffer = preg_replace("~\[ \d]~","", $buffer);
$buffer = preg_replace("~\[  \d]~","", $buffer);
$buffer = preg_replace("~\[ \d\d]~","", $buffer);
$buffer = preg_replace("~\[\d\d\d]~","", $buffer);



$buffer = filter_var($buffer, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$buffer = preg_replace("~\:\d\d\d]~","<span class='chatname'>",$buffer);


$buffer = str_replace("Admin: ","Admin</span><span class='chatadmin'>",$buffer);




$buffer = str_replace("[20","</span><span class='chatdn'>",$buffer);

$findatadmin = array("Team 1 Chat: @Admin","Team 0 Chat: @Admin","Global Chat: @Admin","Team 1 Chat: @admin","Team 0 Chat: @admin","Global Chat: @admin","Team 1 Chat: @ADMIN","Team 0 Chat: @ADMIN","Global Chat: @ADMIN");
$buffer = str_replace($findatadmin,"</span><span class='chatadmin'>@Admin",$buffer);


$buffer = str_replace("Team 1 Chat:","</span><span class='chatt1'>",$buffer);
$buffer = str_replace("Team 0 Chat:","</span><span class='chatt0'>",$buffer);
$buffer = str_replace("Global Chat:","</span><span class='chatg'>",$buffer);







$buffer = str_replace("()","",$buffer);

//$replacement = "</span><span class='chatname'>";
//$buffer = substr_replace($buffer, $replacement, 46, 0);

//$buffer = str_replace("</span><span class='chatname'></span>","", $buffer);




//$buffer = substr_replace($buffer, "<span class='chatdn'>", 0, 0);
//$buffer = str_replace("| ","<span class='chatname'>", $buffer);
$buffer = substr_replace($buffer, "</span>", 45, 0);

//$buffer = str_replace(array("\r", "\n"), '', $buffer);

//sanitize replace
$findstr = array(
"<span class='chatadmin'>Admin</span><span class='chatadmin'>",
"<span class='chatg'>Admin</span><span class='chatg'>",
"<span class='chatg'> Admin</span><span class='chatadmin'>",
"<span class='chatadmin'></span><span class='chatg'>",
"<span class='chatadmin'></span><span class='chatt0'>",
"<span class='chatadmin'></span><span class='chatdn'>",
"<span class='chatadmin'></span><span class='chatt1'>",
"<span class='chatadmin'><span class='chatdn'>");
$replace = "</span><span class='chatadmin'>";
$buffer = str_replace ($findstr, $replace,$buffer);

$buffer = str_replace("</span></span>","</span>",$buffer);



echo $buffer . PHP_EOL; 
}
 
fclose($handle);


?>