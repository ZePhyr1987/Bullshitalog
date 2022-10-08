<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML lang="en">
<HEAD>
<noscript><meta http-equiv="refresh"content="0; url=index_rf.php">
</noscript>
 <TITLE>Bullshitalog <?php echo $_GET['filename'] ?></TITLE>
 
 <?php $url = strtok($_SERVER["REQUEST_URI"], '?');	?>

<link rel="stylesheet" href="styles.css">
<script src="jquery-3.6.1.min.js"></script>
<script type="text/javascript">
const urlParams = new URLSearchParams(window.location.search);
var status = (urlParams.get('status'));
var status = (status*100);
 if(isNaN(status)){
	var status = (999999999);
 }else{}
</script>

</HEAD>
<body>
<div id="main">  <?php include 'main.php'; ?> </div>
 	<script>
		$(document).ready(function() {
			var urlj = (location.search.substring(1));
			setInterval(function() {
		$("#main").load('main.php?'+urlj)
			}, (status));
			// alert('main.php?'+urlj);
			//alert(status);
			//just for testing
		});
	</script>
<div class="footer"><a href="http://bullshitalot.net/">powered by Bullshitalot.net</a> </div>
</body>
</HTML>