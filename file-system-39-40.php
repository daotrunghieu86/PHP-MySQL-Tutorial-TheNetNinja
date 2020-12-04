<?php 

  // File system part 1

  // $quotes = readfile('readme.txt');
  // echo $quotes;

  $file = 'readme.txt';

  if (file_exists($file)) {
  
    // read file
    echo readfile($file) . "<br>";

    // copy file
    copy($file, 'readme-copy.txt');

    // absolute path
    echo realpath($file) . "<br>";

    // file size
    echo filesize($file);

    // rename file
    rename($file, 'readme-to-readbi.txt');

  } else {
    echo 'File does not exist <br>';
  }

  // make directory
  // mkdir('create-folder');

  // File system part 2

  $file2 = 'readme-copy.txt';

  // opening a file for reading
  $handle = fopen($file2, 'r');
  // $handle = fopen($file2, 'r+');
  // $handle = fopen($file2, 'a+');

  // read the file 
  // echo fread($handle, filesize($file2));
  // echo fread($handle, 123);

  // read a single file
  // echo fgets($handle);
  // echo fgets($handle);

  // read a single character
  // echo fgetc($handle);
  // echo fgetc($handle);

  // writing to a file 
  // fwrite($handle, "\n Everything popular is wrong");

?>