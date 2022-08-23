<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php
require_once 'process.php'; ?>
<?php
$conn=new mysqli('localhost', 'root', 'root','crud'); ?>
<?php
$sql="SELECT * FROM data";
$result = $conn->query($sql); ?>


<table><thead><tr>
    <th>Name</th>
    <th>Location</th>
    <th>Action</th>
</tr></thead>
<?php 
while ($row=$result->fetch_assoc()): ?>

<tr>
<th><?php echo $row['name'];?></th>
<th><?php echo $row['location'];?></th>
<td>
<a href="im">edit</a>
<a href="process.php?delete=<?php echo $row['id'];?>">delete</a>

</td>

</tr>
<?php endwhile; ?>

</table>






<form action="process.php" method="post">
<label> Name</label>
<input type="text" name="name" placeholder="Enter your name">
<label> Location</label>
<input type="text" name="location" placeholder="Enter your Location">
<button type="submit" name="save" class="btn btn-primary">Save</button>

</form>

</body>
</html>