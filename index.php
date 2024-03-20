<?php
  require_once('MODEL/database.php');

  //$query = 'SELECT V.year, V.model, V.price, T.type, C.class, M.make FROM vehicles as V JOIN types as T ON V.type_id = T.ID JOIN classes as C ON V.class_id = C.ID JOIN makes as M ON V.make_id = M.ID ORDER BY V.price DESC';

  $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?: '';

  $filter_type = filter_input(INPUT_POST, 'filter_type', FILTER_SANITIZE_STRING) ?: '';

  $query = 'SELECT V.year, V.model, V.price, T.type, C.class, M.make FROM vehicles as V JOIN types as T ON V.type_id = T.ID JOIN classes as C ON V.class_id = C.ID JOIN makes as M ON V.make_id = M.ID ';


  // add query order by
  $query .= ($action === 'sort_by_year') ? 'ORDER BY V.year DESC' : 'ORDER BY V.price DESC';

  $statement = $db->prepare($query);
  if ($statement->execute()){
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
  }
  else {
    include('query_error.php');
    exit();
  }


  
  include('VIEW/header.php');
  include('VIEW/home.php');
  include('VIEW/footer.php');
?>