<?php include('./admin/includes/config.php') ?>
<?php include('header.php') ?>


     
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-info navbar-light ">
  <!-- Container wrapper -->
  <div class="container-fluid">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><b>CMS</b></a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <!-- Link -->
        <li class="nav-item">
          <a class="nav-link" href="#">HOME</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <?php if (isset($_SESSION['login'])) { ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="#">Action</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another action</a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </li>
            <?php } else { ?>
          </ul>
          
        </li>
        <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>Login</a>
        <?php } ?>
      </ul>

    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->  

<div class="shadow">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 my-auto">
        <h1 class="display-3 font-weight-bold">College Management System</h1>
        <p>This Institute was established in 1961 as one of the RECs for imparting technical education in Civil, Mechanical and Electrical Engineering. In the year 1983-84 the Under Graduate programmes in Electronics Engineering was introduced and in the year 1988-89 the UG programmes in Computer Engineering and Production Engineering was started. In the year 1995-96, UG programme in Chemical Engineering was introduced.</p><br>
        <p>Sardar vallabhbhai national institute of technology, surat, perceives to be a globally accepted centre of excellence in technical education catalyzing absorption, innovation, diffusion and transfer of high technologies resulting in enhanced quality for all the stakeholders.</p>
        <a href="" class="btn btn-lg btn-primary">Call to Action</a>
      </div>
      <div class="col-lg-6 my-auto">
        <div class="col-lg-7 mx-auto card shadow-lg">
          <div class="card-body">
            <h3>Admission Form</h3>
            <form action="" method="post" class="">
              <div class="md-form">
                <label for="form1">Your Name</label>
                <input type="text" id="form1" class="form-control">
              </div>
              <div class="md-form">
                <label for="email">Your Email</label>
                <input type="text" id="email" class="form-control">
              </div>
              <div class="md-form">
                <label for="mobile">Your Mobile</label>
                <input type="text" id="mobile" class="form-control">
              </div>

              <button class="btn btn-primary btn-block">Submit Form</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- about Section-->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="text-center">About Us</h2>
        <p>This Institute was established in 1961 as one of the RECs for imparting technical education in Civil, Mechanical and Electrical Engineering. In the year 1983-84 the Under Graduate programmes in Electronics Engineering was introduced and in the year 1988-89 the UG programmes in Computer Engineering and Production Engineering was started. In the year 1995-96, UG programme in Chemical Engineering was introduced. In exercise of the powers conferred by section 3 of the University Grants Commission (UGC) Act, 1956, the Central Government on the advice of the University Grants Commission, has declared the Sardar Vallabhbhai Regional College of Engineering & Technology (SVREC), Surat to Sardar Vallabhbhai National Institute of Technology (SVNIT), Surat with status of “Deemed University” with effect from 4th December 2002. The Institute has been granted the status of ‘Institute of National Importance’ w.e.f. Aug. 15, 2007. At present, the Institute is offering Six UG Programmes, Nineteen PG Programmes and Three M.Sc. Five Years Integrated Programme including doctoral programme in all above branches.</p>
        <a href="about-us.php" class="btn btn-secondary">Know more</a>
      </div>
      <div class="col-lg-6">
        <img src="./assets/images/about.jpg" alt="about" class="img-fluid" id="about">
        <style>
          #about{
            height: 400px;}
        </style>
      </div>
      
    </div>
  </div>
</section>


<section class="py-5">
  <div>
    <h2 class="text-center mb-5">Our Courses</h2>
    <div class="container">
      <div class="row">
        <?php
        $query=mysqli_query($db_conn,"select * from subjects ORDER BY id DESC");
        while($subject=mysqli_fetch_object($query)){?>
          <div class="col-lg-3 mb-4">
            <div class="card">
              <div>
                <img src="./assets/images/svnit.jpg" alt="" class="img-fluid rounded-top">
              </div>
              <div class="card-body">
                <b><?php echo $subject->name?></b>
                <p class="card-text">
                  <b>Branch:</b>-<?php echo $subject->branch?>
                </p>
              </div>
            </div>
          </div>

        <?php }?>
      </div>
    </div>
    
      
    

    
  </div>

  
</section>

<section class="py-5 bg-light">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Facilities</h2>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="mb-5 px-5">
    <h2 class="font-weight-bold text-center">Achievements</h2>
    <p>Prof. R. Venkata Rao, Prof. Z. V. P. Murthy, and Dr. K. Suresh Kumar are featured in the "career-long citation impact" list of top scientists published on October 19, 2021, by researchers from Stanford University of USA and Elsevier of The Netherlands. The selection is based on the top 100,000 by c-score (with and without self-citations) or a percentile rank of 2% or above. These three faculty members are also listed in the "citation impact during the year 2020" along with Dr. Suban K Sahoo, Dr. Sabha Raj Arya, and Dr. Manish K Rathod.</p>
    <p>Congratulation to Timbadiya Prafulkumar Vasharambhai, Patel Prem Lal and Patel Shaileshkumar Bhikhabhai for Desing patent on 'Sediment Trap'</br>
    Congratulation to Dr. K. D. Yadav for a design patent on Leaves Cutting Machine</br>
    Congratulations to Dr. Pawan Sharma for a Patent Granted titled 'A PROCESS OF PREPARATION OF ORDERED CELL METAL FOAM'</br>
    Congratulations to Dr. Alka Mungray and her Ph. D Student Dr. Pankaj for a patent titled 'PPEA/MAA active layer containing forward osmosis membrane and a method of preparing thereof'.</p>
  </div>


</section>

<section class="py-2 bg-dark text-light">
  <div class="container-fluid">
    Copyright 2022 -2022 All Rights Reserved || College Management System
  </div>
</section>




<!-- MDB -->
<?php include('footer.php') ?>