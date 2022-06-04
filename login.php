<?php include('header.php') ?>
 <section class="bg-light vh-100 d-flex">
     <div class="col-3 m-auto">
         <div class="card">
             <div class="card-body">
                 <div class="text-center"><span class="border d-inline-block"><i class="fa fa-user fa-3x"></i></span></div>
                <form action="actions/login.php" method="POST">
                    <div class="md-form">
                        <label for="email">Your Email</label>
                        <input type="text" id="email" name="email"
                        class="form-control">
                    </div>
                    <div class="md-form">
                        <label for="password">Password</label>
                        <input type="text" id="password"  name="password" class="form-control">
                    </div> 
                    <div class="text-center"><button class="btn btn-secondary" name="login">Login</button></div>
                </form>
             </div>
         </div>

     </div>
 </section> 

<?php include('footer.php') ?>