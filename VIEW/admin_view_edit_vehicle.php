<main>
  <h2>View/Edit Page</h2>  
  <section>
  <main>
  <h2>Vechile Info</h2>  
  <section>
    <table>
      <tr>
        <th>Makes</th>
        <th></th>
      </tr>
      <?php foreach ($makes as $make) {?>
      <tr>
        <td><?=$make['make']?></td>
        <td>
          <form method="post" action="../MODEL/delete_detail.php">
            <input type="hidden" name="TableName" value="makes">
            <input type="hidden" name="elementID" value=<?=$make['ID']?>>
            <input type="submit" value="Delete">
          </form>
        </td>
      </tr>
      <?php } ?>
    </table>
    <form method="post" action="../MODEL/add_detail.php">
      <input type="hidden" name="TableName" value="makes">
      <input type="text" name="fieldValue" id="fieldValue" required>
      <input class="btn btn-primary" type="submit" value="ADD">
    </form> <br>
    <table>
      <tr>
        <th>Types</th>
        <th></th>
      </tr>
      <?php foreach ($types as $type) {?>
      <tr>
        <td><?=$type['type']?></td>
        <td>
          <form method="post" action="../MODEL/delete_detail.php">
            <input type="hidden" name="TableName" value="types">
            <input type="hidden" name="elementID" value=<?=$type['ID']?>>
            <input type="submit" value="Delete">
          </form>
        </td>
      </tr>
      <?php } ?>
    </table>
    <form method="post" action="../MODEL/add_detail.php">
      <input type="hidden" name="TableName" value="types">
      <input type="text" name="fieldValue" id="fieldValue" required>
      <input class="btn btn-primary" type="submit" value="ADD">
    </form> <br>
    <table>
      <tr>
        <th>Classes</th>
        <th></th>
      </tr>
      <?php foreach ($classes as $class) {?>
      <tr>
        <td><?=$class['class']?></td>
        <td>
          <form method="post" action="../MODEL/delete_detail.php">
            <input type="hidden" name="TableName" value="classes">
            <input type="hidden" name="elementID" value=<?=$class['ID']?>>
            <input type="submit" value="Delete">
          </form>
        </td>
      </tr>
      <?php } ?>
    </table>
    <form method="post" action="../MODEL/add_detail.php">
      <input type="hidden" name="TableName" value="classes">
      <input type="text" name="fieldValue" id="fieldValue" required>
      <input class="btn btn-primary" type="submit" value="ADD">
    </form> <br>
    </section>
  <br><br><br><br>
</main>
  </section>
</main>