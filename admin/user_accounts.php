
<?php include('./includes/config.php') ?>
<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=md5(123456789);
  $type=$_POST['type'];


  mysqli_query($db_conn,"INSERT INTO user_accounts(`name`,`type`,`email`,`password`) VALUE('$name','$type','$email','$password')") or die(mysqli_error($db_conn));

  header('location: user_accounts.php?user='.$type);
}

?>

<?php include('./header.php') ?>
<?php include('./sidebar.php') ?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="d-flex">
              <h1 class="m-0"> Manage Accounts    </h1>
              <a href="user_accounts.php?user=<?php echo $_REQUEST['user']?>&action=add-new" class="btn btn-primary btn-sm py-2 ">  Add New</a>

            </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accounts</a></li>
              <li class="breadcrumb-item active"><?php echo ucfirst($_REQUEST['user'])  ?> </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <?php if(isset($_GET['action']) && $_GET['action']){?>
          <div class="card">
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Full Name" name="name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
                <input type="hidden" name="type" value="<?php echo $_REQUEST['user']?>">
                <button type="submit" class="btn btn-success" name="submit">Register</button>
               </form>
            </div>
          </div>  

          <?php } 
            else{ ?>
                  <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Sr.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $mysqli =new mysqli('localhost','root','','sms');
                        $count =1;
                        $user_query='select * from user_accounts WHERE `type` = "'.$_REQUEST['user'].'"';
                        $user_result=mysqli_query($db_conn,$user_query);
                        
                          while($users= $user_result -> fetch_object())
        
                          { 
                            
                            ?>
                          <tr>
                            <td><?=$count++?></td>
                            <td><?=$users->name?></td>
                            <td><?=$users->email?></td>
                            <td><?=$users->password?></td>
                            <td></td>
                          </tr>
                        
                        <?php } ?>
                        
                        
                        
                        
                      </tbody>
                    </table>
                  </div> 
                <?php } ?>        
            

        

        

       
      </div>
    </section>
    <!-- /.content -->
</div>

    <!-- /.content-header -->
<?php include('footer.php') ?>
