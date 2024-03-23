<?php
  require('database.php');
  $fieldValue = filter_input(INPUT_POST, 'fieldValue', FILTER_SANITIZE_STRING);
  $TableName = filter_input(INPUT_POST, 'TableName', FILTER_SANITIZE_STRING);
  if (isset($_POST['fieldValue']) && isset($_POST['TableName'])){
    if($TableName != "classes"){
      $fieldName = substr($TableName, 0, -1);
    }
    else 
      $fieldName = "class";
    $query = 'INSERT INTO ' . $TableName . ' (' . $fieldName .') VALUES ("'. $fieldValue .'")';
    $statement = $db->prepare($query);
    if($statement->execute()){
      header('Location: ../admin/');
    }
    else
      echo "Delete Unsuccessfully";
  }
?>