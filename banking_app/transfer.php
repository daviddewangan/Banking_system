<?php include('include/header.php'); ?>
<?php include('include/db.php'); ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->
<!--if id is null then page redirects to home page------>

<?php
if(!$_GET['id']){
    header('location:index.php');
}else{

}
$fetch = mysqli_query($con,"select * from users where id = '$_GET[id]' ");
$row = mysqli_fetch_array($fetch);
?>
<?php
if(isset($_POST['transfer'])){
    $balance = $_POST['balance'];
    $updt = mysqli_query($con,"UPDATE users SET current_balance='$balance' WHERE id = '$_GET[id]' ");
    
} ?>

    <div class="row">
       
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="image/profile.jpg" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            <?php echo $row['name']; ?></h4>
                       
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $row['email']; ?>
                            <br />
                            <i class="glyphicon glyphicon-phone"></i><?php echo $row['mobile']; ?>
                            <br/>
                            Current Balance:- <?php echo $row['current_balance']; ?> Rs.
                                                    <!-- Split button -->
                        <div class="btn-group">
                            <form method="post">
                            <input type="tel" name="balance" placeholder="00,000 Rs.">
                            <button type="submit" name="transfer" class="btn btn-primary">Transfer</button></form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>