<?php

include('connection/db.php');
$category=$_POST['category'];
$des=$_POST['des'];

$query=mysqli_query($conn,"insert into job_category(category,des) values('$category','$des')");
if($query){
	echo "data inserted successfully";
}else{
	echo "Some Error !! Try Again";
}

?>