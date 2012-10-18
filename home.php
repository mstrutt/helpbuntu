<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
		function myinclude($page) {
			if(file_exists($page)){
				include($page);
			}else{
				include('_content/404.php');
			}		
		}
	?>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Michael Strutt" />			
		<meta name="description" content="MStrutt.co.uk is the personal portfolio site of Michael Strutt, a 21 year old Computer Science Student at Loughborough University, Working in London as a User Experience Developer." />
		<meta name="keywords" content="Web Design, Web Development, HTML, CSS, JavaScript, jQuery, PHP, HTML5, CSS3, ei8hty ei8ht, lborostudent" />
		<meta name="revised" content="2011-11-27 19:12" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<?php
			if(isset($_GET['page'])){
				$page=ucfirst($_GET['page']);
			}else{
				$page='Home';
			}
			$title = $page.' | HelpBuntu';
			if(isset($_GET['sub'])){
				$sub=$_GET['sub'];
				if($sub != ""){
					$title = ucfirst($sub).' - '.$title;
				}
			}else{
				$sub="";
			}
			echo "<title>$title</title>";
			$page = strtolower($page);
			$sub = strtolower($sub);
		?>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
		<link rel="stylesheet" href="/_css/normalize.css" />
		<link rel="stylesheet" type="text/less" href="/_css/global.less" />
		<script src="/_js/less-1.1.3.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="/_js/main.js"></script>
	</head>
	<body>
		<div class="container">
			
			<header>
				<p class="title" title="Advice based on experience, not hear-say.">helpbuntu</p>
				<nav>
					<a href="/home.php">Home</a>
					<a href="/tux">Tux</a>
					<a href="/guides">Guides</a>
					<a href="/products">Products</a>
					<a href="/support">Support</a>
					<a href="/contact">Contact</a>
					<a href="/n9">N9</a>
				</nav>
			</header>
			<div class="content">
				<?php
					if(file_exists('_content/'.$page.'.php')){
						
						include("_content/".$page.".php");
						
						echo '<ul class="sub-sections">';
						for ($i=0; $i < sizeof($subpages); $i++){
							if ($subpages[$i]["url"] == $sub || sizeof($subpages) == 1 || ( $sub == "" && $i == 0 ) ){
								echo '<li class="selected"><h2>'.$subpages[$i]["name"].'</h2></li>';
							}else{
								echo '<li><a href="/'.$page."/".$subpages[$i]["url"].'">'.$subpages[$i]["name"].'</a></li>';
							}
						}
						echo '</ul>';
						
						if ($sub != ""){
							myinclude("_content/".$page."/".$sub.".php");
						}else{
							myinclude("_content/".$page."/".$subpages[0]["url"].".php");
						}
						
					}else{
						myinclude("_content/".$page."/index.php");
					}
				?>
			</div>
			<footer>
				<p>Copy Right Michael Strutt 2011 &copy; | all rights reserved</p>
			</footer>
		</div>
			<!-- Start of StatCounter Code -->
				<script type="text/javascript">
					var sc_project=3543012; 
					var sc_invisible=1; 
					var sc_security="fe8900d5"; 
					var sc_text=2; 
				</script>
				<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
				<noscript>
					<div class="statcounter">
						<a title="hit counter" href="http://statcounter.com/free_hit_counter.html" target="_blank">
							<img class="statcounter" src="http://c.statcounter.com/3543012/0/fe8900d5/1/" alt="hit counter" >
						</a>
					</div>
				</noscript>
			<!-- End of StatCounter Code -->
	</body>
</html>
