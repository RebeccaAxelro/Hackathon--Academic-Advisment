<!DOCTYPE html>
<html>
<header>
  <title>Academic Advisement</title>
  <link rel="stylesheet" href="style.css">

</header>
<body>

<h1>Classes you still need to take:</h1>

<h6> 
<?php
// echo $_POST['checked_vals'];
// if(isset($_POST['submit'])){
// if(!empty($_POST['checked_vals'])){
foreach($_POST['checked_vals'] as $selected){
echo $selected . "</br>";
// }
// }
}
?>
<?php
?>
</h6>

</body>
</html>