<?php 
session_start();
$page_title = "Log In Page";
$activated_btn = "Log In"
?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php');?>

<div class="py-5">
    <div class="container">
        <?php if(isset($_SESSION['message'])) : ?>
        <h5 class='alert alert-success'>
            <?= $_SESSION['message']; ?>
        </h5>
        <?php endif ?>
        <?php unset($_SESSION['message']) ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Log In Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <input type="email" name="email" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-primary" type="submit">
                                    Log In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php') ?>