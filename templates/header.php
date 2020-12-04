<?php 

  session_start();

  // the way overwrites 
  // $_SESSION['input'] = 'Dao Hieu';

  if ($_SERVER['QUERY_STRING'] ==  'noname') {
    // unset($_SESSION['input']);
    session_unset();
  }

  // Null - Coalescing
  $input = $_SESSION['name'] ?? 'Guest';

  // get cookie
  $gender = $_COOKIE['gender'] ?? "Unknown";

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP pizza</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type='text/css'>
      .brand {
          background: #cbb09c !important;
      }
      .brand-text {
          /* color: #cbb09c !important; */
      }
      form {
        max-width: 460px;
        margin: 20px auto;
        padding: 20px;
      }
      .pic_pizza {
        width: 150px;
        margin: 0px auto -50px;
        display: block;
        position: relative;
        top: -50px;
      }
      .welcome_title {
        margin-bottom: 50px;
      }
      .card_css {
        margin-bottom: 50px;
      }
    </style>
</head>
<body class="grey lighten-3">
  <nav class='light z-depth-0'>
    <div class="container">
      <a href="index.php" class='brand-logo brand-text'>Pizza</a>
      <ul id='nav-mobile' class="right hide-on-small-and-down">
        <li>Hello <?php echo htmlspecialchars($input); ?></li>
        <li>(<?php echo htmlspecialchars($gender); ?>)</li>
        <li><a href="addPizza.php" class='btn brand z-depth-0'>ADD A PIZZA</a></li>
      </ul>
    </div>
  </nav>