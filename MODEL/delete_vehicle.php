<?php
  require('database.php');
  $vehicleID = filter_input(INPUT_POST, 'vehicleID', FILTER_VALIDATE_INT);
  if (isset($_POST['vehicleID'])){
    $query = 'DELETE FROM `vehicles` WHERE ID = :vehicleID';
    $statement = $db->prepare($query);
    $statement->bindValue(":vehicleID", $vehicleID);

    if($statement->execute()){
      header('Location: ../admin/');
    }
    else
      echo "Delete Unsuccessfully";
  }
?>