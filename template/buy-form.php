<!DOCTYPE html>
<html lang="en">

<?php 

require_once('includes/head.php');
require_once('db_connect.php');
if(isset($_GET['buy'])){
  $bid=$_GET['buy'];
}
$query=mysqli_query($db,"select * from products where id='$bid'");
while($row=mysqli_fetch_array($query)){
$id=$row['id'];
$name=$row['name'];
$price=$row['price'];
}
//  foreach ($products as $value=> $product) 
  //{
    //$id= $product['id'];
    //$name=$product['name'];
    //$price=$product['price'];
  //}



  //function fetch($table,$id,$db)
  //{
  //$table = mysqli_real_escape_string($db,$table);
  //$id    = (int) $id;
  //$sql = "SELECT * FROM `{$table}` WHERE `id` = {$id}";
  //$query = $db->query($sql);
  //$select_product = $query->fetch_assoc();
  //return $select_product;
  //}

  //if ( ! isset($_GET['id']) )
  //{
    //header('location: index.php');
    //die();
  //}
  //$select_product = fetch('products',$_GET['id'],$db);



 //$name = "";
  //$price="";
  //$mode = "";
  //$address = "";
  //$contact = "";
  //$id = "";



  //if (isset($_POST['name']) && !empty($_POST['name'])) 
  //{

    //$name = mysqli_real_escape_string($db, $_POST['product_name']);

    //$price = mysqli_real_escape_string($db, $_POST['product_price']);

    //$mode = mysqli_real_escape_string($db, $_POST['p_mode']);

    //$address = mysqli_real_escape_string($db, $_POST['address']);

    //$contact = mysqli_real_escape_string($db, $_POST['contact']);

    
 // $query = "INSERT into payments (product_id, product_name, product_price, p_mode, address, contact) VALUES ('$id', '$name', '$price', '$mode','$address','$contact')";
  
   //$result= $db->query($query);
   ////dd($result);
   //echo $query="INSERT into payments (product_id, product_name, product_price, p_mode, address, contact) VALUES ('$id', '$name', '$price', '$mode','$address','$contact')";
  //}
  //dd($name);



?> 


<body id="page-top">
  <?php require_once('includes/nav.php'); ?> 
  <br>
  <br>
  <br>
  <br>
  <br>

 
  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Payment Form</h1>

          <form method="POST" action="" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label"> Product ID</label>
            <div class="col-sm-10">
              <input type="id" class="form-control" id="id" name="id" required="ss" value="<?php echo $id; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label"> Product Name</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="name" name="name" required="ss" value="<?php echo $name; ?>">
            </div>
          </div>


          <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
              <input class="form-control" id="price" name="price" value="<?php echo $price; ?>"></input>
            </div>
          </div>

          <div class="form-group row">
            <label for="mode" class="col-sm-2 col-form-label">Payment Mode</label>
            <div class="col-sm-10">
              <input class="form-control" id="mode" name="mode" ></input>
            </div>
          </div>

          <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label"> Address</label>
            <div class="col-sm-10">
              <input type="address" class="form-control" id="address" name="address" required="ss">
            </div>
          </div>

           <div class="form-group row">
            <label for="contact" class="col-sm-2 col-form-label"> Contact</label>
            <div class="col-sm-10">
              <input type="contact" class="form-control" id="contact" name="contact" required="ss">
            </div>
          </div>


          <div class="form-group row">
            <div class="col-sm-10">
              <input type="submit" class="btn btn-primary" name="submit" value="submit">
            </div>
          </div>
          
        </form>

        <?php
        if(isset($_POST['submit'])){
          $id=$_POST['id'];
          $pname=$_POST['name'];
          $price=$_POST['price'];
          $payment_mode=$_POST['mode'];
          $address=$_POST['address'];
          $contact=$_POST['contact'];
          require_once('db_connect.php');
          $query1=mysqli_query($db,"insert into payments (product_name,product_price,p_mode,address,contact,product_id)
            values ('$pname','$price','$payment_mode','$address','$contact','$id')
            ");
          if($query1){
            echo "<script>alert('Purchased Successfully!!')</script>";
            header('location:index.php');
          }
          else{
            echo "failed";
          }
        }

        ?>
  <?php include('includes/footer.php'); ?>
  <?php require_once('includes/script.php'); ?>

</body>

</html>
