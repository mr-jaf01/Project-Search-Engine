<?php 
session_start(); 

//echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Search Engine| Home</title>
  <!-- MDB icon -->
  <link rel="icon" href="lg.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
<header>
  <div class="container-fluid mt-3">
    <div class="row justify-content-center">
      <div class="col-md-8 ">
        <h4 class=" font-weight-bold "><a class="grey-text" href="index.php">PROJECT SEARCH ENGINE SYSTEM</a></h2>
      </div>
      <div class="col-md-4">
      <?php 
      
      if(isset($_SESSION['username'])){
        ?>
        
        <p>
          <a href="#">Administrator</a> | <a class="red-text" href="logout.php">Logout</a>
        </p>

        <?php
      }else{
        
      }
      ?>
        
      </div>
    </div>
    <hr class="my-1"/>
  </div>
</header>

<main>
  <?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];
    include($page.'.php');
  }else{
    include('login.php');
  }
  ?>
</main>

  <!-- Start your project here-->  

  
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  <script src="https://use.fontawesome.com/c576d0c8cc.js"></script>
  <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();



      $(document).ready(function(){
        $('#search').keyup(function(){
          var textcontent = $(this).val();
          if(textcontent != ''){
              $.ajax({
                url:'action.php',
                method:'POST',
                data: {query:textcontent},
                success: function(response){
                  $('#showresult').html(response);
                }
              });

          }else{
            $('#showresult').html('');
          }
        });
      });

</script>

</body>
</html>
