<?php
$conn=new mysqli('localhost', 'root', 'root','crud'); 

if(isset($_POST['save'])){
    $name=$_POST['name'];
    $location=$_POST['location'];
    $sql= "INSERT INTO data (name,Location) VALUES ('$name', '$location')";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }

header("location: index.php");

}


if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $sql="DELETE FROM data WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }

header("location: index.php");
}