<?php
print "<script> console.log('Included datafetch.php'); </script>";

$con = mysqli_connect("localhost","caleb","pass", "db1");

if (!$con) {
  echo "<script>console.log('unable to connect');</script>";
  die('Could not connect: '. $con->connect_error);
}

echo "<script>console.log('unable to connect');</script>";
echo "<script>console.log('connected');</script>";
echo "<script>console.log('unable to connect');</script>";
//mysqli_select_db("db1",$con);

$query = "SELECT * FROM pet";

$query_res = $con->query($query);
echo "<script>console.log('$query_res');</script>";
if ($query_res->num_rows > 0) {
  while($row = $query_res->fetch_assoc()) {
    echo $query_res->fetch_assoc;
    echo "name: ". $row['name']. " - Species: " . $row['species'];
  }
} else {
  echo "0 results";
}
//echo "<p>$query_res</p>";

$con->close();


?>
