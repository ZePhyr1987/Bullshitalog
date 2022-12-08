# Bullshitalog<br>
Log file to Web Frontend (Insurgency Sandstorm Chat Log)<p>
![chat](https://user-images.githubusercontent.com/4016000/206510145-2befd386-5d45-44da-b387-ef9558dbc2a8.png)


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
<code>screen -mdS "LogIS1A" sudo multitail -a /var/www/html/log/Insurgency-chat1.log -E "<< say" /home/inssserver/serverfiles/Insurgency/Saved/Logs/Insurgency.log</code>	
<details><summary></summary>	
<code>screen -mdS "LogIS2" sudo multitail -a /var/www/html/log/Insurgency-chat2.log -E "LogChat" /home/inssserver2/serverfiles/Insurgency/Saved/Logs/Insurgency.log </code><br><br>
<code>screen -mdS "LogIS3" sudo multitail -a /var/www/html/log/Insurgency-chat3.log -E "LogChat" /home/inssserver3/serverfiles/Insurgency/Saved/Logs/Insurgency.log </code><br><br>
<code>screen -mdS "LogIS4" sudo multitail -a /var/www/html/log/Insurgency-chat4.log -E "LogChat" /home/inssserver4/serverfiles/Insurgency/Saved/Logs/Insurgency.log </code><br><br>

<code>screen -mdS "LogIS2A" sudo multitail -a /var/www/html/log/Insurgency-chat2.log -E "<< say" /home/inssserver2/serverfiles/Insurgency/Saved/Logs/Insurgency.log</code><br><br>
<code>screen -mdS "LogIS3A" sudo multitail -a /var/www/html/log/Insurgency-chat3.log -E "<< say" /home/inssserver3/serverfiles/Insurgency/Saved/Logs/Insurgency.log</code><br><br>
<code>screen -mdS "LogIS4A" sudo multitail -a /var/www/html/log/Insurgency-chat4.log -E "<< say" /home/inssserver4/serverfiles/Insurgency/Saved/Logs/Insurgency.log</code><br><br>	
 </code>
</details>
change Multitail commands to your file structure.<br>
*Make sure the files created are set to chmod 644*<br>
should be all :)<br>
--------------------------------------------------------------------------------------------------------------------------------<br>
OBS CSS example:
<details> 
  <summary></summary>
<img src="https://user-images.githubusercontent.com/4016000/194682395-77c82aba-838f-4803-8ca7-c5f438aec567.jpg">

</details>



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
-maybe map change etc<br>
-maybe rcon input<br>
-clan/vip filter
