<main>
  <h2>Vechile Info</h2>  
  <section class="form-container">
  <form class="vehicle-form" method="post" action="../MODEL/add_vehicle.php">
    <label for="vehicleMake">Make:</label>
    <select class="form-control" name="vehicleMakeID" id="vehicleMake">
      <?php foreach ($makes as $make) {?>
      <option value="<?=$make['ID']?>"><?=$make['make']?></option>
      <?php } ?>
    </select><br>

    <label for="vehicleType">Type:</label>
    <select class="form-control" name="vehicleTypeID" id="vehicleType">
      <?php foreach ($types as $type) {?>
      <option value="<?=$type['ID']?>"><?=$type['type']?></option>
      <?php } ?>
    </select><br>

    <label for="vehicleClass">Class:</label>
    <select class="form-control" name="vehicleClassID" id="vehicleClass">
      <?php foreach ($classes as $class) {?>
      <option value="<?=$class['ID']?>"><?=$class['class']?></option>
      <?php } ?>
    </select><br>

    <label for="vehicleYear">Year:</label>
    <input class="form-control" type="text" name="vehicleYear" id="vehicleYear" required><br>

    <label for="vehicleModel">Model:</label>
    <input class="form-control" type="text" name="vehicleModel" id="vehicleModel" required><br>

    <label for="vehiclePrice">Price:</label>
    <input class="form-control" type="text" name="vehiclePrice" id="vehiclePrice" required><br>

    <input id="addVehicleSubmit" class="btn btn-primary" type="submit" value="Add Vehicle">
  </form>
</section>

</main>