<main>
  <h2>Vechile Info</h2>  
  <section>
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Filter By
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li class="dropdown-submenu">
          <a class="test" tabindex="-1" href="#">Make<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php foreach ($makes as $make) {?>
              <form class="noStyleForm" method="post" action=".">
                <div class="addBackground">
                  <input class="noStyle" type="hidden" name="filter_name" value="M.make">
                  <input class="noStyle" type="hidden" name="filter_type" value=<?=$make['make']?>>
                  <input class="noStyle" type="submit" value=<?=$make['make']?>>
                </div>
              </form>
            <?php } ?>
          </ul>
        </li>
        <li class="dropdown-submenu">
          <a class="test" tabindex="-2" href="#">Class<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php foreach ($classes as $class) {?>
              <form class="noStyleForm" method="post" action=".">
                <div class="addBackground">
                  <input class="noStyle" type="hidden" name="filter_name" value="C.class">
                  <input class="noStyle" type="hidden" name="filter_type" value=<?=$class['class']?>>
                  <input class="noStyle" type="submit" value=<?=$class['class']?>>
                </div>
            </form>
            <?php } ?>
          </ul>
        </li>
        <li class="dropdown-submenu">
          <a class="test" tabindex="-3" href="#">Type<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php foreach ($types as $type) {?>
              <form class="noStyleForm" method="post" action=".">
                <div class="addBackground">
                  <input class="noStyle" type="hidden" name="filter_name" value="T.type">
                  <input class="noStyle" type="hidden" name="filter_type" value=<?=$type['type']?>>
                  <input class="noStyle" type="submit" value=<?=$type['type']?>>
                </div>
            </form>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </div>
    <script>
      $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
          $(this).next('ul').toggle();
          e.stopPropagation();
          e.preventDefault();
        });
      });
    </script>


    <table>
      <tr>
        <th>Year</th>
        <th>Make</th> 
        <th>Model</th>
        <th>Type</th>
        <th>Class</th> 
        <th>Price</th>
        <th></th>
      </tr>
      <?php foreach ($vehicles as $vehicle) {?>
      <tr>
        <td><?=$vehicle['year']?></td>
        <td><?=$vehicle['make']?></td> 
        <td><?=$vehicle['model']?></td>
        <td><?=$vehicle['type']?></td>
        <td><?=$vehicle['class']?></td> 
        <td><?=$vehicle['price']?></td>
        <td>
          <form method="post" action="../MODEL/delete_vehicle.php">
            <input type="hidden" name="vehicleID" value=<?=$vehicle['ID']?>>
            <input type="submit" value="Delete">
          </form>
        </td>
      </tr>
      <?php } ?>
    </table>
    <form method="post" action=".">
      <input type="hidden" name="addItem" id="addItem" value="addVehicleSubmitButton">
      <input class="btn btn-primary" type="submit" value="Add Vehicle">
    </form>    
    <br>

    <form method="post" action=".">
      <label>Sort By: </label>      
      <input type="radio" id="sort_by_year" name="action" value="sort_by_year">
      <label for="sort_by_year">Year</label>
      <input type="radio" id="sort_by_price" name="action" value="sort_by_price">
      <label for="sort_by_price">Price</label>
      <input type="submit" value="Submit">
    </form>

    <form method="post" action=".">
      <input type="hidden" name="view/edit" id="view-edit" value="add-delete_details">
      <input class="btn btn-primary" type="submit" value="View/Edit Vehicle Details">
    </form>   

  </section>
  <br><br><br><br>
</main>