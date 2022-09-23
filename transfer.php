<?php
include 'includes/common.php';
$sid=$_GET['id'];
$select = "SELECT * FROM first_db where id=$sid";
$select_query=mysqli_query($con,$select);
$row = mysqli_fetch_assoc($select_query);
if(isset($_POST['submit']))
{
$from = $_GET['id'];
$to = $_POST['to'];
$amount = $_POST['amount'];

$select = "SELECT * from first_db where id=$from";
$select_query = mysqli_query($con,$select);
$row1 = mysqli_fetch_array($select_query); // returns array or output of user from which the amount is to be transferred.

$receiver = "SELECT * from first_db where id=$to ";
$query = mysqli_query($con,$receiver);
$row2 = mysqli_fetch_array($query);

// constraint to check input of negative value by user
if (($amount)<0)
{
echo '<script>';
echo ' alert("Oops! Negative values cannot be transferred")'; 
echo '</script>';
}
else if($amount > $row1['Current Balance']) 
{
echo '<script>';
echo ' alert("Bad Luck! Insufficient Balance")';
echo '</script>';
}
// constraint to check zero values
else if($amount == 0){
echo "<script>";
echo "alert('Oops! Zero value cannot be transferred')";
echo "</script>";
}
else {
$newbalance = (($row1['Current Balance']) - $amount);
echo $amount;
$new = "UPDATE `first_db` SET `Current Balance` = $newbalance WHERE `first_db`.`id` = $from";
mysqli_query($con,$new);
$newbalance = (($row2['Current Balance']) + $amount);
$new2 = "UPDATE `first_db` SET `Current Balance` = $newbalance WHERE `first_db`.`id` = $to";
mysqli_query($con,$new2);
$sender = $row1['Name'];
$receivr = $row2['Name'];
$insert = "INSERT INTO transfer(`sender`, `receiver`, `amount`) VALUES ('$sender','$receivr','$amount')";
$query=mysqli_query($con,$insert);

if($query){
echo "<script> alert('Transaction Successful');
window.location='transaction_history.php';
</script>";

}
$newbalance= 0;
$amount =0;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>THIS Bank</title>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T5Y271MD51"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T5Y271MD51');
</script>
<body>
<?php
include 'includes/header.php';
?>
<div class="bg">
<div class="container">
<h2 class="text-center" style="margin-top: 100px; color: black; font-weight:bold">Transaction</h2>
<br>
<br>
<div class="row">
<form method="POST" name="send">
<table class="table table-hover" style="color: black; ">
<thead>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Balance</th>
</thead>
<tbody>
<tr style="color: black; font-weight: bold; ">
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['Name'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['Current Balance'] ?></td>
</tr>
</tbody>
</table>
<br><br>
<label style="color: black; ">Transfer To:</label>
<select name="to" class="form-control" required>
<option value="" disabled selected>Choose</option>
<?php
$sid=$_GET['id'];
$select = "SELECT * FROM  first_db where id!=$sid ";
$select_query=mysqli_query($con,$select);
while($row = mysqli_fetch_assoc($select_query)) {
?>
<option class="table" value="<?php echo $row['id'];?>" >
<?php echo $row['Name'] ;?>
</option>
<?php 
} 
?>
<div>
</select>
<br>
<br>
<label style="color: black; ">Amount to be transferred:</label>
<input type="number" class="form-control" step="0.01" name="amount" required>   
<br><br>
<div class="text-center" >
<button class="btn btn-danger" name="submit" type="submit">Transfer</button>
</form>
</div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>
