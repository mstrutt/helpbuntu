<div class="inner">

	<p>Flashing your Nokia N9 Smartphone, simply and effectively. So every once in a while, you're messing around with something, and you break your lovely &pound;600 phone. You google how to fix it and you can't find anything, then you see chatter on the internet about "flashing" your phone. It sounds scary, and dangerous, and there seems to be no documentation on it. Well it's not, and here is some.</p>
	<p>Below I'll be going through a step-by-step guide of how to flash your Nokia N9, covering everything from obtaining the correct image to thing you might want to tweak post-flash. First a small disclaimer: As with everything else on this site, I am documenting what I have done, and has worked for me. Anything you choose to do, you do so at your own risk, there is always some (no matter how small).</p>

	<h3 id="step2"><span>Step 1</span> Obtaining the system image</h3>

	<p>Thanks to <a href="http://meego.com" target="_blank">MeeGo</a> being open source, this really isn't difficult, and there's been an awesome piece of software for a while for finding such thing: <a href="http://www.symbian-toys.com/navifirm.aspx">Navifirm</a>. <a href="http://www.symbian-toys.com/navifirm.aspx#download">Download NaviFirm</a> and unzip the file, then simply double-click to run.</p>
	<p>In the product column, scroll all the way down to, and select, Nokia N9. This will load the Releases column, where it is best to select the latest release (highest number) - at time of writing, 40.4.</p>
	<p>The next column, variants is a little tricky, you need to select the exact variant of your phone, easiest to get right by matching the seven-characters in brackets to those on the back of your phones Sim-Tray. Then check it's the same colour and size listed. Once you have selected this, check the file with a name that has "_HARMATTAN_" in the middle and click "Download from FiRe". This will take some time as it's around 1GB.</p>

	<h3 id="step2"><span>Step 2</span> Downloading the flasher</h3>

	<p>You can <a href="http://tablets-dev.nokia.com/maemo-dev-env-downloads.php">download the official flasher from Nokia</a> and select "WinFlasher_3.12.1.exe" from the list. Double click the file to begin installation and choose a simple place to install it )for me I made a folder called "n9" in C:/Users/Michael/. When the installation is done, copy the file you downloaded in <a href="#step1">Step 1</a> to the folder you just installed the flasher in and open up "command prompt" (Start >> Accessories >> Command Prompt). Navigate to the folder you have the flasher and the file in. If you are comfortable with this skip ahead to <a href="#step4">Step 4</a> as I will go through this in detail in <a href="#step3">Step 3</a></p>

	<h3 id="step3"><span>Step 3</span> Navigating Command Prompt</h3>
	
	<p>There are two main commands you will need to know for doing this one is <i>cd</i> and the other is <i>dir</i>. To run a command, simply type it in and press enter.</p>
	<p><i>cd</i> stands for "change directory" (folder) and you use it to move around. To change to a folder called "nokian9" you would type in:
		<blockquote>cd nokian9</blockquote>
	To go back up one level type:
		<blockquote>cd ../</blockquote></p>
	<p><i>dir</i> is used to help you find where you are, it lists all the folders and files where you currently are so you can see where to go next</p>
	<p>Choosing a simple folder, as suggested, makes this a lot easier, if you did like me and just created a folder called "n9" then you need only type
		<blockquote>cd n9</blockquote>
	and you can move on to <a href="#step4">Step 4</a></p>
	
	<h3 id="step4"><span>Step 4</span> Flashing the phone</h3>
	
	<p>Begin with your phone fully switched off and not connected to your computer. In command prompt, in the folder where you have installed the flasher and coppied your download, type the commend:
		<blockquote>flasher.exe -F DOWNLOADNAME -f -R</blockquote>
	where "DOWNLOADNAME" is the name of the file you downloaded in <a href="step1">Step 1</a></p>
	<p>When the output on screen shows
		<blockquote>Suitable USB interface (bootloader/phonet) not found, waiting...</blockquote>
	then it is time to connect your device to computer via USB, it will automatically turn on in flashing mode and continue the process. Altough it worked first time for me, several people online have said that you may need to try again a few times if it cannot detect your device.<p>
	<p>The command prompt will show a fair bit of output with completion percentages of various different parts. There should also be a blue progress bar going accross your n9's screen. After a few minutes your device will automatically reboot itself into the new system, this will take longer than normal as it is effectively a first-time boot. If everything went well then congratulations, you have successfully flashed your Nokia N9.</p>
	
	<h3 id="step5"><span>Step 5 (Optional)</span> Things you may want to do afterwards</h3>
	
	<p>For me although the phone was great and everything was working, the icons on the homescreen were strangely arranged and some of them were missing. I decided to do a hard reset. On your phone, go to "Settings" from the home screen, scroll down to "Reset" and then "Clear Device" you will loose all your data doing this, so make sure you have backups somewhere. This takes quite some time and the phone will reboot doing so. You should then have a lovely fully working Nokia N9 again, and you can tinker with the confidence that you can always sort it out again later. If you want to get back some of the images and videos ect that came with the device, they have them all over at <a href="http://www.n9fanclub.com/2011/11/recover-default-pre-loaded-content-of.html">n9 fan club</a>.</p>
	
</div>