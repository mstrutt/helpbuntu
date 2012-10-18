<div class="inner">

	<p>If you have a question you want answering, please do <a href="/contact">get in contact</a>.</p>

	<p>Answers are in chronological order, with most recent at the top</p>

	<ul class="faq">
	
		<li>
			<h3>Question - Tobs</h3>
			
			<p>Hi my name is Tobs and I ma new to Ubuntu 7 10. Why when I use terminal can I not go to a directory ie cd /home/Tobs/metric - I get the massage "This is a directory". I was thinking I might have to log on as root only I cant find how. Is there any help you can give me as i cant find any on the forums. also in the terminal i get:
			<blockquote>
				tobs@tobs - desktop: su<br />
				Password:<br />
				su: Authentication failure<br />
				Sorry
			</blockquote>
			Thanks, Tobs</p>
			
			<h4>Answer:</h4>
			
			<p>when you use cd in terminal to change directory make sure that the path name is exactly correct (also case sensitive) try copy and pasting the directory name into terminal from the nautilus file browser (use Ctrl+Shift+V to paste into terminal). Try using
			<blockquote>
				dir /home/tobs
			</blockquote>
			to show all files and folder in the tobs folder to check.</p>
			<p>I also haven't been able to log on as root but it is a good thing as it is a highly unsafe thing to do as you can mess up the system easily and accidentally. In terminal use
			<blockquote>sudo su</blockquote>
			to become a root user for all tasks performed in that terminal window, make sure the password is correct (it will be the one you created as your password when you installed Ubuntu).</p>
			<p>If it is just the terminal usage you are having problems with then type in terminal
			<blockquote>gksu nautilus</blockquote>
			to open a file browser which gives you administrative permissions to do what you need.</p>
		</li>
		<li>
			<h3>Question - Anonymous</h3>

			<p>Hi, I've only been using Ubuntu 7.10 for a couple of days and I'm hooked. I've just got a few small quirks to iron out. One of them is streaming video. Using Gnome and Firefox, I can't seem to get most streaming videos to work.</p>

			<h4>Answer:</h4>

			<p>I used to have this trouble until I followed this post, <a target="blank" href="http://ubuntuforums.org/showthread.php?t=661833&highlight=complete+media+streaming">http://ubuntuforums.org/...media+streaming</a>. Works like a charm now, only niggle is sometimes with BBC rpm feeds I have to launch the video in a standalone player (real player) to get both sound and video, but this is nothing really because I still get to see the videos with ease.</p>
		</li>
		<li>
			<h3>Question - Anonymous</h3>

			<p>I couldn't get an avi file using the Indeo 5 codec to play so I installed everything I could find that mentioned "codec" including all the "avifile" components using synaptic package manager. Totem still doesn't find the correct codec but MPlayer will play the file. At this point it's only an annoyance, but does anyone know how to get Totem to use the correct codec as well?</p>
			
			<h4>Answer:</h4>

			<p>You need to install the complete set of gstreamer plug-ins from ADD/REMOVE option under the Applications Menu.</p>
		</li>
		<li>
			<h3>Question - Anonymous</h3>

			<p>I have looked at video editors and would like to try Cinelerra, however I cannot get it working, can you?</p>

			<h4>Answer:</h4>

			<p>After much trial and error I finally managed to get a version of Cinelerra working. Here is how for a standard i386 machine:</p>
			<p>Add "<i>deb http://repository.akirad.net akirad-gutsy main</i>" to my System >> Administration >> Software Sources under the third party software tab.</p>
			<p>Open up System >> Administration >> Synaptic Package Manager, search for "cinelerra" and right-click, mark for installation the "cinelerra-k7" package. Agree to the extra packages to be installed and click 'Apply'.</p>
			<p>When the process is finished then a working Cinelerra will be available under Applications >> Sound & Video >> Cinelerra.</p>
		</li>
	</ul>
</div>