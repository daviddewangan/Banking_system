<?php include('include/db.php');?>
<?php include('include/header.php'); ?>
<?php
if(isset($_POST['save'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $balance = $_POST['balance'];

    $query = mysqli_query($con,"insert into users(name,email,mobile,current_balance) values('$username','$email','$mobile','$balance')");
    
}
?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
<form method="post" class="form-control">
<input type="text" name="username" placeholder="Enter UserName" class="form-group"></br>
<input type="email" name="email" placeholder="Enter Email" class="form-group"></br>
<input type="tel" name="mobile" placeholder="Enter Mobile Number" class="form-group"></br>
<input type="text" name="balance" placeholder="Enter Balance" class="form-group"></br>
<button type="submit" name="save" class="btn btn-primary">save</button>
</form>