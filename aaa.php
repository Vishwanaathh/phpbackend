<?php 
$databasefile='mydatabase.sqlite';
$pdo=new PDO('sqlite:'.$databasefile);
$name=$_GET['name'];
$pass=$_GET['Pass'];


$query ="INSERT INTO users (username, password)
  VALUES ('$name', '$pass')";
$stmt=$pdo->prepare($query);
if($stmt->execute()===false){
  echo "error";
}
else{
  echo "user created";
}









?>