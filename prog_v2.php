<?php 
 if(isset($_POST['load'])){
       $loc =(json_decode($_POST['load'], true));
	 //  $loc= stripslashes($ar1);
      //$loc=json_encode($locc);
   //echo $loc;
   $conn=new mysqli("localhost","root","","mydab");
 if($conn->connect_error){
	 die($conn->connect_error);
 }
  //if(count($loc)>0){
 for($i=0;$i<count($loc);$i++){
$targe=$loc[$i]['target'];
 $typ=$loc[$i]['type'];
 $dat=$loc[$i]['date'];
 $sql="Insert Into tar Values('$targe',' $typ','$dat')";
 
 $conn->query($sql);
 }
 
 if($conn->affected_rows >0)
 {
	echo("attribute insered");
	 
	 
 }
 else
 {
	echo("fild to insert ");
	 
	 
 }
 
 }
   
    if(isset($_POST['unload'])){
       $loc =(json_decode($_POST['unload'], true));
	 //  $loc= stripslashes($ar1);
      //$loc=json_encode($locc);
   //echo $loc;
   $conn=new mysqli("localhost","root","","mydab");
 if($conn->connect_error){
	 die($conn->connect_error);
 }
  //if(count($loc)>0){
 for($i=0;$i<count($loc);$i++){
$targe=$loc[$i]['target'];
 $typ=$loc[$i]['type'];
 $dat=$loc[$i]['date'];
 $sql="Insert Into tar Values('$targe',' $typ','$dat')";
 
 $conn->query($sql);
 }
 
 if($conn->affected_rows >0)
 {
	echo("attribute insered");
	 
	 
 }
 else
 {
	echo("fild to insert ");
	 
	 
 }
 
 }
   
   if(isset($_POST['generate'])){
       $loc =(json_decode($_POST['generate'], true));
	 //  $loc= stripslashes($ar1);
      //$loc=json_encode($locc);
   //echo $loc;
   $conn=new mysqli("localhost","root","","mydab");
 if($conn->connect_error){
	 die($conn->connect_error);
 }
  //if(count($loc)>0){
 for($i=0;$i<count($loc);$i++){
$targe=$loc[$i]['target'];
 $typ=$loc[$i]['type'];
 $dat=$loc[$i]['date'];
 $sql="Insert Into tar Values('$targe',' $typ','$dat')";
 
 $conn->query($sql);
 }
 
 if($conn->affected_rows >0)
 {
	echo("attribute insered");
	 
	 
 }
 else
 {
	echo("fild to insert ");
	 
	 
 }
 
 }
   
   
   
   if(isset($_GET['tar'])){
   $sql = "Select * from  tar"; 
   $conn = new mysqli("localhost", "root", "", "mydab");
   if($conn->connect_error){
   	die($conn->connect_error);
    }
    if ($result = $conn->query($sql)){
      $rows = array();
      if($result->num_rows > 0){
       while($row = $result->fetch_assoc()){
        array_push($rows, $row);
       }
      //Convert to JSON Before Sending to Client
     echo json_encode($rows);
     }
  }
  else{
    echo "No Data to Retrieve";
   }
  }
   
   
   
   
   
   
   
   
   
   
   
   
   ?>