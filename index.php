<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="This is Zeul's website. On here you'll find his blog, random thoughts and various other things. 
										This site is fully self hosted and coded">
	
	<meta name="author" content="Zeulewan Mordasiewicz">

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
					for ($year=date("Y"); $year>=2022; $year--) 
					{
						for ($month=12; $month>=1; $month--) 
						{
							for ($day=31; $day>= 1; $day--) 
							{		
								$pagecontents = file_get_contents("blog/data/$year/$month/$day/$day.txt");
								if ($pagecontents!=null)
								{
									
									echo ("<div id='blog'> <p>");
											
									

									switch ($month) 
									{
										case 1:
											if ($day==1){
												echo "<b>January ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>January ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>January ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>January ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>January ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>January ${day}rd $year</b> <br>";
											} else{
												echo "<b>January ${day}th $year</b> <br>";
											}
											break;
										case 2:
											if ($day==1){
												echo "<b>February ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>February ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>February ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>February ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>February ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>February ${day}rd $year</b> <br>";
											} else{
												echo "<b>February ${day}th $year</b> <br>";
											}
											break;
										case 3:
											if ($day==1){
												echo "<b>March ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>March ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>March ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>March ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>March ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>March ${day}rd $year</b> <br>";
											} else{
												echo "<b>March ${day}th $year</b> <br>";
											}
											break;
										case 4:
											if ($day==1){
												echo "<b>April ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>April ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>April ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>April ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>April ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>April ${day}rd $year</b> <br>";
											}else{
												echo "<b>April ${day}th $year</b> <br>";
											}
											break;
										case 5:
											if ($day==1){
												echo "<b>May ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>May ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>May ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>May ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>May ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>May ${day}rd $year</b> <br>";
											} else{
												echo "<b>May ${day}th $year</b> <br>";
											}
											break;
										case 6:
											if ($day==1){
												echo "<b>June ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>June ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>June ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>June ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>June ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>June ${day}rd $year</b> <br>";
											} else{
												echo "<b>June ${day}th $year</b> <br>";
											}
											break;
										case 7:
											if ($day==1){
												echo "<b>July ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>July ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>July ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>July ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>July ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>July ${day}rd $year</b> <br>";
											} else{
												echo "<b>July ${day}th $year</b> <br>";
											}
											break;	
										case 8:
											if ($day==1){
												echo "<b>August ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>August ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>August ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>August ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>August ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>August ${day}rd $year</b> <br>";
											} else{
												echo "<b>August ${day}th $year</b> <br>";
											}
											break;									
										case 9:
											if ($day==1){
												echo "<b>September ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>September ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>September ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>September ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>September ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>September ${day}rd $year</b> <br>";
											} else{
												echo "<b>September ${day}th $year</b> <br>";
											}
											break;
										case 10:
											if ($day==1){
												echo "<b>October ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>October ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>October ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>October ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>October ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>October ${day}rd $year</b> <br>";
											} else{
												echo "<b>October ${day}th $year</b> <br>";
											}
											break;
										case 11:
											if ($day==1){
												echo "<b>November ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>November ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>November ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>November ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>November ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>November ${day}rd $year</b> <br>";
											} else{
												echo "<b>November ${day}th $year</b> <br>";
											}
											break;
										case 12:
											if ($day==1){
												echo "<b>December ${day}st $year</b> <br>";
											} else if ($day==2){
												echo "<b>December ${day}nd $year</b> <br>";
											} else if ($day==3){
												echo "<b>December ${day}rd $year</b> <br>";
											} else if ($day==21){
												echo "<b>December ${day}st $year</b> <br>";
											} else if ($day==22){
												echo "<b>December ${day}nd $year</b> <br>";
											} else if ($day==23){
												echo "<b>December ${day}rd $year</b> <br>";
											} else{
												echo "<b>December ${day}th $year</b> <br>";
											}
											break;		
									}

									echo ("</p> <p>");
								
									$pagecontents = file_get_contents("blog/data/$year/$month/$day/$day.txt");
									jpg("1", "$pagecontents", "$year", "$month", "$day");
								

									echo ("</p> </div> <br>");

									$post_counter++;
									if ($post_counter>10){
										break 3;
									}


								}
							}
						}
					}
					

					function jpg($l,$pc,$a,$b,$c)
					{
						
						$x = str_replace("$l.jpg", "</p><img src='blog/data/$a/$b/$c/$l.jpg' alt='image not found'><p>", $pc);
						$y = str_replace("$l.JPG", "</p><img src='blog/data/$a/$b/$c/$l.JPG' alt='image not found'><p>", $x);
						$z = str_replace("$l.png", "</p><img src='blog/data/$a/$b/$c/$l.png' alt='image not found'><p>", $y);	
						$q = str_replace("$l.jpeg", "</p><img src='blog/data/$a/$b/$c/$l.jpeg' alt='image not found'><p>", $z);	

						if($l<5){	
							jpg($l+1,$q,$a,$b,$c);
						} 
						else 
						{	
							echo $q;
						}
					}
				?>


<br><br><br>
			<div id="otherformat">
						
				<b>Blog Archive:</b>
				<br>
				<br>	
				
			<?php 	
				for ($year=date("Y"); $year>=2022; $year--) 
				{	
					if (is_dir("blog/data/$year"))
					{
						if (!is_dir("blog/archive/$year"))
						{
							mkdir("blog/archive/$year", 0777, true);
							chmod("blog/archive/$year", 0777);
						}
						echo "$year <br>";
						for ($month=12; $month>=1; $month--) 
						{
							if (is_dir("blog/data/$year/$month"))
								{
									
									$tmplt = file_get_contents("blog/archive/template.php");
									$newfile = fopen("blog/archive/$year/$month.php","w") or die("Unable to open file!");
									chmod("blog/archive/$year/$month.php", 0777);
									fwrite($newfile, $tmplt);
									fclose($newfile);
									echo("<button onclick= \"location.href='blog/archive/$year/$month.php'\">May</button>");
								}
						}
						echo("<br>");
					}
						
				}
				?>
			</div>
</div>





		<div id="thoughts" data-tab-content>
			<h1>This is a place to put my thoughts on random things</h1>
			<?php 




				for ($year=date("Y"); $year>=2021; $year--) 
				{	
					if (is_dir("thoughts/data/$year"))
					{
						if (!is_dir("thoughts/archive/$year"))
						{
							mkdir("thoughts/archive/$year", 0777, true);
							chmod("thoughts/archive/$year", 0777);
						}
						
						
						for ($month=12; $month>=1; $month--) 
						{							
							if (is_dir("thoughts/data/$year/$month"))
							{
								if (!is_dir("thoughts/archive/$year/$month"))
								{
									mkdir("thoughts/archive/$year/$month", 0777, true);
									chmod("thoughts/archive/$year/$month", 0777);
								}


								for ($day=31; $day>= 1; $day--) 
								{
									if (is_dir("thoughts/data/$year/$month/$day"))
									{

										if (!is_dir("thoughts/archive/$year/$month/$day"))
										{
											mkdir("thoughts/archive/$year/$month/$day", 0777, true);
											chmod("thoughts/archive/$year/$month/$day", 0777);
										}


										foreach(glob("thoughts/data/$year/$month/$day/*.txt") as $file) 
										{	
											$bname = null;
											$bname = basename($file, ".txt");
										
										}

										$tmplt = file_get_contents("thoughts/archive/template.php");
										$newfile = fopen("thoughts/archive/$year/$month/$day/$bname.php","w") or die("Unable to open file!");
										chmod("thoughts/archive/$year/$month/$day/$bname.php", 0777);
										fwrite($newfile, $tmplt);
										fclose($newfile);
									
										$f = fopen("thoughts/data/$year/$month/$day/$bname.txt", 'r');
										$line1 = fgets($f);
										fclose($f);
										echo("<button onclick= \"location.href='thoughts/archive/$year/$month/$day/$bname.php'\">$line1</button>");
										echo("<br> <br>");
									}
								}
							}	
						}
					}				
				}


			
			?>



		</div>















   		<div id="links" data-tab-content>
 			<h1>Here are some links to things.</h1>
			
			
			<div id="otherformat">
			
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

			<div id="otherformat">
     			Hi my name is Zeul (full name Zeulewan), I'm 19, and I thought it would be fun to make a website. This website is fully self hosted 
			and coded and is available <a href="https://github.com/Zeulewan/zeulewan.com"><font color="#1187FC">here</font></a>. I am an aerospace engineering student at TMU (Toronto Metropolitan University formerly Ryerson).<br><br>
			<img src="media/portrait.jpg" alt="image not found">

			
			</div>
			</font>
    		</div><br>
	
  	</div>
</body>
</html>
