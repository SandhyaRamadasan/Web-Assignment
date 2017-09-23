<!doctype html>
<head>
<title> Charlie ate my Lunch! </title>
	<style>
		body {
			background-color: linen;
		}

		h2 {
			color: maroon;
			font-weight:bold;
			font-family: sans-serif;   
		} 

		div{
			color:red;
            
		}
		
		p {
			color:green;
		}
	</style>
</head>

<body>
<?php
	function isBitten(){
	 $min = 1;
	 $max = 2;
	 $eat = rand($min,$max);
		if($eat == 1){
			return true;
		}
 		else{
			return false;
		}
	}
	
$Bool=isBitten();

if($Bool){
    echo "<br/>";
echo "<h2 color=red><center><i>Charlie ate my lunch!</i></center></h2>"; 
    echo "<br/>";
    echo "<p>Chances of Eating= TRUE </p>";
}

else{
    echo "<br/>";
    echo "<h2><center><i>Charlie did not eat my lunch!</i></center></h2>";
     echo "<br/>";
    echo "<div>Chances of Eating= FALSE </div> ";
}
?>
</body>
</html>
