# Bullshitalog<br>
Log file to Web Frontend (Insurgency Sandstorm Chat Log)<p>


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



Roadmap:<br>
-switch reload to ajax<br>
-cleanup
-maybe add admin say / map change etc<br>
-maybe rcon input<br>
