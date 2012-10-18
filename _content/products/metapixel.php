<div class="inner metapixel">

	<h3>Installing Metapixel</h3>

	<p>To install Metapixel (a photomosaic generating piece of software) copy and paste the following into terminal:</p>

	<blockquote>
		sudo apt-get install metapixel
	</blockquote>

	<h3>Preparing tiles from photos to use to create Photo-mosaics</h3>
	
	<fieldset class="step1" style="border:none;">
		<table cellpadding="5" width="60%" align="center">
			<tr>
				<td>Where are you pictures stored:</td>
				<td><input type='text' target="picturefolder" value='/home/user/Pictures/' /></td>
			</tr>
			<tr>
				<td>Include sub-folders</td>
				<td><label>Yes: </label><input type='checkbox' value='-r ' target="recursive" checked="true"/></td>
			</tr>
			<tr>
				<td>Choose a folder to save the tiles in:</td>
				<td><input type='text' target="tilefolder" id="tilesfolderID" value='/home/user/tiles/' /></td>
			</tr>
			<tr>
				<td>Width of the tiles (pixels):</td>
				<td><input type='text' target="tilewidth" value='50' /></td>
			</tr>
			<tr>
				<td>Height of the tiles (pixels):</td>
				<td><input type='text' target="tileheight" value='50' /></td>
			</tr>
		</table>
	</fieldset>
	
	<h3>Now Copy and Paste the following into terminal and hit return to prepare tiles:</h3>

	<blockquote id="code1">
		metapixel-prepare <span id="recursive">-r </span><span id="picturefolder">/home/user/Pictures/</span> <span id="tilefolder">/home/user/tiles/</span> --width=<span id="tilewidth">50</span> --height=<span id="tileheight">50</span>
	</blockquote>

	<h3>When the pictures have finished being re-sized you can use the following to create your mosaic:</h3>

	<fieldset class="step2" style="border:none;">
		<table cellpadding="5" width="60%" align="center">
			<tr>
				<td>Choose your image to mosaic:</td>
				<td><input type='text' target="inputimg" value='/home/user/input.jpg' /></td>
			</tr>
			<tr>
				<td>Specify output image (must be .png):</td>
				<td><input type='text' target="outputimg" value='/home/user/output.png' /></td>
			</tr>
			<tr>
				<td>The folder where the tiles are:</td>
				<td><input type='text' target="tilefolder2" value='/home/user/tiles/' /></td>
			</tr>
			<tr>
				<td>How many times bigger should the output be:</td>
				<td><input type='text' target="scale" value='35' /></td>
			</tr>
			<tr>
				<td>How many other tiles to use before reppitition (smaller number for better colour match, larger number for less repition):</td>
				<td><input type='text' target="distance" value='50' /></td>
			</tr>
		</table>
	</fieldset>
	
	<p>Now Copy and Paste the following into terminal and hit return to create your photo-mosaic:<br />(NOTE: this process takes ages and prints loads of dots on the terminal window to let you know it is doing something - then lots of crosses)</p>

	<blockquote id="code2">
		metapixel --metapixel <span id="inputimg">/home/user/input.jpg<span> <span id="outputimg">/home/user/output.png</span> --library <span id="tilefolder2">/home/user/tiles/</span> --scale=<span id="scale">35</span> --distance=<span id="distance">50</span>
	</blockquote>

	<p class="note">NOTE: If problems occur then try not having any spaces in file and path names as this could cause problems (replace a " " with a "\ ").</p>
	<p>NOTE ALSO: All terminal usage is case-sensitive, so this and This and THIS and ThIs are different.</p>
</div>