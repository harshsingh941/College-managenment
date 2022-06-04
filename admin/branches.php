
<?php include('./includes/config.php') ?>
<?php include('./header.php') ?>
<?php include('./sidebar.php') ?>

<?php
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $division=implode(',',$_POST['division']);
        mysqli_query($db_conn,"INSERT INTO branches (title,division) VALUE ('$title','$division')") or die('No');
    }

?>

<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Manage Branches </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin </a></li>
              <li class="breadcrumb-item active">Branches </li>
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
                        <h3 class="card-title">Add New Divisions</h3>
                        
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" placeholder="Enter title" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="division">Division</label>
                                <?php 
                                $query=mysqli_query($db_conn,'select * from divisions');
                                $count=1;
                                while($divisions=mysqli_fetch_object($query)){ ?>
                                    <div>
                                        <label for="<?=$count?>">
                                            <input type="checkbox" id="<?=$count?>" value="<?=$divisions->id ?>" name="division[]" placeholder="Enter division"  >
                                            <?=$divisions->title ?>
                                        </label>
                                    </div>
                                <?php
                            $count++; } ?>
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
                    <h3 class="card-title">Branches</h3>
                    <div class="card-tools">
                        <a href="?action=add-new" class="btn btn-success"><i class="fa fa-plus mr-2"></i>Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive bg-white">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Name</th>
                            <th>Divisions</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $count=1;
                                $cla_query=mysqli_query($db_conn,'select * from branches');
                                while($branches=mysqli_fetch_object($cla_query)){?>
                                    <tr>
                                        <td><?=$count++?></td>
                                        <td><?=$branches->title?></td>
                                        <td>
                                            <?php
                                                $divisions=explode(',',$branches->division);
                                                foreach($divisions as $division){
                                                    $sec_query=mysqli_query($db_conn,'select * from divisions where id='.$division.'');
                                                    $sec=mysqli_fetch_object($sec_query);

                                                    echo $sec->title .'<br>';
                                                }  
                                            ?>
                                        </td>           
                                        <td></td>
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
