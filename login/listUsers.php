<?php include("openShiftConnection.php"); 

// function makeTable($db, $table, $columns){
//     $numFields = count($columns)-1;
//     $query = 'SELECT * FROM '.$table;
//     $result = $db->query($query);

//     while ($arrayResult = mysql_fetch_array($result)){
//         echo '<tr>';
//             for ($i = 0; $i <= $numFields; $i++){ //2nd for loop
//                 echo '<td>'.$arrayResult[$columns[$i]].'</td>';
//             }
//         echo '</tr>';
//     }
// }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Tyson Graham - CS 313</title>
  <link rel='stylesheet' href="styles.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>


<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

<?php $db = loadDatabase();
$sql = "SELECT first, last, email, password, address FROM users";
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_OBJ);
foreach ($results as $result) {
?>
<tr>
  <td><?php echo $result->address; ?></td>
  <td><?php echo $result->first; ?></td>
  <td><?php echo $result->last; ?></td>
  <td><?php echo $result->password; ?></td>
  <td><?php echo $result->email; ?></td>

<?php
}
?>
</tbody>
</table>


</div>