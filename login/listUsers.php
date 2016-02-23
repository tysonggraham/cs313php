<?php include("openShiftConnection.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Tyson Graham - CS 313</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>


<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

<?php $db = loadDatabase();
$sql = "SELECT id, first, last, email, password, address, vote_cnt FROM users ORDER BY vote_cnt DESC";
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_OBJ);
foreach ($results as $result) {
?>
<tr>
  <td><?php echo $result->first; ?></td>
  <td><?php echo $result->last; ?></td>
  <td><?php echo $result->address; ?></td>
  <td><?php echo $result->password; ?></td>
  <td><?php echo $result->email; ?></td>
  <td><?php echo $result->vote_cnt; ?></td>
  <td><span data-id =<?php echo $result->id ?>; class="gonna_work glyphicon glyphicon-plus"></span></td>
  <td><span class="glyphicon glyphicon-minus"></span></td>
<?php
}
?>
</tbody>
</table>
<script>

<?php $db = loadDatabase();
$sql = "SELECT id, first, last, email, password, address, vote_cnt FROM users ORDER BY vote_cnt DESC";
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_OBJ);
?>
  $('.gonna_work').on('click', function(){
    console.log('this')
    console.log($(this))
    var gonnawork = $(this).data("id");
    console.log('gonnawork');
    console.log(gonnawork);
  });
</script>
</div>