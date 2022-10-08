# Bullshitalog<br>
Log file to Web Frontend (Insurgency Sandstorm Chat Log)<p>
![sandlog](https://user-images.githubusercontent.com/4016000/194682464-028cfa99-5890-432f-ba52-9361bda48a45.jpg)


Since I wanted something small and nice for chat log analysis, here is my solution:<br>
Example: <a href="http://bullshitalot.net/log">Bullshitalot.net/log</a><br>

What you need:<br>

Linux ;P (should run on windows server if you have something similar to Tail/Multitail available.)<br>
-screen<br>
-Multitail<br>
-webserver<br>
-github Bullshitalog Download the two files an drop them into some frontend folder.<p>

My example with 4 servers.:<br>
My Multitail command:<p>
<code>
screen -mdS "LogIS1" sudo multitail -a /var/www/html/log/Insurgency-chat1.log -E "LogChat" /home/inssserver/serverfiles/Insurgency/Saved/Logs/Insurgency.log </code> <br><br>
<code>screen -mdS "LogIS2" sudo multitail -a /var/www/html/log/Insurgency-chat2.log -E "LogChat" /home/inssserver2/serverfiles/Insurgency/Saved/Logs/Insurgency.log </code><br><br>
<code>screen -mdS "LogIS3" sudo multitail -a /var/www/html/log/Insurgency-chat3.log -E "LogChat" /home/inssserver3/serverfiles/Insurgency/Saved/Logs/Insurgency.log </code><br><br>
<code>screen -mdS "LogIS4" sudo multitail -a /var/www/html/log/Insurgency-chat4.log -E "LogChat" /home/inssserver4/serverfiles/Insurgency/Saved/Logs/Insurgency.log </code><br><br>
 </code>

change Multitail commands to your file structure.<br>
*Make sure the files created are set to chmod 644*<br>
should be all :)
--------------------------------------------------------------------------------------------------------------------------------
OBS CSS example:

![obssandlog](https://user-images.githubusercontent.com/4016000/194682395-77c82aba-838f-4803-8ca7-c5f438aec567.jpg)

<code>body { background-color: rgba(0, 0, 0, 0); margin: 0px auto; overflow: hidden; }
.header,.hr,.hl {display: none;}
.log-wrap {
	position: 	fixed;
	left: 		0;
	top: 		0em;
	width:calc(100% - 46x);
	overflow:	auto;
}
</code>
--------------------------------------------------------------------------------------------------------------------------------
Roadmap:<br>
-maybe add admin say / map change etc<br>
-maybe rcon input<br>
-clan/vip filter
