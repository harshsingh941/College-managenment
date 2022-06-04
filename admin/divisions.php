
<?php include('./includes/config.php') ?>
<?php include('./header.php') ?>
<?php include('./sidebar.php') ?>

<?php
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        mysqli_query($db_conn,"INSERT INTO divisions (title) VALUE ('$title')") or die('No');
    }

?>





<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Classes Accounts </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin </a></li>
              <li class="breadcrumb-item active">Division </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
        <!-- Info boxes -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Divisions</h3>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive bg-white">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Name</th>
                                                    
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $count=1;
                                                $query=mysqli_query($db_conn,'select * from divisions');
                                                while($divisions=mysqli_fetch_object($query)){?>
                                                  <tr>
                                                      <td><?=$count++?></td>
                                                      <td><?=$divisions->title?></td>
                                                      
                                                      <td></td>
                                                  </tr>  
                                                

                                                <?php } ?>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                    </div>      
                </div>        
                        
                        


                    
                <div class="col-lg-4">
                    

                    <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Add New Divisions</h3>
                                    
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" placeholder="Enter title" required class="form-control">
                                        </div>
                                        
                                        <button name="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>  
                </div>
            </div>

                    
        
          
        

        

       
        </div>
    </section>
    <!-- /.content -->
</div>

    <!-- /.content-header -->
<?php include('footer.php') ?>
