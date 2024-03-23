<main>
  <h2>Vechile Info</h2>
  <a href="index.php">back</a>
  <section>
    <table>
      <tr>
        <th>Year</th>
        <th>Make</th> 
        <th>Model</th>
        <th>Type</th>
        <th>Class</th> 
        <th>Price</th>
      </tr>
      <?php foreach ($vehicles as $vehicle) {?>
      <tr>
        <td><?=$vehicle['year']?></td>
        <td><?=$vehicle['make']?></td> 
        <td><?=$vehicle['model']?></td>
        <td><?=$vehicle['type']?></td>
        <td><?=$vehicle['class']?></td> 
        <td><?=$vehicle['price']?></td>
      </tr>
      <?php } ?>
    </table>

      <form method="post" action=".">
        <label>Sort By: </label>      
        <input type="radio" id="sort_by_year" name="action" value="sort_by_year">
        <label for="sort_by_year">Year</label>
        <input type="radio" id="sort_by_price" name="action" value="sort_by_price">
        <label for="sort_by_price">Price</label>
        <input type="submit" value="Submit">
      </form>
  </section>
  <a href="../index.php">back</a>
  <br><br><br><br>
</main>