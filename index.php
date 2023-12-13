<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | onlinejob</title>
    <?php include('header_link.php'); ?>
  
</head>
<body>

<?php include('header.php');

 $userid = $_SESSION['userid'];
 
?>
<!-- <h1 id="journey"> Your Journey Begins! </h1> -->
<?php include('job.php'); ?>

<?php include('footer.php'); ?>


</body>
</html>

