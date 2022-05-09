<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script 
		src="script.js" defer>
	</script>
	<link href="styles.css" rel="stylesheet">
 	<title>Zeul's Website!</title>

</head>
<body>
	
	<div class="header">
  		<h1>zeulewan.com</h1>
	</div>


  	<ul class="tabs">
		<li data-tab-target="#home" class="active tab"><font color ="FFFFFF">Blog</font></li>
		<li data-tab-target="#thoughts"    class="tab"><font color ="FFFFFF">Thoughts</font></li>
		<li data-tab-target="#links"        class="tab"><font color="FFFFFF">Links</font></li>
		<li data-tab-target="#something"    class="tab"><font color="FFFFFF">About me</font></li>
  	</ul>

  	<div class="tab-content">
    		<div id="home" data-tab-content class="active">
		
				<font face="Arial" color="#E7F5FE">
				<h1>Zeul's Blog</h1>
				<h4>This is where I'll post some of the things I do throughout the summer</h4><br>
			
				<?php 
					for ($i=2022; $i>=2022; $i--) {
						for ($j=12; $j>=1; $j--) {
							for ($k=31; $k>= 1; $k--) {		
								echo file_get_contents("blog/$i/$j/$k/$k.html");	
							}
						}
					}
				?>

			</div>




		<div id="thoughts" data-tab-content>
			<h1>This will be a place to put my thoughts on random things</h1>
			To do: <br>1. make folders for this section. 2. seperate text files for each blog post. 
		</div>




   		<div id="links" data-tab-content>
 			<h1>Here are some links to things.</h1>
			<div id="myDiv">
			<br>
			
			<b>Stream my music:</b> <br>
			<a href="https://linktr.ee/zeul"><font color="#1187FC">Linktree</font></a>
			<br>	
			<br>		
			
			<b>Download my Music (direct download)</b>
				 <br>
			<a href="media/Zeul.zip" download>
   			<button type="button">320kbps MP3s</button> 
			</a> <br>
			<br>

			<b>Youtube Channel:</b> <br>
			<a href="https://www.youtube.com/zeulewan"><font color="#1187FC">youtube.com/zeulewan</font></a>
			<br>	
			<br>		

			<b>LinkedIn:</b> <br>
			<a href="https://www.linkedin.com/in/zeul-mordasiewicz-8133561b9/"><font color="#1187FC">LinkedIn</font></a>
			<br>	
			<br>
			</div>


    		</div>
    		<div id="something" data-tab-content>	
      			<h1>About me</h1>

			<div id="myDiv">
     			Hi my name is Zeul, I'm 19, and I thought it would be fun to make a website. This website is fully self hosted 
			and coded. I am an aerospace engineering student at TMU (Toronto Metropolitan University formerly Ryerson).<br><br>
			<img src="media/portrait.jpg" alt="image not found">

			
			</div>
			</font>
    		</div><br>
	
  	</div>
</body>
</html>
