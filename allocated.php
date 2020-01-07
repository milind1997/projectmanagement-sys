<!DOCTYPE html>
<?php
include 'conn.php';
 if(isset($_POST['submit']))
    {
        $select=$_POST['name'];
        $rname=$_POST['resname'];
        $pname=$_POST['pname'];
        $tqnt=$_POST['qntallo'];
        $query="INSERT INTO allocated_resource (Pname,Resource_type,Resource_name,qnt)VALUES('$pname','$select','$pname','$tqnt')";
        mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
        header("location:index.html");
    }
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="item.css">
</head>
<body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
        <div id="header"><h1 style="color:white; text-align:center;">RESOURCE ALLOCATED</h1></div>
        <div class="container">
                <form method="POST">
                  <ul class="flex-outer">
                    <li>
                        <label for="first-name">Project Name</label>
                        <input type="text" name="pname" placeholder="">
                      </li>
                    <li>

                      <label for="first-name">RESOURCE TYPE</label>
                      <select id = "myopt" name="name" style="padding:2%">
                            <option>--select--</option>
                            <option value = "equipment">equipment</option>
                            <option value = "people">people</option>
                           
                          </select>
                    </li>
                    <li>
                      <label for="email">Resource Name</label>
                      <select id = "myopt" name="resname"style="padding:2%">
                            <option>--select--</option>
                            <option value = "printer">printer</option>
                            <option value = "scanner">scanner</option>
                            <option value = "datae">data entry</option>
                            <option value = "support">support</option>
                          </select>
                    </li>
                      
                      <li>
                        <label for="last-name">Quantity Allocated</label>
                        <input type="text" name="qntallo" placeholder="">
                      </li>
                    <li>
                      <button type="submit" name="submit" >Submit</button>
                    </li>
                  </ul>
                </form>
              </div>
			
        </div> 
    </div>
</div>
</body>
</html>
