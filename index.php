<!DOCTYPE html>
<html lang="en">

<head>
<title>BussinBanz</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="basic.css">
</head>


<body>
<h1>Bussin'Banz</h1> 

<!-- action="action_page.php" -->
<form  method="post">
  <!-- <div class="imgcontainer">
    <img src="img/avatar2.png" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>


  <?php
	echo "You entered " . $_POST["uname"] . " and " . $_POST["psw"]
  ?>
  \
  <!-- Corresponding SQL table is BBUsers -->
</form>

</body>


</html>