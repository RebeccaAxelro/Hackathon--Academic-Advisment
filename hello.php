<!DOCTYPE html>
<html>

<header>
  <title>Academic Advisement</title>
  <link rel="stylesheet" href="style.css">

</header>

<body>

  <h1>Manage your classes here!</h1>

  <form method="post" action="major_class_selection.php">

  <h2>What's your major?</h2>
  <center><select name="Major">
      <option value="Computer Science">Computer Science</option>
      <option value="Physics">Physics</option>
    </select></center>

  <h3><a href="https://selfserveprod.yu.edu/pls/banprd/bwckschd.p_disp_dyn_sched">List of Courses</a></h3>

   
  <h4>Core classes you have taken:</h4>
  <center><p> <input type="text" name="course"></p>
  <p> <input type="submit"></p></center>


<?php
  /*echo $_GET['my_html_input_tag'];
  echo "<br><br>";
  print_r($_POST); */
?>
</form>


<img src="YU.png" alt="yu" height="400px" width="300px">
</body>
</html>
