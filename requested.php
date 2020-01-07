<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="item.css">
  <style type="text/css">
  table,tr,td,th{
    border: 1pt solid blue;
    border-collapse: collapse;
    padding: 10px; 
  }
    .emp{
      font-size: 27px;
      color: yellow;
      font-family: consolas;
    }
    .det{
      color: black;
      font-family: consolas;
      font-weight: bold;
    }
  </style>
</head>

<body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
        <div id="header"><h1 style="color:white; text-align:center;">RESOURCE REQUEST DETAILS</h1></div>
    
            <?php
            include 'conn.php';

            echo '<table>';
            echo '<tr class="emp">';
            echo '<th scope="col">Resource Type</th>';
            echo '<th scope="col">Resource Name</th>';
            echo '<th scope="col">Resource Required</th>';
            echo '<th scope="col">Project Name</th>';
            echo '</tr>';
                      $result = mysqli_query($link,"SELECT Resource_type,Resource_name,qnt,Pname FROM allocated_resource");
            if($result)
            {
              while($obj = $result->fetch_object()) 
              {
                echo '<tr class="det">';
                echo '<td>'.$obj->Resource_type.'</td>';
                echo '<td>'.$obj->Resource_name.'</td>';
                echo '<td>'.$obj->qnt.'</td>';
                echo '<td>'.$obj->Pname.'</td>';
                echo '</tr>';
              }
            }
          echo '</td>';
          echo '</tr>';
          echo '</table>';
          ?>
</body>
</html>


