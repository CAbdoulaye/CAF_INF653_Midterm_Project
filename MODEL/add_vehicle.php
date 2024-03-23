<?php
  require('database.php');
  $vehicleMakeID = filter_input(INPUT_POST, 'vehicleMakeID', FILTER_VALIDATE_INT);
  $vehicleClassID = filter_input(INPUT_POST, 'vehicleClassID', FILTER_VALIDATE_INT);
  $vehicleTypeID = filter_input(INPUT_POST, 'vehicleTypeID', FILTER_VALIDATE_INT);
  $vehicleYear = filter_input(INPUT_POST, 'vehicleYear', FILTER_VALIDATE_INT);
  $vehiclePrice = filter_input(INPUT_POST, 'vehiclePrice', FILTER_VALIDATE_INT);
  $vehicleModel = filter_input(INPUT_POST, 'vehicleModel', FILTER_SANITIZE_STRING);

  if (isset($_POST['vehiclePrice'])){
    $query = 'INSERT INTO `vehicles`(`year`, `model`, `price`, `type_id`, `class_id`, `make_id`) VALUES ( :year, :model, :price, :type_id, :class_id, :make_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(":year", $vehicleYear);
    $statement->bindValue(":model", $vehicleModel);
    $statement->bindValue(":price", $vehiclePrice);
    $statement->bindValue(":type_id", $vehicleTypeID);
    $statement->bindValue(":class_id", $vehicleClassID);
    $statement->bindValue(":make_id", $vehicleMakeID);

    if($statement->execute()){
      header('Location: ../admin');
    }
    else
      echo "Add Unsuccessfully";
  }
?>

