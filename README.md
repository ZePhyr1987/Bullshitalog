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
-github Bullshitalog Download the files an drop them into some frontend folder.<p>

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
URL: http://bullshitalot.net/log/?status=20&filename=./Insurgency-chat2.log&lines=50<br>
Width: 900<br>
Height: 220<br>
<br>
<code>
body { background-color: rgba(0, 0, 0, 0); margin: 0px auto; overflow: hidden;}
.header,.hr,.hl {display: none;}
.log-wrap {	position: fixed;left: 0px; top: 0em;}
.chatdn	{background-color: rgba(0, 0, 0, 0.8)} 
.chatname	{background-color: rgba(255, 255, 255, 0.6)} 
.chatg	{background-color: rgba(153, 204, 204, 0.6)} 
.chatt0	{background-color: rgba(204, 153, 102, 0.6)} 
.chatt1 	{background-color: rgba(102, 153, 204, 0.6)} 
.chatadmin	{background-color: rgba(252, 136, 0, 0.6)} 
</code><br>
--------------------------------------------------------------------------------------------------------------------------------<br>
Roadmap:<br>
-maybe map change etc<br>
-maybe rcon input<br>
-clan/vip filter
