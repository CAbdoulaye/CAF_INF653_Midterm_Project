<?php
  require_once('../MODEL/database.php');

  //$query = 'SELECT V.year, V.model, V.price, T.type, C.class, M.make FROM vehicles as V JOIN types as T ON V.type_id = T.ID JOIN classes as C ON V.class_id = C.ID JOIN makes as M ON V.make_id = M.ID ORDER BY V.price DESC';

  $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?: '';

  $filter_type = filter_input(INPUT_POST, 'filter_type', FILTER_SANITIZE_STRING) ?: '';
  $filter_name = filter_input(INPUT_POST, 'filter_name', FILTER_SANITIZE_STRING) ?: '';


  // return all vehicle and info about type class and make
  $query = 'SELECT V.ID, V.year, V.model, V.price, T.type, C.class, M.make FROM vehicles as V JOIN types as T ON V.type_id = T.ID JOIN classes as C ON V.class_id = C.ID JOIN makes as M ON V.make_id = M.ID ';


  // If filter is set add 'where filter_type = x' to query
  if (isset($_POST['filter_type'])){
    $query .= 'WHERE ' . $filter_name . ' = "' . $filter_type . '"';
  }


  // add query order by
  $query .= ($action === 'sort_by_year') ? ' ORDER BY V.year DESC' : 'ORDER BY V.price DESC';

  $statement = $db->prepare($query);
  if ($statement->execute()){
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
  }
  else {
    include('query_error.php');
    exit();
  }

  // get distinct classes for filter purposes
  $query = 'SELECT * FROM `classes`';
  $statement = $db->prepare($query);
  if ($statement->execute()){
    $classes = $statement->fetchAll();
    $statement->closeCursor();
  }
  else {
    include('query_error.php');
    exit();
  }

  // get distinct types for filter purposes
  $query = 'SELECT * FROM `types`';
  $statement = $db->prepare($query);
  if ($statement->execute()){
    $types = $statement->fetchAll();
    $statement->closeCursor();
  }
  else {
    include('query_error.php');
    exit();
  }
  // get distinct makes for filter purposes
  $query = 'SELECT * FROM `makes`';
  $statement = $db->prepare($query);
  if ($statement->execute()){
    $makes = $statement->fetchAll();
    $statement->closeCursor();
  }
  else {
    include('query_error.php');
    exit();
  }


  
  include('../VIEW/admin_header.php');
  if(isset($_POST['addItem'])){
    include('../VIEW/admin_add_vehicle.php');
  }else if (isset($_POST['filter_type'])){
    include('../VIEW/filter.php');
  }else if(isset($_POST['view/edit'])){
    include('../VIEW/admin_view_edit_vehicle.php');
  }else{
    include('../VIEW/admin_home.php');
  }
  include('../VIEW/footer.php');
?>