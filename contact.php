
<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="ngo";

 $conn=new mysqli($servername,$username,$password,$dbname);

 if($conn->connect_error)
 {
  die("connection failed".$conn->connect_error);
 }


if(isset($_POST['submit'])){

 $sql = "INSERT INTO contact(name,mobile,email,message)VALUES('".$_POST["name"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["msg"]."')";
 if($conn->query($sql)===TRUE){
?><?php
  echo "Submitted successfully";
  header('location:contact.html');

 }
else
{
 echo "error:".$sql."<br>" .$conn->error;
}
}
?>
