<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script 
		src="../../../../../script.js" defer>

	</script>
	<link href="../../../../../styles.css" rel="stylesheet">
 	<title>Zeul's Website!</title>

</head>
<body>

    <?php
        $year = basename(dirname(__FILE__ , 3));
        $month = basename(dirname(__FILE__ , 2));   
        $day  = basename(dirname(__FILE__ , 1)); 
        $title = basename(__FILE__, ".php");


        $f = fopen("../../../../data/$year/$month/$day/$title.txt", 'r');
        $line = fgets($f);
        fclose($f);
        


    ?>


	<div class="banner">
	<br>
          <h1><?php echo $line?></h1>
		  <br>
	</div>
	
   
	<div class="center">

	<button class='button-10' role="button" onclick="location.href='../../../../../'">Go Back Home</button>
	</div>
	<br><br>
    <div class="tab-content">
    		
		
            <font face="Arial" color="#E7F5FE">



<?php





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
									
									$pagecontents = file_get_contents("../../../../data/$year/$month/$day/$title.txt");
									$newpc = str_replace("$line", "", $pagecontents);	
                                    jpg("1", "$newpc", "$year", "$month", "$day");
		
									echo ("</p> </div> <br>");


                                    function jpg($l,$pc,$a,$b,$c)
                                    {
                                        
                                        $x = str_replace("$l.jpg", "</p><img src='../../../../data/$a/$b/$c/$l.jpg' alt='image not found'><p>", $pc);
                                        $y = str_replace("$l.JPG", "</p><img src='../../../../data/$a/$b/$c/$l.JPG' alt='image not found'><p>", $x);
                                        $z = str_replace("$l.png", "</p><img src='../../../../data/$a/$b/$c/$l.png' alt='image not found'><p>", $y);	
                                        $q = str_replace("$l.jpeg", "</p><img src='../../../../data/$a/$b/$c/$l.jpeg' alt='image not found'><p>", $z);	
                
										
                                        if($l<10){	
                                            jpg($l+1,$q,$a,$b,$c);
                                        } 
                                        else 
                                        {	
                                            echo ("$q");
                                        }
                                    }

                        



?>







</div>
			</font>











</body>
</html>
