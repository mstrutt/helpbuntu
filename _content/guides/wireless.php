<div class="inner">
	<p><b>NOW WORKING FOR 8.10</b></p>

	<p>I have done this successfully on numerous installations on numerous machines. So here is how it works:</p>

	<h2>Step 1 - <i>Gathering the Drivers</i></h2>

	<p>For the WG111v3 this code will gather and unzip the files in your <i>/home/your_user_name/</i> directory.</p>

	<pre>
		wget http://helpbuntu.mstrutt.co.uk/downloads/ndiswrapper.tar.gz
		wget http://helpbuntu.mstrutt.co.uk/downloads/WG111v3.tar.bz2
		tar xvvf ndiswrapper.tar.gz
		tar xvvf WG111v3.tar.bz2
	</pre>

	<p>For others use the same ndiswrapper code but you will need to find your own .inf and .sys files requires for your USB adapter.</p>

	<h2>Step 2 - <i>Installing the drivers</i></h2>

	<p>This code for WG111v3:</p>

	<pre>
		cd ndiswrapper-1.54-2.6.27.7
		make
		sudo su
		apt-get -y remove ndiswrapper-common
		apt-get -y install build-essential debian-keyring g++-multilib g++-4.3-multilib gcc-4.3-doc libstdc++6-4.3-dbg libstdc++6-4.3-doc diff-doc lib64stdc++6-4.3-dbg lib64mudflap0
		make install
		ndiswrapper -i ../WG111/WG111v3.inf
		depmod -a
		modprobe ndiswrapper
		ndiswrapper -m
		exit
	</pre>

	<p>
		Enter Your Password on prompt after <code>sudo su</code>
		<br>For non-WG111v3 users replace the red path with the path to your USB's .inf file
	</p>

	<h2>Step 3 - <i>Re-configure</i></h2>

	<p>
		Reboot with your wireless USB inserted.
		<br>Then repeat Step 2.
	</p>

	<h2>Step 4 - <i>Setup the connection</i></h2>

	<p>Click on the network icon in the system tray to show the connections. Click on "Connect to Hidden Wireless Network..." and simply:</p>

	<ul>
		<li>Find your notes from when you had the router installed</li>
		<li>In the top box type in what you named your router (case sensitive)</li>
		<li>Then select from the drop down box what type of encryption your router has</li>
		<li>Now enter your router password (again case sensitive)</li>
	</ul>

	<p>Click on connect and you should be away</p>

	<h2>Step 5 - <i>Using your connection</i></h2>

	<p>It may be necessary for some to repeat Step 4.</p>

	<p>When you use your USB adapter, for best connection have it inserted before you switch on your computer.</p>

	<p>To test your connection at any time, type the following into terminal</p>

	<pre>ping -c1 google.com</pre>

	<p>If the output is <code>unknown host: google.com</code> then you have no connection. If the output shows an amount of time taken to connect with google.com then you have a connection.</p>
</div>