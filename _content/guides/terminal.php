<div class="inner">
	<p><b>Useful Diagnostic when asking for help</b> - If the problem is with a specific program, run it in terminal (command can be found from System >> Preferences >> Main Menu) and then preform the task that had problems, and information about the error should be there to copy and paste from terminal.</p>
	<p>This is a list of useful terminal commands and what they do. Remember all terminal commands are case sensitive and spaces in path names (eg <code>/home/me/my folder/</code>) should be treated either with a backward slash <code>/home/me/my\ folder/</code> or in quotations <code>"/home/me/my folder/"</code> - for ease of use replace a space with an _ (underscore).</p>

	<table border="1" width="90%" align="center">
		<tr>
			<td width="20%" align="center">
				<code>cd</code>
			</td>
			<td>
				<p>Short for Change Directory. It will change the folder you are operating in. By default you are operating in you users directory <code>/home/exampleuser/</code> ; simply type in the new directory eg <code>cd /home/exampleuser/Documents</code> to work in that folder.</p>
			</td>
		</tr>
		<tr>
			<td width="20%" align="center">
				<code>dir</code>
			</td>
			<td>
				<p>This will probe the given directory and display the contents of that folder to show any files or folders inside it. eg <code>dir /example/pathway</code><p>
			</td>
		</tr>
		<tr>
			<td width="20%" align="center">
				<code>gksu</code>
			</td>
			<td>
				<p>This applies root privileges to a program that opens in as separate window. The program command can be found via System >> Preferences >> Main Menu. eg <code>gksu nautilus</code> will open a root owned file browser.</p>
			</td>
		</tr>
		<tr>
			<td width="20%" align="center">
				<code>gunzip</code>
			</td>
			<td>
				<p>To unzip an archive that ends with the .gz extension. eg <code>gunzip /example/pathway/archive.tar.gz</code><p>
			</td>
		</tr>
		<tr>
			<td width="20%" align="center">
				<code>killall</code>
			</td>
			<td>
				<p>If a program stops functioning close it down by killing all the processes involved. eg <code>killall vlc</code> will completely close down a non-responsive vlc media player.</p>
			</td>
		</tr>
		<tr>
			<td width="20%" align="center">
				<code>sudo</code>
			</td>
			<td>
				<p>applies root privileges to the command that follows it (after a single space on the same line).</p>
			</td>
		</tr>
		<tr>
			<td width="20%" align="center">
				<code>sudo apt-get install</code>
			</td>
			<td>
				<p>This will install a program that follows on that line. eg <code>sudo apt-get install vlc</code> will install vlc media player.</p>
			</td>
		</tr>
		<tr>
			<td width="20%" align="center">
				<code>sudo apt-get autoremove</code>
			</td>
			<td>
				<p>After installing and removing some software occasionally run this command to remove any un-needed dependencies and log files from the computer.</p>
			</td>
		</tr>
		<tr>
			<td width="20%" align="center">
				<code>sudo apt-get upgrade</code>
			</td>
			<td>
				<p>This will install any updates quickly and easily when the notification icon appears.</p>
			</td>
		</tr>
		<tr>
			<td width="20%" align="center">
				<code>sudo su</code>
			</td>
			<td>
				<p>If you need to perform a lot of commands with root privileges you can become the root user in terminal (you will need to type your password on prompt). To then stop being the root user simply type <code>exit</code> and press Enter.</p>
			</td>
		</tr>
	</table>
</div>