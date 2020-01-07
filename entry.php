<!DOCTYPE html>
<?php
include 'conn.php';
 if(isset($_GET['submit']))
    {
        $select=$_GET['res'];
        $rname=$_GET['rname'];
        $tqnt=$_GET['tqnt'];
        $query="INSERT INTO resource(Resource_type,Resource_name,total_alloc)VALUES('$select','$rname','$tqnt')";
        mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
        header("location:index.html");
    }
?>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="item.css">
</head>
<body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>  
        <div id="header"><h1 style="color:white; text-align:center;">RESOURCE ENTERED</h1></div>
        <div class="container">
                <form>
                  <ul class="flex-outer">
                    <li>
                      <label for="first-name">Resource Type</label>
                      <select name="res" id = "myopt" style="padding:2%">
                            <option>--select--</option>
                            <option value = "people">people</option>
                            <option value = "equipment">equipment</option>
                          </select>
                    </li>
                    <li>
                      <label for="last-name">Resource Name</label>
                      <input type="text" name="rname" placeholder="Resource Name">
                    </li>
                    <li>
                        <label for="last-name">Total Quantity</label>
                        <input type="text" name="tqnt" placeholder="Quantity Allocated">
                    </li>
                    <li>
                      <button type="submit" name="submit">submit</button>
                    </li>
                  </ul>
                </form>
              </div>
			
        </div> 
    </div>
</div>
</body>
</html>
