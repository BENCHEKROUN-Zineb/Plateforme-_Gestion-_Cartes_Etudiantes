
<?php
$mysqli = new mysqli("localhost","root","","images");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$query = "SELECT * from student";

$result = $mysqli->query($query);

$studentslist="";


/* fetch object array */
while ($row = $result->fetch_row()) {
	
	$jsappel="go('".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."','".$row[6]."','".$row[7]."','".$row[8]."')";
	$studentslist=$studentslist.'<tr>
			
			<td>'.$row[0].'</td>
			<td>'.$row[1].'</td>
			<td>'.$row[2].'</td>
			<td>'.$row[3].'</td>
			<td>'.$row[4].'</td>
			<td>'.$row[5].'</td>
			<td>'.$row[6].'</td>
			<td>'.$row[7].'</td>
			<td>'.$row[8].'</td>
			<td>
			  <center><button id="card" type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewcard" onclick="'.$jsappel.'"><i class="fa-solid fa-address-card"></i></button></center>
			</td>
			
		</tr>';
}

echo $studentslist;
?>
