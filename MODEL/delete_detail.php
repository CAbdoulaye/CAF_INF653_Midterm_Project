<?php
  require('database.php');
  $elementID = filter_input(INPUT_POST, 'elementID', FILTER_VALIDATE_INT);
  $TableName = filter_input(INPUT_POST, 'TableName', FILTER_SANITIZE_STRING);
  if (isset($_POST['elementID']) && isset($_POST['TableName'])){
    //first delete from table vehicle.
    // this line will trim the last character from the tablename to get the the corresponding field in vehicles table
    if($TableName != "classes"){
      $fieldName = substr($TableName, 0, -1);
    }
    else 
      $fieldName = "class";
    $fieldName .= "_id";
    $query = 'DELETE FROM `vehicles` WHERE ' . $fieldName . ' = ' . $elementID;
    $statement = $db->prepare($query);
    if(!$statement->execute()){
      echo "Delete Unsuccessfully";
    }


    // now delete from actual table
    $query = 'DELETE FROM ' . $TableName . ' WHERE ID = ' . $elementID;
    $statement = $db->prepare($query);
    if($statement->execute()){
      header('Location: ../admin/');
    }
    else
      echo "Delete Unsuccessfully";
  }
?>