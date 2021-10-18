<?php
include 'includes/common.php';
$select="SELECT * FROM first_db";
$select_query=mysqli_query($con,$select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>THIS Bank</title>
</head>

<body>
<?php
include 'includes/header.php';
?>
<div class="bg">
<div class="container">
<div class="row">
<h2 class="text-center" style="margin-top: 40px; color: black; font-weight: bolder;">Transfer Money</h2>
<br>
<div class="col-md-offset-2 col-md-8">
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Balance</th>
<th>Operation</th>
</tr>
</thead>
<tbody>
<?php 
while($row=mysqli_fetch_assoc($select_query)){
?>
<tr style="color :black; font-weight: bolder;" >
<td ><?php echo $row['id'] ?></td>
<td ><?php echo $row['Name']?></td>
<td ><?php echo $row['email']?></td>
<td ><?php echo $row['Current Balance']?></td>
<td><a href="transfer.php?id= <?php echo $row['id'] ; ?>"> <button type="button" class="btn">Transfer</button></a></td> 
</tr>
<?php
}
?>
<?php
include 'includes/footer.php';
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</body>
</html>
