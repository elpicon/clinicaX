<?php
include('../../../dist/includes/dbcon.php');
 include '../../layout/session.php';
 @session_start();
date_default_timezone_set('America/Lima');
 
 if(isset($_REQUEST['comando'])){
    

 $query=mysqli_query($con,"select * from eventos  where habil='false'")or die(mysqli_error());
 $x=0;
                while($row=mysqli_fetch_array($query)){
              
               if($x<1){
                   $buffer=$buffer."".$row['start'];
               }else{
                    $buffer=$buffer.",".$row['start'];
               }
               $x++;
                }
                echo $buffer;
                
 }
                
  ?>