<?php  ?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <center> <img src="images/logo.jpeg" /></center>
                <p class="text-center font-weight-bold">Admin Login</p>
                <br>
                <form action="" method="POST">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username" />
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                </div>

                <div class="form-group">
                    <button name="submit" class="btn btn-primary" style="border-radius:19px">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
         <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6">
                <?php 
                include('db/connect_db.php');
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    
                    $query_user = "SELECT * FROM admin WHERE username='$username'";
                    $run = mysqli_query($connect,$query_user);
                    while($data = mysqli_fetch_assoc($run)){
                        $dbusername = $data['username'];
                        $dbpassword = $data['password'];
                        
                    }
                    if(@$username == $dbusername){
                        if($password == $dbpassword){
                            ?>
                            <p class="alert alert-success">Login Successfully Redirecting...</p>
                            <?php
                            $_SESSION['username'] = $dbusername;
                            
                            header('Refresh:3, url=index.php?page=dashboard');

                        }else{
                            ?>
                        <p class="alert alert-danger">Incorrect Password</p>
                        <?php
                        }
                    }else{
                        ?>
                        <p class="alert alert-danger">Incorrect User name</p>
                        <?php
                    }

                }
                ?>
        </div>
     </div>
</div>
</section>
<hr class="my-1" >
<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="text-center font-weight-bold">
                Develeoped By MAHARAZU ABDULKADIR HND 2 CS FEDERAL POLYTECHNIC BAUCHI
                </p>
            </div>
        </div>
    </div>
</section>
<hr class="my-1">