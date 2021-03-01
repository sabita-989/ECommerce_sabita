<!DOCTYPE html>
<html lang="en">

<?php 

require_once('includes/head.php');

  $query = "SELECT * from products";

  $result = $db->query($query);


  $products = [];
  while ($row = $result->fetch_assoc()) {
    $products[] = $row;
  }
  //dd($products);


?> 


<body id="page-top">
  <?php require_once('includes/nav.php'); ?> 
 
  <!-- Begin Page Content -->
  <br>
  <br>
  <br>
  <br>


        <div class="container-fluid">
          <h1 class="h3 mb-4 text-gray-800">Product List</h1>

          <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $key => $value) { ?>
          <tr>
            <th scope="row"><?php echo $key + 1 ?></th>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['price'] ?></td>
            <td><?php echo $value['quantity'] ?></td>
            <td><?php echo $value['description'] ?></td>
            <td><img src="admin/uploads/images/<?php echo $value['image'] ?>" style="max-height: 200px; max-width: 500px"></td>
              <td><a href="buy-form.php?buy=<?php print $value['id']; ?>" class="btn btn-danger">Buy</a></td>
          </tr>
  
        <?php } ?>
        </tbody>
      </table>
        </div>
        <!-- /.container-fluid -->
  <?php include('includes/footer.php'); ?>
  <?php require_once('includes/script.php'); ?>

</body>

</html>
