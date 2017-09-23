<html>
<head>
<title>Arrays and functions:Part2</title>
    <style>
		 body {
			background-color: #D1F2EB;
		}  
		 h2{
			margin-left:100px;
			color:#1A5276;
		 }
		
		p{
			margin-left:100px;
		}
				  
    </style>
</head>
<body>
<?php

    $month= array("January" , "February" , "March" , "April" , "May" , "June" , "July" , "August" , "September" , "October" , "November" , "December" );
	echo "<br>";
    
    //Question1
	echo "<h2><u> Months - Standard For loop </u></h2>";
	echo"<p>";
	for($index=0;$index<sizeof($month);$index++)
	{
		echo "$month[$index]";
		echo "<br>";
	}
	echo"</p>";
	

    //Question 2
	echo "<h2><u> Alphabetically sorted months- For loop </u></h2>";
	echo"<p>";
    function Month_Sort($month){
    sort($month);
	for($index=0;$index<sizeof($month);$index++)
	{
		echo "$month[$index]";
		echo "<br>";
	}
	echo"</p>";
    }
    $month= array("January" , "February" , "March" , "April" , "May" , "June" , "July" , "August" , "September" , "October" , "November" , "December" );
    Month_Sort($month);
    


    // Question 3 
	echo "<h2><u> Months - foreach loop </u></h2>";
	echo"<p>";
    $month= array("January" , "February" , "March" , "April" , "May" , "June" , "July" , "August" , "September" , "October" , "November" , "December" );
	foreach($month as $value)
	{
		echo "$value\n";
		echo "<br>";
	}
	echo"</p>";



	//Question 4
	echo "<h2><u> Alphabetically sorted months- foreach loop </u></h2>";
	echo"<p>";	
    function Month_Sort_foreach($month){
    sort($month);
	foreach($month as $value)
	{
		echo "$value";
		echo "<br>";
	}
    echo"</p>";
    }
    $month= array("January" , "February" , "March" , "April" , "May" , "June" , "July" , "August" , "September" , "October" , "November" , "December" );
    Month_Sort_foreach($month);

?>
</body>
</html>