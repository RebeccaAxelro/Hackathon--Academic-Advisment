<!DOCTYPE html>
<html>
<header>
  <title>Academic Advisement</title>
  <link rel="stylesheet" href="style.css">

</header>
<body>

<h1>Select the classes you havn't taken yet for your major:</h1>

<form method="post" action="major_classes_needed.php">
  
<h5>
<?php
$major = $_POST['Major'];
echo $_POST['course'];

if ($major == "Computer Science") {
  $myfile = fopen("COMP.txt", "r") or die("Unable to open file!");
}
elseif ($major == "Physics") {
    $myfile = fopen("PHYS.txt", "r") or die("Unable to open file!");
}
while(!feof($myfile)) {
    $cur = fgets($myfile);
?>
    <input type="checkbox" name="checked_vals[]" value="<?= $cur ?>"><?= $cur ?><br>
<?php

}
fclose($myfile);

?> 
</h5>

  <input type="submit" value="Submit">
</form>

</body>
</html>