<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="item1.css">
	<style type="text/css">
	body{
		margin: 0px 210px 210px 210px;
	}
  table,tr,td,th{
    border: 1pt solid blue;
    border-collapse: collapse;
    padding: 15px; 
    margin-left:6%;
    margin-top:1%;
  }
    .emp{
      font-size: 26px;
      color: yellow;
      font-family: consolas;
    }
    .det{
      color: black;
      font-family: consolas;
      font-weight: bold;
    }
    .topnav {
  
  background-color:#403060;
  display: block;
  text-align:center;
}
  </style>
</head>
<body>
<div class="topnav">
<h1 style="color:yellow";>RESOURCE REQUEST</h1>
  </div>
       
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>    
              
              <?php

              include 'conn.php';
            echo '<table>';
            echo '<tr class="emp">';
            echo '<th scope="col">Project Name</th>';
            echo '<th scope="col">Resource Type</th>';
            echo '<th scope="col">Resource Name</th>';
            echo '<th scope="col">Quantity</th>';
            echo '</tr>';
$result = mysqli_query($link,"SELECT Pname,Resource_Type,Resource_Name,qnt FROM allocated_resource");
            if($result)
            {
              while($obj = $result->fetch_object()) 
              {
                echo '<tr class="det">';
                echo '<td>'.$obj->Pname.'</td>';
                echo '<td>'.$obj->Resource_Type.'</td>';
                echo '<td>'.$obj->Resource_Name.'</td>';
                echo '<td>'.$obj->qnt.'</td>';
                echo '</tr>';
              }
            }
          echo '</td>';
          echo '</tr>';
          echo '</table>';
           ?>
			
       

</body>
</html>
        
</body>
</html>