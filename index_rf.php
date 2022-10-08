<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML lang="en">
<HEAD>
<script>window.location.replace("index.php")
</script>
<TITLE>Bullshitalog <?php echo $_GET['filename'] ?></TITLE>
 
 <?php
$url = strtok($_SERVER["REQUEST_URI"], '?');
    $status = $_GET['status'] ?? '20';
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh:{$status}; URL=$url1");
	?>

<link rel="stylesheet" href="styles.css">
</HEAD>
<body>

<div id="main">  <?php include 'main.php'; ?> </div>

<div class="footer"><a href="http://bullshitalot.net/">powered by Bullshitalot.net</a> </div>
</body>
</HTML>