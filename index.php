<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML lang="en">
<HEAD>
 <TITLE>Bullshitalog</TITLE>
 
 <?php
$url = strtok($_SERVER["REQUEST_URI"], '?');
    $status = $_GET['status'] ?? '5';
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh:{$status}; URL=$url1");
	?>

<style type="text/css">

body {
font-size:      1em;
color:#F0F8FF;
background:#000000; 
}

.log-wrap {
	position: relative;
	left: 0;
	top: 4em;
	width: 100%;
	overflow:auto;
	z-index: 10;}


.chatdn {
background:#cccccc; 
color:#000000;
width:calc(400px - 16px);
height:1em;
float:left;
font-family:    "Lucida Console","Courier New","monospace";
                font-size:      1em;
  line-height:1em;
                font-weight:    regular;
				font-style: normal;
overflow:auto;	
text-overflow: ellipsis;
padding: 2px 2px 2px 10px;
border: #666 1px solid;
border-radius: 4px;
			
}
.chatg_ {
	background:#99cccc;
	color:#000000;
padding: 7px 25px 7px 25px;
border: #666 1px solid;
border-radius: 4px;
margin-right: 30px;
float:right;}


.chatg {
background:#99cccc; 
color:#000000;
width:calc(100% - 412px);
height:1em;
float:right;
font-family:    "monospace","Courier New","Lucida Console";
                font-size:      "1em";
  line-height:1em;
                font-weight:    regular;
				font-style: normal;
overflow:auto;	
	text-overflow: ellipsis;
padding: 2px 2px 2px 10px;
border: #666 1px solid;
border-radius: 4px;
	
}





.chatt1_ 
{background:#66cc66;
color:#000000;
padding: 7px 25px 7px 25px;
border: #666 1px solid;
border-radius: 4px;
margin-right: 30px;
float:right;}


.chatt1 {
background:#66cc66; 
color:#000000;
width:calc(100% - 412px);
height:1em;
float:right;
font-family:    "monospace","Courier New","Lucida Console";
                font-size:      1em;
  line-height:1em;
                font-weight:    regular;
				font-style: normal;
overflow:auto;	
text-overflow: ellipsis;
padding: 2px 2px 2px 10px;
border: #666 1px solid;
border-radius: 4px;
			
}


.chatt0_ 
{background:#cc9966;
color:#000000;
padding: 7px 25px 7px 25px;
border: #666 1px solid;
border-radius: 4px;
margin-right: 30px;
float:right;}


.chatt0 {
background:#cc9966; 
color:#000000;
width:calc(100% - 412px);
height:1em;
float:right;
font-family:    "monospace","Courier New","Lucida Console";
                font-size:      1em;
  line-height:1em;
                font-weight:    regular;
				font-style: normal;
overflow:auto;	
text-overflow: ellipsis;
padding: 2px 2px 2px 10px;

border: #666 1px solid;
border-radius: 4px;
			
}

a:link {
  color: #F0F8FF;
}

/* visited link */
a:visited {
  color: #F0F8FF;
}

/* mouse over link */
a:hover {
  color: hotpink;
}

/* selected link */
a:active {
  color: #66cc66;
}

.header {

  position: fixed;
  z-index: 20;
  left: 0;
  top: 0;
  width: 100%;
  background-color: black;
  font-family:    "monospace","Courier New","Lucida Console";
                font-size:      1em;
  line-height:1em;
                font-weight:    regular;
				font-style: normal;
  background-color: black;
  color: white;
  }

.footer {
  position: fixed;
  z-index: 20;
  left: 0;
  bottom: 0;
  width: 100%;
  height:1em;
  font-family:    "monospace","Courier New","Lucida Console";
                font-size:      1em;
  line-height:1em;
                font-weight:    regular;
				font-style: normal;
  background-color: black;
  color: white;
  text-align: center;
}

</style>
</HEAD>
<body>

<div class="header">

<?php
$filename = $_GET['filename'] ?? './Insurgency-chat1.log';
$lines_ = $_GET['lines'] ?? '100';
$lines = $lines_ * 2;
echo "&emsp; 
Reload Timer: $status s&emsp; 
Server: $filename &emsp; 
Lines: $lines_";
?>
<br>
&emsp; Reload: <a href="<?php echo $url ?>?status=5&filename=<?php echo $filename; ?>&lines=<?php echo $lines_; ?>">Start</a> / 
<a href="<?php echo $url ?>?status=Stop&filename=<?php echo $filename; ?>&lines=<?php echo $lines_; ?>">Stop</a> &emsp;|&emsp;

<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=./Insurgency-chat1.log&lines=<?php echo $lines_; ?>">Server1</a>&emsp;
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=./Insurgency-chat2.log&lines=<?php echo $lines_; ?>">Server2</a>&emsp;
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=./Insurgency-chat3.log&lines=<?php echo $lines_; ?>">Server3</a>&emsp;
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=./Insurgency-chat4.log&lines=<?php echo $lines_; ?>">Server4</a>


<br>
&emsp; Lines: <a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=<?php echo $filename; ?>&lines=50">50</a> / 
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=<?php echo $filename; ?>&lines=100">100</a> / 
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=<?php echo $filename; ?>&lines=200">200</a> / 
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=<?php echo $filename; ?>&lines=400">400</a> / 
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=<?php echo $filename; ?>&lines=800">800</a>

<span class='chatg_'>Global</span>
<span class='chatt1_'>Team 1</span>
<span class='chatt0_'>Team 0</span>
</div>

<div class="log-wrap">
<?php
include 'reverseline.php';
?>
</div>

</body>

<div class="footer"><a href="http://bullshitalot.net/">powered by Bullshitalot.net</a>
  
</div>

</HTML>
