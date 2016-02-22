<?php
try
{
   $user = 'tyson';
   $password = 'Changomas1'; 
   $db = new PDO('mysql:host=localhost;dbname=mydb', $user, $password);
}
catch (PDOException $ex) 
{
   echo 'Error!: ' . $ex->getMessage();
   die(); 
}
foreach ($db->query('SELECT first, last FROM users') as $row)
{
   echo 'user: ' . $row['username'];
   echo ' password: ' . $row['password']; 
   echo '<br />';
}
?>