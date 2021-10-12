
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Basic Banking System</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php include('nav.php') ?>

 <div class="container-fluid">
      <h1 id="header" align="center"><marquee>Welcome to THIS bank!!</marquee></h1>
    <div id="abc">
       <a href="all_users.php"><button class="button" id="red">View All Users</button></a>
        <a href="transfer_money.php"><button class="button" id="blue">Transfer Money</button></a>
       <a href="transactionhistory.php"><button class="button" id="green">View Transfer History</button></a>
    </div>
   </div>
</div>
  <?php include('footer.php') ?>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
