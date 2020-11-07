<?php include('include/db.php'); ?>
<?php include('include/header.php'); ?>
<h1>Customers</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Current Balance</th>
      <th scope="col">Action</th>
      <!--hello ji-->
    </tr>
  </thead>
  <!--table head section-->
  <tbody>
  <?php $fetch = mysqli_query($con,"select * from users");
    while($row = mysqli_fetch_array($fetch)){ ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['mobile'];?></td>
      <td><?php echo $row['current_balance']; ?> Rs.</td>
      <td><a class="btn btn-success" href="transfer.php?id=<?php echo $row['id']; ?>">View Profile</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>