<?php 

  // superglobals

  // $_GET['name'], $_POST['name']
  
  // echo $_SERVER['SERVER_NAME'] . "<br>";
  // echo $_SERVER['REQUEST_METHOD'] . "<br>";
  // echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
  // echo $_SERVER['PHP_SELF'] . "<br>";

  // Sessions
  // if (isset($_POST['input'])) {

  //   session_start();

  //   $_SESSION['input'] = $_POST['input'];

  //   header('Location: index.php');

  // }

  // Cookies 
  if (isset($_POST['submit'])) {

    // cookies for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['name'];

    header("Location: index.php");

  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <!-- <form action="<?php //echo $_SERVER['PHP_SELF'] ?>" method='POST'>  -->
    <!-- <input type="text" name='input'>
    <input type="submit" name='submit' value='submit'>
  </form> -->

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
    <input type="text" name='name'>
    <select name="gender" id="">
      <option value="male">male</option>
      <option value="female">female</option>
    </select>
    <input type="submit" name='submit' value='submit'>
  </form>

</body>
</html>