<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script 
		src="../../script.js" defer>
	</script>
	<link href="../../styles.css" rel="stylesheet">
 	<title>Zeul's Website!</title>

</head>
<body>
	
	<div class="header">
  		<h1>Blog Archive For May 2022</h1>
		  <h4>(Chronological)</h4>
	</div>




	<button onclick="location.href='../../'">Go Back Home</button>
	

  	<div class="tab-content">
	  			
		
				<font face="Arial" color="#E7F5FE">
				<br>
			
				<?php 
					for ($i=2025; $i>=2022; $i--) 
					{
						for ($j=12; $j>=1; $j--) 
						{
							for ($k=1; $k<= 31; $k++) 
							{		
								$pagecontents = file_get_contents("../raw/$i/$j/$k/$k.html");
								if ($pagecontents!=null)
								{
									echo file_get_contents("../../format/a.html");

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

									
									$pagecontents = file_get_contents("../raw/$i/$j/$k/$k.html");
									jpg("1", "$pagecontents", "$i", "$j", "$k");
								
									echo file_get_contents("../../format/b.html");

									$post_counter++;
									if ($post_counter>4){
										break 3;
									}



								}
							}
						}
					}
					

					function jpg($l,$pc,$a,$b,$c)
					{
						
						$x = str_replace("$l.jpg", "<br><br><img src='../raw/$a/$b/$c/$l.jpg' alt='image not found'><br>", $pc);
						$y = str_replace("$l.JPG", "<br><br><img src='../raw/$a/$b/$c/$l.JPG' alt='image not found'><br>", $x);
						$z = str_replace("$l.png", "<br><br><img src='../raw/$a/$b/$c/$l.png' alt='image not found'><br>", $y);	
						$q = str_replace("$l.jpeg", "<br><br><img src='../raw/$a/$b/$c/$l.jpeg' alt='image not found'><br>", $z);	

						if($l<5){	
							jpg($l+1,$q,$a,$b,$c);
						} 
						else 
						{	
							echo $q;
						}
					}
				?>
				<b>2022<b><br>

				<button onclick="location.href=''">May</button>


			



			</font>
    		</div><br>
	
  	</div>
</body>
</html>
