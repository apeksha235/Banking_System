<?php
include 'includes/common.php';
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
<div class="content">
    <div class="bg">
 <div class="container-fluid">
      <h1 id="header" class="cssmarquee" align="center">Welcome to THIS bank!!</h1>
    <div id="abc">
       <a href="transaction.php"><button class="button" id="red">View All Users</button></a>
        <a href="transaction.php"><button class="button" id="blue">Transfer Money</button></a>
       <a href="transaction_history.php"><button class="button" id="green">View Transfer History</button></a>
    </div>
   </div>
  </div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>
