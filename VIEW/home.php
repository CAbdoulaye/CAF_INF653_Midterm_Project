<main>
  <h2>Vechile Info</h2>  
  <section>
  </div>
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
      <p>Sort by:</p>
      <input type="radio" id="sort_by_year" name="action" value="sort_by_year">
      <label for="sort_by_year">Sort By Year</label><br>
      <input type="radio" id="sort_by_price" name="action" value="sort_by_price">
      <label for="sort_by_price">Sort By Price</label><br>
      <input type="submit" value="Submit">
    </form>

  </section>
  <br><br><br><br>
</main>