<html>
<head>
<title> CheckerBoard </title>

	<style>
		body 
		{
			background-color: #FDFEFE;
		}  
		h1{
			text-align: center;
			color:#cc3399;
		}
		table{
			
			width:300px;
			margin: auto;
			border: 1px ;
			border-spacing: 1px;
		   
		}
		
		td{
			width: 35px;
			height:35px;
			padding:1px;
		}
		
		td.RED{
			background-color: red;
		}
		td.BLACK{
			background-color: black;
		}          
	</style>
</head>
<body>

	<?php 
      echo "<h1><center><i><u>Checker Board</u></i></center></h1>"; 
		echo "<table >";
			for ($x=1; $x<=8; $x++)
			{
				echo "<tr>";
				for($y=1; $y<=8;$y++)
				{
					if (($x+$y) % 2 == 0)
						echo "<td class=BLACK></td>";
					else 
						echo "<td class=RED></td>";
				}
				echo "</tr>";
			}
		echo "</table>";
?>
</body>
</html>
