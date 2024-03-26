<?php
  $dsn = 'mysql:host=m7wltxurw8d2n21q.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=zippyusedautos';
  $username = 'vhswr7e8chwrngqr';
  $password = 'mr32a5gtk35jwcn0';

  try {
    $db = new PDO($dsn, $username, $password);

  } catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
  }
?>