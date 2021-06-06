<?php

include('connection/db.php');
$company_name=$_POST['company_name'];
$description=$_POST['description'];

$query=mysqli_query($conn,"insert into company(company,des) values('$company_name','$description')");
if($query){
	echo "data inserted successfully";
}else{
	echo "Some Error !! Try Again";
}

?>