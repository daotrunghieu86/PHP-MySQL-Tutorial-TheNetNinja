<?php

  // Connect to database
  $connect = mysqli_connect('localhost', 'hieu', 'hieu86', 'pizza');

  // check connection
  if (!$connect) {
    echo 'Connection error' . mysqli_connect_error();
  }