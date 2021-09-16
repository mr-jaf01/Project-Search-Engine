<section>
<div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6 card p-5">
              <form action="" method="POST" enctype="multipart/form-data">
                    <div class="student">
                        <p>Welcome: <span class="font-weight-bold"><?php echo $_SESSION['name'] ?></span></p>
                    </div>
                    <div>
                        <small>Please Kindly Upload Your Project Research Write up</small><br>
                        <small>File Type: pdf, doc</small>
                    </div>
                    <hr class="my-1"/>
                    
                    
                        <br><input required type="text" class="form-control" name="title" placeholder="Project Tittle" />
                        <br>
                         <input type="file" required name="file" /> 
                         <br> 
                         <div style="width:100%">
                            <button name="saveproject" style="width:100%; border-radius:17px;" class="btn btn-primary">Save Record</button>
                         </div>
                   

                    <div class="submitting form">
                        <?php 
                        include('db/connect_db.php');
                        if(isset($_POST['saveproject'])){
                            $title = $_POST['title'];
                            $filename = $_FILES['file']['name'];
                            $file_tmp = $_FILES['file']['tmp_name'];
                            $file_type = $_FILES['file']['type'];
                            $allowedExts = array(
                                "pdf", 
                                "doc", 
                                "docx"
                              ); 
                              
                              $allowedMimeTypes = array( 
                                'application/msword',
                                'application/pdf'
                              );
                              
                              @$extension = end(explode(".", $filename));
                              
                              
                              if ( ! ( in_array($extension, $allowedExts ) ) ) {
                                die("<p class='alert alert-info'>Please Select only pdf and doc,docs</p>");
                              }
                              
                              if ( in_array( $_FILES["file"]["type"], $allowedMimeTypes ) ) 
                              {      
                               
                
                               $uplaodfile = move_uploaded_file($_FILES["file"]["tmp_name"], "projectfile/" . $_FILES["file"]["name"]);
                                if($uplaodfile){
                                    
                                    $savedetails = "INSERT INTO project(pro_title,upload_by,pro_file) 
                                    VALUES('$title','".$_SESSION['name']."','$filename')";
                                   $runsave = mysqli_query($connect,$savedetails);
                                   if($runsave){
                                     ?>
                                     
                                     <p class="alert alert-success">Project Save Successfully</p>
                                     <?php
                                    }



                                }
                              }
                              else
                              {
                              die("<p class='alert alert-info'>Please Select only pdf and doc,docs</p>");
                              }
                        }
                        ?>
                    </div>
                    </form>
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