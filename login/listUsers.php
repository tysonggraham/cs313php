<?php include("openShiftConnection.php"); ?>

<!DOCTYPE html>
<html class="pattern1">
<head>
  <title>Tyson Graham - CS 313</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  .pattern1 {
  background: white no-repeat; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(#1E90FF, #00BFFF, white) no-repeat; /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(#1E90FF, #00BFFF, white) no-repeat; /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(#1E90FF, #00BFFF, white) no-repeat; /* For Firefox 3.6 to 15 */
  background: linear-gradient(#1E90FF, #00BFFF, white) no-repeat; /* Standard syntax (must be last) */
  height: 100%;
  width: 100%;
}
  </style>
</head>
<body class="pattern1">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#"><?php echo Welcome . " " . $_SESSION['email'];?></a>
      </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="http://php-tysonggraham.rhcloud.com/">Home</a></li>
        <li class="active"><a href="http://php-tysonggraham.rhcloud.com/assignments.html">Assignments</a></li>
        <li><a href="https://www.spiritanimal.info/spirit-animal-quiz/">Guess My Spirit Animal</a></li>
        <li><a href='./listUsers.php'>View All Users</a></li>
        <li><a href='./compatibility_survey/survey.php'>Compatibility Survey</a></li>
        <li><a href='./editProfile.php'>Edit Profile</a></li>
        <li><a href='/logout.php'>Log Out</a></li>
    </ul>
  </div>
</nav>

<div>
  <h2>Potential Companions Page</h2>
  <p>These are all of the lovely companions you can interact with. Happy hunting! You can view their bio, vote them up, vote them down, and even contact them using their emails below:</p>            
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
$sql = "SELECT id, first, last, email, password, address, vote_cnt, bio FROM users ORDER BY vote_cnt DESC";
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_OBJ);
foreach ($results as $result) {
?>
<tr>
  <td><button class="btn btn-primary accordion-toggle" data-toggle="collapse" data-target=".collapseRow">View Bio</button>
  <td><?php echo $result->first; ?></td>
  <td><?php echo $result->last; ?></td>
  <td><?php echo $result->address; ?></td>
  <td><?php echo $result->password; ?></td>
  <td><?php echo $result->email; ?></td>
  <td><?php echo $result->vote_cnt; ?></td>
  <td><span data-id =<?php echo $result->id ?>; class="gonna_work glyphicon glyphicon-plus"></span></td>
  <td><span class="glyphicon glyphicon-minus"></span></td>
</tr>
<tr>
  <td></td>
  <td colspan="5">
    <div class="bio collapseRow collapse">
      <?php echo $result->bio; ?> <br/>
    </div>
  </td>
</tr>
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
    var gonnawork = $(this).data("id");
  });
</script>
</div>
</body>