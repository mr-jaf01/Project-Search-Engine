<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <center> <img src="images/logo.jpeg" /></center>
                <p class="text-center font-weight-bold">Student Registration</p>
                <br>
                <form action="" method="POST">
                <div class="form-group">
                    <input class="form-control" type="text" required name="reg" placeholder="Reg Number" />
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" required name="name" placeholder="Full Name" />
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" required name="class" placeholder="Class" />
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" required name="department" placeholder="Department" />
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" required name="password" placeholder="Password" />
                </div>

                <div class="form-group">
                    <button name="submit" class="btn btn-primary" style="border-radius:19px">Rgister</button>
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
                    $reg = $_POST['reg'];
                    $name = $_POST['name'];
                    $class = $_POST['class'];
                    $department = $_POST['department'];
                    $pass = $_POST['password'];

                    $save = "INSERT INTO student(studReg,studName,studClass,studDepartment,password) 
                    VALUES('$reg','$name','$class','$department','$pass')";
                    $save_query = mysqli_query($connect,$save);
                    if($save_query){
                        ?>
                        <p class="alert alert-success">Rgistered Successfully</p>
                        <?php
                    }else{
                        ?>
                        <p class="alert alert-danger">Unable to Save Record</p>
                        <?php
                    }
                }
                ?>
        </div>
     </div>
</div>
</section>
<hr class="my-1">
<section class="">
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