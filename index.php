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
					for ($i=2022; $i>=2022; $i--) 
					{
						for ($j=12; $j>=1; $j--) 
						{
							for ($k=31; $k>= 1; $k--) 
							{		
								$pagecontents = file_get_contents("blog/$i/$j/$k/$k.html");
								if ($pagecontents!=null)
								{
									echo file_get_contents("format/a.html");

									switch ($j) {
										case 1:
											if ($k==1){
												echo "<b>January ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>January ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>January ${k}rd $i</b> <br>";
											} else{
												echo "<b>January ${k}th $i</b> <br>";
											}
											break;
										case 2:
											if ($k==1){
												echo "<b>February ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>February ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>February ${k}rd $i</b> <br>";
											} else{
												echo "<b>February ${k}th $i</b> <br>";
											}
											break;
										case 3:
											if ($k==1){
												echo "<b>March ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>March ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>March ${k}rd $i</b> <br>";
											} else{
												echo "<b>March ${k}th $i</b> <br>";
											}
											break;
										case 4:
											if ($k==1){
												echo "<b>April ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>April ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>April ${k}rd $i</b> <br>";
											} else{
												echo "<b>April ${k}th $i</b> <br>";
											}
											break;
										case 5:
											if ($k==1){
												echo "<b>May ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>May ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>May ${k}rd $i</b> <br>";
											} else{
												echo "<b>May ${k}th $i</b> <br>";
											}
											break;
										case 6:
											if ($k==1){
												echo "<b>June ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>June ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>June ${k}rd $i</b> <br>";
											} else{
												echo "<b>June ${k}th $i</b> <br>";
											}
											break;
										case 7:
											if ($k==1){
												echo "<b>July ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>July ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>July ${k}rd $i</b> <br>";
											} else{
												echo "<b>July ${k}th $i</b> <br>";
											}
											break;	
										case 8:
											if ($k==1){
												echo "<b>August ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>August ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>August ${k}rd $i</b> <br>";
											} else{
												echo "<b>August ${k}th $i</b> <br>";
											}
											break;									
										case 9:
											if ($k==1){
												echo "<b>September ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>September ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>September ${k}rd $i</b> <br>";
											} else{
												echo "<b>September ${k}th $i</b> <br>";
											}
											break;
										case 10:
											if ($k==1){
												echo "<b>October ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>October ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>October ${k}rd $i</b> <br>";
											} else{
												echo "<b>October ${k}th $i</b> <br>";
											}
											break;
										case 11:
											if ($k==1){
												echo "<b>November ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>November ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>November ${k}rd $i</b> <br>";
											} else{
												echo "<b>November ${k}th $i</b> <br>";
											}
											break;
										case 12:
											if ($k==1){
												echo "<b>December ${k}st $i</b> <br>";
											} else if ($k==2){
												echo "<b>December ${k}nd $i</b> <br>";
											} else if ($k==3){
												echo "<b>December ${k}rd $i</b> <br>";
											} else{
												echo "<b>December ${k}th $i</b> <br>";
											}
											break;		
									
									
										}


									$pagecontents = file_get_contents("blog/$i/$j/$k/$k.html");
									jpg("1", "$pagecontents", "$i", "$j", "$k");
								
									echo file_get_contents("format/b.html");
								}
							}
						}
					}
	
					function jpg($l,$pc,$a,$b,$c)
					{
						
						$x = str_replace("$l.jpg", "<br><br><img src='blog/$a/$b/$c/$l.jpg' alt='image not found'><br>", $pc);
						$y = str_replace("$l.JPG", "<br><br><img src='blog/$a/$b/$c/$l.JPG' alt='image not found'><br>", $x);
						$z = str_replace("$l.png", "<br><br><img src='blog/$a/$b/$c/$l.png' alt='image not found'><br>", $y);	
						$q = str_replace("$l.jpeg", "<br><br><img src='blog/$a/$b/$c/$l.jpeg' alt='image not found'><br>", $z);	

						if($l<5){	
							jpg($l+1,$q,$a,$b,$c);
						} 
						else 
						{	
							echo $q;
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

			<b>My GitHub:</b> <br>
			<a href="https://github.com/Zeulewan"><font color="#1187FC">GitHub</font></a>
			<br>	
			<br>
			
			<b>Site I use to compress all my images</b> <br>
			<a href="https://imagecompressor.com/"><font color="#1187FC">imagecompressor.com</font></a>
				
					

			</div>


    		</div>
    		<div id="something" data-tab-content>	
      			<h1>About me</h1>

			<div id="myDiv">
     			Hi my name is Zeul, I'm 19, and I thought it would be fun to make a website. This website is fully self hosted 
			and coded is available <a href="https://github.com/Zeulewan/zeulewan.com"><font color="#1187FC">here</font></a>. I am an aerospace engineering student at TMU (Toronto Metropolitan University formerly Ryerson).<br><br>
			<img src="media/portrait.jpg" alt="image not found">

			
			</div>
			</font>
    		</div><br>
	
  	</div>
</body>
</html>
