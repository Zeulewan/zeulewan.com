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



<div class="banner">
<h1><br>Blog Archive Menu<br><br></h1>
</div>
<div class="tab-content">

<div class="center">
<button class="button-10" role="button" onclick="location.href='../../../'"> Go Back Home </button>

</div>


						
	
                        
                    <?php 	
                        for ($year=2022; $year<=date("Y"); $year++) 
                        {	
                            if (is_dir("blog/data/$year"))
                            {
                                if (!is_dir("blog/archive/$year"))
                                {
                                    mkdir("blog/archive/$year", 0777, true);
                                    chmod("blog/archive/$year", 0777);
                                }
                                echo ("<br><div id='blog'> <p>");
                                echo "<b>$year</b> <br><br>";
                                for ($month=1; $month<=12; $month++) 
                                {
                                    if (is_dir("blog/data/$year/$month"))
                                        {
                                            
                                            $tmplt = file_get_contents("blog/archive/template.php");
                                            $newfile = fopen("blog/archive/$year/$month.php","w") or die("Unable to open file!");
                                            chmod("blog/archive/$year/$month.php", 0777);
                                            fwrite($newfile, $tmplt);
                                            fclose($newfile);
        
                                            switch ($month) 
                                            {
                                                case 1:
                                                    $monthtxt = ("January");
                                                    break;
                                                case 2:
                                                    $monthtxt = ("Feburary");
                                                    break;
                                                case 3:
                                                    $monthtxt = ("March");
                                                    break;
                                                case 4:
                                                    $monthtxt = ("Arpil");
                                                    break;
                                                case 5:
                                                    $monthtxt = ("May");
                                                    break;		
                                                case 6:
                                                    $monthtxt = ("June");
                                                    break;	
                                                case 7:
                                                    $monthtxt = ("July");
                                                    break;
                                                case 8:
                                                    $monthtxt = ("August");
                                                    break;
                                                case 9:
                                                    $monthtxt = ("September");
                                                    break;
                                                case 10:
                                                    $monthtxt = ("October");
                                                    break;	
                                                case 11:
                                                    $monthtxt = ("November");
                                                    break;		
                                                case 12:
                                                    $monthtxt = ("December");
                                                    break;
                                            }
                                            
        
                                           
                                           
                                            echo("<button class='button-10' onclick= \"location.href='blog/archive/$year/$month.php'\">$monthtxt</button> ");
                                        }
                                }
                                echo("</div>");
                            }
                                
                        }
                        ?>
 </div>

</body>
</html>
