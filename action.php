<?php
$con = mysqli_connect('localhost','root','','wordpress');


if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$date = date('Y-m-d', strtotime($_POST['date']));
	$col1 = $_POST['col1'];	

	$insert = mysqli_query($con,"insert into tb_donation(date,col_1,amount,name) values ('$date','$col1','$amount','$name')");

	if($insert){
		echo "<script>alert('Record Saved')</script>";
		echo "<script>window.history.back()</script>";
	}else{
		echo "<script>alert('Error in submission')</script>";
	}

}



?>