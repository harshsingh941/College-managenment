
<?php include('./includes/config.php') ?>
<?php include('./header.php') ?>
<?php include('./sidebar.php') ?>

<?php
    if(isset($_POST['submit'])){

        
        
        $name=$_POST['name'];
        $branch=$_POST['branch'];
        mysqli_query($db_conn,"INSERT INTO subjects(name,branch) VALUE('$name','$branch')") or die(mysqli_error($db_conn));

      

        
          
       
               
           
    }  

       
    

?>

<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Manage Subjects </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin </a></li>
              <li class="breadcrumb-item active">Subjects </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
        <!-- Info boxes -->
            <?php
                if(isset($_REQUEST['action'])){ ?>
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New Course</h3>
                        
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter Name" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="branch">Select Branch</label>
                                <select name="branch" id="branch">
                                    <option value="branch" id="branch" class="form-control">Select Branch</option>
                                    <option value="computer science">Computer Science</option>
                                    <option value="electronics">Electronics</option>
                                    <option value="electrical">Electrical</option>
                                    <option value="mechnaical">Mechanical</option>
                                    <option value="chemical">Chemical</option>
                                </select>
                                
                            </div>
                            
                            <button name="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>  
                <?php }
                
                else{

                
                ?>


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Subjects</h3>
                    <div class="card-tools">
                        <a href="?action=add-new" class="btn btn-success"><i class="fa fa-plus mr-2"></i>Add New Course</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive bg-white">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sr.No.</th>
                            
                            <th>Name</th>
                            <th>Branch</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $count=1;
                                $subject_query=mysqli_query($db_conn,'select * from subjects');
                                while($subjects=mysqli_fetch_object($subject_query)){?>
                                    <tr>
                                        <td><?=$count++?></td>
                                                 
                                        <td><?=$subjects->name?></td>
                                        <td><?=$subjects->branch?></td>
                                    </tr>  
                                                

                             <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        
          
        <?php } ?>

        

       
        </div>
    </section>
    <!-- /.content -->
</div>

    <!-- /.content-header -->
<?php include('footer.php') ?>
