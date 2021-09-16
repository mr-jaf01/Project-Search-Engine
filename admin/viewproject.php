<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>
                
                    <a href="index.php?page=viewproject" >View All Project</a> |
                    <a href="index.php?page=about" >About </a> |
                    
                </p>
            </div>
        </div>
    </div>
</section>
<hr class="my-1">
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4>All Uploaded Project</h4>
                <hr class="my-1" />

            <?php 
            include('db/connect_db.php');
            $search = "SELECT * FROM project";
            $run = mysqli_query($connect, $search);
            $check = mysqli_num_rows($run);
            if($check > 0){
                while($pdetails = mysqli_fetch_assoc($run)){
                    ?>
                    <div class="p-1" style="border: 1px solid grey;">
                    <p class="font-weight-bold">Project Tittle : <a class="font-weight-bold" href="#"><?php echo $pdetails['pro_title'] ?></a></p>
                    <hr/>
                    <p class="font-weight-bold">Uploaded by:<small><?php echo $pdetails['upload_by'] ?></small> On : <small><?php echo $pdetails['upload_date'] ?></small> | <a href="../projectfile/<?php echo $pdetails['pro_file'] ?>" class="green-text">View Reseach Paper</a> | <a href="delete.php?projectid=<?php echo $pdetails['pro_id'] ?>" class="btn btn-danger btn-sm right-text" style="border-radius:19px;">Remove Project</a></p>
                   
                   </div>
                   <?php
                   }
                    }else{
                        echo "<p>No Project Found</p>";
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