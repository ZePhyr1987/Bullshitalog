<div class="header">

<div class="hl">

<?php
$url = strtok($_SERVER["REQUEST_URI"], '?');
if ($url = 'main.php') { $url = "" ;}
$status = $_GET['status'] ?? '20';
$filename = $_GET['filename'] ?? './Insurgency-chat1.log';
$lines_ = $_GET['lines'] ?? '100';
$lines = $lines_ * 2;
echo "Server: &emsp;$filename | Lines: $lines_";
?>



<br>

Reload: 
<?php 
if (is_numeric($status)) { 
echo "<a href=$url?status=Stop&filename=$filename&lines=$lines_>Stop</a>";
} 
else {
echo "<a href=$url?status=20&filename=$filename&lines=$lines_>Start</a>";
echo "<div class='zoom'><button id='increase'>zoom +</button><br><button id='decrease'>zoom -</button></div>";
} ?>

Lines: 
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=<?php echo $filename; ?>&lines=50">50</a> / 
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=<?php echo $filename; ?>&lines=100">100</a> / 
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=<?php echo $filename; ?>&lines=200">200</a> | 
<br>
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=./Insurgency-chat1.log&lines=<?php echo $lines_; ?>">Server1</a>&emsp;
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=./Insurgency-chat2.log&lines=<?php echo $lines_; ?>">Server2</a>&emsp;
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=./Insurgency-chat3.log&lines=<?php echo $lines_; ?>">Server3</a>&emsp;
<a href="<?php echo $url ?>?status=<?php echo $status; ?>&filename=./Insurgency-chat4.log&lines=<?php echo $lines_; ?>">Server4</a>

</div>


<div class="hr">
<span class='chatg_'>Global</span>
<span class='chatt1_'>Team 1</span>
<span class='chatt0_'>Team 0</span>
</div>
</div>

<div class="log-wrap"><?php include 'reverseline.php'; ?></div>

<br><br><br><br>


