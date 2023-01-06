<?php 
$connection = mysqli_connect("localhost","root","","villemaroc")
    or die("Error " . mysqli_error($connection));
    $x=$_GET["q"];
    $sql="select * from ville where nomville like '".$x."%'";
    $result = mysqli_query($connection, $sql)
     or die("Error in Selecting " . mysqli_error($connection));
     $T=array();
     while($row =mysqli_fetch_assoc($result)){
         $T[]=$row;
        
     }
     echo json_encode($T); 
     //print_r($T);    
     //close the db connection    
      mysqli_close($connection); 

?>