<!DOCTYPE html>
<?php 
session_start();
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="item1.css">
  <style type="text/css">
  table,tr,td,th{
    border: 1pt solid blue;
    border-collapse: collapse;
    padding: 10px; 
    margin-top:1%
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
<h1 style="color:yellow";>PROJECT DETAILS</h1>
  </div>      
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>    
              
                        <?php
                        $name =$_SESSION['Ename'];

              include 'conn.php';
            echo '<table>';
            echo '<tr class="emp">';
            echo '<th scope="col">Project Name</th>';
            echo '<th scope="col">Project Head</th>';
            echo '<th scope="col">Client Name</th>';
            echo '<th scope="col">Technology</th>';
            echo '<th scope="col">Start Date</th>';
            echo '<th scope="col">Finish Date</th>';
            echo '<th scope="col">status</th>';
            echo '</tr>';
$result = mysqli_query($link,"SELECT Pname,ProjectHead,Cname,Technologies,StartDate,EndDate,Status FROM projects where Ename='$name' ");
            if($result)
            {
              while($obj = $result->fetch_object()) 
              {
                echo '<tr class="det">';
                echo '<td>'.$obj->Pname.'</td>';
                echo '<td>'.$obj->ProjectHead.'</td>';
                echo '<td>'.$obj->Cname.'</td>';
                echo '<td>'.$obj->Technologies.'</td>';
                echo '<td>'.$obj->StartDate.'</td>';
                echo '<td>'.$obj->EndDate.'</td>';
                echo '<td>'.$obj->Status.'</td>';
                echo '</tr>';
              }
            }
          echo '</td>';
          echo '</tr>';
          echo '</table>';
           ?>
			
       

</body>
</html>

