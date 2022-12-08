<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML lang="en">
<HEAD>
<noscript><meta http-equiv="refresh"content="0; url=index_rf.php">
</noscript>
 <TITLE>Bullshitalog <?php echo $_GET['filename'] ?></TITLE>
 
<link rel="stylesheet" href="styles.css">
<script src="jquery-3.6.1.min.js"></script>
<script type="text/javascript">
const urlParams = new URLSearchParams(window.location.search);
var status = (urlParams.get('status'));
var status = (status*100);
 if(isNaN(status)){
	var status = (999999999);
 }else{}
 
 
 
$(document).ready(function() {
  $('#increase, #decrease').on('click', function() { // click to increase or decrease
    var btn = $(this),
      fontSize = parseInt(window.getComputedStyle(document.body, null).fontSize, 0); // parse the body font size as a number
    if (btn[0].id === "increase") { // detect the button being clicked
      fontSize++; // increase the base font size
    } else {
      fontSize--; // or decrease
    }
    document.body.style.fontSize = fontSize + 'px'; // set the body font size to the new value
  });
}); 
</script>





</HEAD>
<body>
<div id="main">  <?php include 'main.php'; ?> 
 	
	<script>
		$(document).ready(function() {
			var urlj = (location.search.substring(1));
			setInterval(function() {
		$("#main").load('main.php?'+urlj)
			}, (status));			
		});
	</script></div>
<div class="footer"><a href="http://bullshitalot.net/">powered by Bullshitalot.net</a> </div>
</body>
</HTML>