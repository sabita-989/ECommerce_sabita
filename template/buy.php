<?php

	include('db_connect.php');
  $name = "";
  $price="";
  $mode = "";
  $address = "";
  $contact = "";
  $id ="26";



  // if (isset($_POST['name']) && !empty($_POST['name'])) 
  // {

    $name = mysqli_real_escape_string($db, $_POST['product_name']);
    

    $price = mysqli_real_escape_string($db, $_POST['product_price']);

    $mode = mysqli_real_escape_string($db, $_POST['p_mode']);

    $address = mysqli_real_escape_string($db, $_POST['address']);

    $contact = mysqli_real_escape_string($db, $_POST['contact']);

    //}
	$query = "INSERT into payments(product_id, product_name, product_price, p_mode, address, contact) VALUES ('$id', '$name', '$price', '$mode','$address','$contact')";
	dd($name);
	echo $query="INSERT into payments (product_id, product_name, product_price, p_mode, address, contact) VALUES ('$id', '$name', '$price', '$mode','$address','$contact')";
	 $result= $db->query($query);
	 // if($result)
	 // {
	 
  
  dd($price);
?>