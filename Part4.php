<html>
<head>
<title> Best Restaurants </title>
  <style>
		 body {
			background-color: #FADBD8;
		}  
		h1 {
    text-align: center;
          color:#A93226;
}
	h2{
    text-align: left;
          color:#935116;
          font-weight:bold;
}
table {
display:block;
	margin-left:auto;
	margin-right:auto;
	border-collapse: collapse;
}

 td, th {
    border: 1px solid ; 
   
}


				  
    </style>
</head>
    <body>


<?php

echo"<h1><center><u> Best Restaurants </u></center></h1>";
 $restaurants= array("Chama Gaucha","Aviva by Kameel","Bone’s Restaurant","Umi Sushi Buckhead","Fandangles","Capital Grille","Canoe","One Flew South","Fox Bros. BBQ","South City Kitchen Midtown");

 $avgcosts= array("Chama Gaucha"=>"$40.50","Aviva by Kameel"=>" $15.00","Bone’s Restaurant"=>"$65.00","Umi Sushi Buckhead"=>"$40.50","Fandangles"=>"$30.00","Capital Grille"=>"$60.50","Canoe"=>"$35.50","One Flew South"=>"$21.00","Fox Bros. BBQ"=>"$15.00","South City Kitchen Midtown"=>"$29.00" );	
	echo"<h2>Restaurants</h2>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Average Cost</th>";
	echo "</tr>";
	for($i=0;$i<sizeof($restaurants);$i++)
	{
		echo "<tr>";
		echo "<td>$restaurants[$i]</td>";
		$store=$restaurants[$i];
		echo "<td><center>".$avgcosts[$store]."</center></td>";
		echo "</tr>";
		echo "</tr>";
	}
	echo "</table>";


echo "<br><br>";   
function rest_order_price($avgcosts){
	asort($avgcosts);
	echo"<h2>Restaurants Ordered list- By Price</h2>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Average Cost</th>";
	echo "</tr>";
	foreach($avgcosts as $x => $x_value) 
	{
		echo "<tr>";
		echo "<td>$x</td>";
		echo "<td>$x_value</td>";
		echo "</tr>";;
}
	echo "</table>";
}
rest_order_price($avgcosts);



	echo "<br><br>";    
function rest_order_name($restaurants,$avgcosts){
	sort($restaurants);
	echo"<h2>Restaurants Ordered list- By Name</h2>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Average Cost</th>";
	echo "</tr>";
	for($i=0;$i<count($restaurants);$i++)
	{
		echo "<tr>";
		echo "<td>$restaurants[$i]</td>";
		$store=$restaurants[$i];
		echo "<td>".$avgcosts[$store]."</td>";
		echo "</tr>";
	}
	echo "</table>";
    }
rest_order_name($restaurants,$avgcosts);
	
?>
</body>
</html>