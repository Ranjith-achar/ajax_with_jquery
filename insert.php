<?php 

//print_r($_POST);
$link= mysqli_connect("localhost","root","","college");


$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];

$query="INSERT INTO students (name,email,contact)
VALUES('$name','$email','$contact')";

$result = mysqli_query($link,$query);

if($result==true){
    echo "inserted succesfully";
    
}
        
else
{
    
    echo "erro occured in code";
}
        

?>

